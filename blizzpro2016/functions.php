<?php
/**
 * BlizzPro 2016 WordPress theme
 *
 * @package WordPress
 * @subpackage BlizzPro
 */

$icon_map = [
    1 => get_template_directory_uri() . '/images/blizz-icons/ico_blizzpro.png',
    4 => get_template_directory_uri() . '/images/blizz-icons/ico_hearthstone.png',
    6 => get_template_directory_uri() . '/images/blizz-icons/ico_heroes.png',
    7 => get_template_directory_uri() . '/images/blizz-icons/ico_diablo.png',
    9 => get_template_directory_uri() . '/images/blizz-icons/ico_wow.png',
    10 => get_template_directory_uri() . '/images/blizz-icons/ico_overwatch.png',
    11 => get_template_directory_uri() . '/images/blizz-icons/ico_starcraft.png'
];

require_once __DIR__ . '/inc/scripts_css.php';
require_once __DIR__ . '/inc/constants.php';
require_once __DIR__ . '/inc/helper.php';
require_once __DIR__ . '/inc/images.php';
require_once __DIR__ . '/inc/ajax.php';
require_once __DIR__ . '/inc/author.php';
require_once __DIR__ . '/inc/nav.php';
require_once __DIR__ . '/inc/shortcodes.php';
require_once __DIR__ . '/inc/widget.php';


function blizzpro_site_links()
{
    return [
        "ico_blizzpro.png"          => "http://blizzpro.com",
        "ico_overwatch.png"         => "http://overwatch.blizzpro.com",
        "ico_hearthstone.png"       => "http://hearthstone.blizzpro.com",
        "ico_heroes.png"            => "http://heroesofthestorm.blizzpro.com",
        "ico_wow.png"               => "http://warcraft.blizzpro.com",
        "ico_diablo.png"            => "http://diablo.blizzpro.com",
        "ico_starcraft.png"         => "http://starcraft.blizzpro.com"
    ];
}

// Add css class to excerpt
add_filter( "the_excerpt", function ($excerpt) {
    return str_replace("<p", "<p class=\"excerpt\"", $excerpt);
});

// Limit the excerpt
add_filter('excerpt_length', function ($length) {
    return 45;
});

// Add "active" context to menu items
add_filter( 'wp_get_nav_menu_items', function ($items, $menu, $args) {
    _wp_menu_item_classes_by_context($items);
    return $items;
}, 10, 3 );

// Register sidebars
register_sidebar(
    array(
        'name' => '2016 Widgets',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    )
);
