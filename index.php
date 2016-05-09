<?php
/**
 * @package WordPress
 * @subpackage BlizzPro
 */

get_header(); ?>

<div class="content">
    <div class="container-fluid">
        <?php

        $sticky = get_option('sticky_posts');

        $featured = new WP_Query([
            'posts_per_page' => BLIZZPRO_FEATURE_LIMIT,
            'post__in' => $sticky,
            'caller_get_posts' => 1
        ]);

        if (!empty($sticky)):
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="container-fluid">
                    <h2>Featured</h2>
                    <div class="row">
                    <?php
                    while ($featured->have_posts()): $featured->the_post();
                        get_template_part('template-parts/featured', get_post_format());
                    endwhile;
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
                            <?php blizzpro_home_articles(); ?>

                            <a href="" class='load-more'>Load More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();