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
            <div class="col-lg-8 col-sm-12">

                <?php
                get_template_part('template-parts/breadcrumb', 'single');
                get_template_part('template-parts/content', 'single');
                get_template_part('template-parts/social', 'single');
                get_template_part('template-parts/author', 'single');
                ?>

                <div class="comments-container" id="respond">
                    <?php
                    comments_template();
                    ?>
                </div>

            </div>
            <div class="col-xs-4 visible-lg widget-container">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php
endif;
?>

<?php get_footer();