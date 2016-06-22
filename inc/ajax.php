<?php
function blizzpro_article_ajax() {

    if (constant('DOING_AJAX')) {

        $paged          = isset($_GET['paged']) ? $_GET['paged'] : 0;
        $posts_per_page = isset($_GET['posts_per_page']) ? $_GET['posts_per_page'] : 0;

        $home = new WP_Query([
            'caller_get_posts'  => 1,
            'posts_per_page'    => $posts_per_page,
            'paged'             => $paged
        ]);

        while ($home->have_posts()) {
            $home->the_post();
            get_template_part('template-parts/content', get_post_format());
        }

        wp_reset_postdata();
    }

    die();
}

add_action('wp_ajax_article_ajax', 'blizzpro_article_ajax');
add_action('wp_ajax_nopriv_article_ajax', 'blizzpro_article_ajax');