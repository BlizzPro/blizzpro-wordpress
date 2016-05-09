<?php
/**
 * BlizzPro 2016 WordPress theme
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

require_once __DIR__ . '/inc/helper.php';

add_theme_support('post-thumbnails');

set_post_thumbnail_size(380, 162, ['center', 'center']);
add_image_size('featured-thumb', 268, 153, ['center', 'center']);


define('BLIZZPRO_FEATURE_LIMIT', 6);
define('BLIZZPRO_RELATED_LIMIT', 5);

function blizzpro_posted_by($time = true)
{
    echo '<small>';
    echo 'by ';
    the_author_posts_link();
    if ($time) echo ' - ' . time_ago_en(get_the_time());
    echo '</small>';
}

/**
 * Echo out the social bar beneath full articles seen on the "single.php" page
 *
 * @return void
 */
function blizzpro_social()
{
    echo "<div class='article-social'>
            <div
                class='fb-like'
                data-href='https://developers.facebook.com/docs/plugins/''
                data-layout='button_count'
                data-action='like'
                data-show-faces='false'
                data-share='true'></div>

            <a href='https://twitter.com/share' class='twitter-share-button'>&nbsp;</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>";
}

function blizzpro_home_articles()
{
    $home = new WP_Query([
        'caller_get_posts' => 1
    ]);

    while ($home->have_posts()) {
        $home->the_post();
        get_template_part('template-parts/content', get_post_format());
    }

    wp_reset_postdata();
}