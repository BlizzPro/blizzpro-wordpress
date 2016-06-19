<?php
require_once __DIR__ . '/wp_bootstrap_navwalker.php';

add_action('init', function () {
    register_nav_menu('menu', __('Header Menu'));
});

function blizzpro_menu() {
    wp_nav_menu([
        'depth'         => 1,
        'container'     => false,
        'menu_class'    => 'nav navbar-nav center-nav',
        'fallback_cb'   => 'wp_bootstrap_navwalker::fallback',
        'walker'        => new wp_bootstrap_navwalker()
    ]);
}