<?php
/**
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
                    <h2><?php printf( __( 'All posts by "%s"', 'twentyfourteen' ), get_the_author() ); ?></h2>
                    <div class="row">

                        <div class="col-xs-12">
                            <div class="latest-news" data-articles data-author="<?php echo get_the_author_id(); ?>"></div>
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