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
            <div class="col-xs-12">

                <?php
                get_template_part('template-parts/breadcrumb', 'page');
                get_template_part('template-parts/content', 'page');
                get_template_part('template-parts/social', 'page');
                ?>
            </div>
        </div>
    </div>
</div>

<?php
endif;
?>

<?php get_footer();