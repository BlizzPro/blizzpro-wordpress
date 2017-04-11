<?php
/**
 * @package WordPress
 * @subpackage BlizzPro
 */
get_header(); ?>

<div class="content">
    <div class="container-fluid">
        <?php
        global $icon_map;

        $blog_list = get_blog_list(0, 'all');
        $posts = [];

        foreach ($blog_list as $blog) {
            if (get_current_blog_id() == $blog['blog_id']) continue;
            switch_to_blog($blog['blog_id']);
            $sticky = get_option('sticky_posts');

            $featured = get_posts([
                'posts_per_page' => BLIZZPRO_FEATURE_LIMIT,
                'post__in' => $sticky,
                'caller_get_posts' => 1
            ]);

            # Record custom post data for featured template
            foreach ($featured as &$record) {
                $t = get_the_title($record->ID);
                $record->thumbnail = get_the_post_thumbnail($record->ID, 'featured-thumb', ['class' => 'media-object']);
                $record->title = sprintf('<h6 class="media-heading"><a href="%s">', esc_url(get_the_permalink($record->ID))) . $t . '</a><span class="blizz-icon" style="margin-left: 5px;"><img src="' . $icon_map[$blog['blog_id']] . '"/></span></h6>';
            }

            $posts = array_merge($posts, $featured);

            restore_current_blog();
        }

        function customsort($a, $b) {
            $a = strtotime($a->post_date);
            $b = strtotime($b->post_date);
            if ($a == $b) return 0;
            return ($a > $b) ? -1 : 1;
        }

        usort($posts, 'customsort');
        $posts = array_slice($posts, 0, BLIZZPRO_FEATURE_LIMIT);

        $count = 0;

        if (!empty($posts)):
        ?>
        <div class="row">
            <div class="col-xs-12 visible-lg">
                <div class="container-fluid">
                    <h2>Featured</h2>
                    <div class="row">
                    <?php
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        get_template_part('template-parts/featured');
                        $count++;
                    }

                    // Fill the empty space with placeholders
                    if ($count < BLIZZPRO_FEATURE_LIMIT) {
                        for ($i = $count; $i < BLIZZPRO_FEATURE_LIMIT; $i++) {
                            get_template_part('template-parts/featured-blank', get_post_format());
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <br/><br/>
        <?php
        endif;
        // Reset the post data
        wp_reset_postdata();
        ?>

        <div class="row">
            <div class="col-xs-12">
                <div class="container-fluid">
                    <h2>Latest News</h2>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="latest-news" data-articles></div>
                            <a href="javascript:void(0);" class='load-more'>Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();