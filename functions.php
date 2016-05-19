<?php
/**
 * BlizzPro 2016 WordPress theme
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

require_once __DIR__ . '/inc/scripts_css.php';
require_once __DIR__ . '/inc/constants.php';
require_once __DIR__ . '/inc/helper.php';
require_once __DIR__ . '/inc/settings.php';
require_once __DIR__ . '/inc/ajax.php';
require_once __DIR__ . '/inc/author.php';


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