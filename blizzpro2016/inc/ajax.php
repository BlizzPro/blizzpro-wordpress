<?php

if (!function_exists('blizzpro_article_index_feed')) {
    function blizzpro_article_index_feed($data) {

        global $icon_map;

        $post_arr = array();

        $blog_list = get_sites();
        foreach (array_keys($icon_map) as $blog_id) {
            switch_to_blog($blog_id);

            $home = new WP_Query($data);

            foreach ($home->get_posts() as $post_object) {
                $post_object->link_override = get_permalink($post_object->ID);
                $post_object->image_override = get_the_post_thumbnail($post_object->ID, [380, 162], ['class' => 'media-object']);
                $post_object->cat_override = blizzpro_clean_cats(get_the_category($post_object->ID));
                $post_object->comments_override = get_comments_link($post_object->ID);
                $post_object->icon = $icon_map[$blog_id];
                $post_arr[] = $post_object;
            }

            wp_reset_postdata();
            restore_current_blog();
        }

        return $post_arr;
    }
}

function blizzpro_clean_cats($cats) {

    $separator = ' ';
    $output = '';
    foreach($cats as $category) {
        $output .= '<a href="' . get_category_link($category->term_id) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name)) . '">' . $category->cat_name . '</a>' . $separator;
    }

    return trim($output, $separator);
}

function blizzpro_article_ajax() {
    global $post, $wpdb;
    error_reporting(E_ALL);
    ini_set("display_errors", "On");

    if (constant('DOING_AJAX')) {

        $paged          = 1; // Relying on dates for paging now
        $posts_per_page = isset($_GET['posts_per_page']) ? $_GET['posts_per_page'] : 0;

        $data = [
            'ignore_sticky_posts'   => 1,
            'posts_per_page'        => $posts_per_page,
            'paged'                 => $paged,
            'post_status'           => 'publish',
            'orderby'               => 'date'
        ];

        if (isset($_GET['tag'])) $data['tag'] = str_replace(['+', ' '], '-', strtolower($_GET['tag']));
        if (isset($_GET['author'])) $data['author'] = $_GET['author'];
        if (isset($_GET['cat'])) $data['cat'] = $_GET['cat'];

        if (isset($_GET['date'])) {
            $data['date_query'] = [
                'before' => $_GET['date']
            ];
        }

        $post_arr = blizzpro_article_index_feed($data);

        usort($post_arr, function ($a, $b) {

            $timeA = strtotime($a->post_date_gmt);
            $timeB = strtotime($b->post_date_gmt);

            if ($timeA == $timeB)
            {
                return 0;
            }

            return ($timeA > $timeB) ? -1 : 1;
        });

        $post_arr = array_slice($post_arr, 0, $posts_per_page);

        foreach ($post_arr as $post_object) {
            $post = $post_object;
            setup_postdata($post);

            get_template_part('template-parts/content', get_post_format());
        }

        wp_reset_postdata();
    }

    die();
}

add_action('wp_ajax_article_ajax', 'blizzpro_article_ajax');
add_action('wp_ajax_nopriv_article_ajax', 'blizzpro_article_ajax');