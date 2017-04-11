<?php
require_once __DIR__ . '/wp_bootstrap_navwalker.php';

add_action('init', function () {
    register_nav_menu('menu', __('Header Menu'));
    register_nav_menu('footer', __('Footer Menu'));
});

function blizzpro_menu() {
    wp_nav_menu([
        'depth'             => 2,
        'container'         => false,
        'theme_location'    => 'menu',
        'menu_class'        => 'nav navbar-nav center-nav hidden-xs',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
    ]);
}