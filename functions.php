<?php
/**
 * BlizzPro 2016 WordPress theme
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

require_once __DIR__ . '/inc/constants.php';
require_once __DIR__ . '/inc/helper.php';
require_once __DIR__ . '/inc/settings.php';


function blizzpro_site_links()
{
    return [
        "blizzpro.png"          => "",
        "ico_overwatch.png"     => "",
        "ico_hearthstone.png"   => "",
        "hots.png"              => "",
        "ico_wow.png"           => "",
        "diablo.png"            => "",
        "starcraft.png"         => ""
    ];
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