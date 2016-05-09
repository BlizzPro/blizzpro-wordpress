<?php
/**
 * @package WordPress
 * @subpackage BlizzPro
 */

get_header();

if ( have_posts() ) : the_post();
?>
<div class="content">
    <div class="container">
        <div class="row article-box">
            <div class="col-xs-8">

                <?php
                the_breadcrumb();
                get_template_part('template-parts/content', 'single');
                blizzpro_social();
                ?>

                <div class="comments-container">
                    <?php
                    $template = apply_filters('comments_template', '');

                    if (file_exists($template))
                    {
                        echo '</br>';
                        echo '<div class="comments-wrapper">';
                        require_once $template;
                        echo '</div>';
                    }
                    ?>
                </div>

            </div>
            <div class="col-xs-4">
                <div class="related-articles">

                    <h4>Related Articles</h4>

                    <?php
                    $categories = wp_get_post_categories(get_the_ID());

                    $args = [
                        'category__in' => $categories,
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => BLIZZPRO_RELATED_LIMIT,
                        'caller_get_posts' => 1
                    ];

                    $related = new WP_Query($args);

                    while ($related->have_posts()):
                        $related->the_post();
                        get_template_part('template-parts/related');
                    endwhile;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
endif;
?>

<?php get_footer();