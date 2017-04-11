<?php
if (!function_exists('blizzpro_article_index_feed')) {
    function blizzpro_article_index_feed($data) {

        $post_arr = array();

        $home = new WP_Query($data);

        foreach ($home->get_posts() as $post_object) {
            $post_object->link_override = get_permalink($post_object->ID);
            $post_object->image_override = get_the_post_thumbnail($post_object->ID, [380, 162], ['class' => 'media-object']);
            $post_object->cat_override = blizzpro_clean_cats(get_the_category($post_object->ID));
            $post_object->comments_override = get_comments_link($post_object->ID);
            $post_arr[] = $post_object;
        }

        wp_reset_postdata();

        return $post_arr;
    }
}