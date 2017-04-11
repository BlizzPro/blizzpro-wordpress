<?php
/**
 * Abstract child index page
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

get_header(); ?>

<div class="content">
    <div class="container-fluid">
        <?php
        $posts = [];
        $sticky = get_option('sticky_posts');

        if ($stick) {
            $featured = get_posts([
                'posts_per_page' => BLIZZPRO_FEATURE_LIMIT,
                'post__in' => $sticky,
                'caller_get_posts' => 1
            ]);
        } else {
            $featured = [];
        }

        # Record custom post data for featured template
        foreach ($featured as $record) {
            $t = get_the_title($record->ID);
            $record->thumbnail = get_the_post_thumbnail($record->ID, 'featured-thumb', ['class' => 'media-object']);
            $record->title = sprintf('<h6 class="media-heading"><a href="%s">', esc_url(get_the_permalink($record->ID))) . $t . '</a></h6>';
            $posts[] = $record;
        }

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