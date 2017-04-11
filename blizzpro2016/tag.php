<?php
/**
 * Lists the category archives for a specific category
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

get_header(); ?>

<div class="content">
    <div class="container-fluid">
        <?php
        if ( have_posts() ) :
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="container-fluid">
                    <h2><?php printf('Tag "%s"', single_tag_title('', false )); ?></h2>
                    <div class="row">

                        <div class="col-xs-12">
                            <div class="latest-news" data-articles data-tag="<?php echo single_tag_title('', false ); ?>"></div>
                            <a href="javascript:void(0);" class='load-more'>Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer();