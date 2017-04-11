<?php
// -- Frontend Scripts/CSS -- //
add_action('wp_enqueue_scripts', function () {

    $time = time();
    $cache_bust = isset($_GET['force']) ? '?v=' . $time : '';
    $cdn = '//cdnjs.cloudflare.com';

    // -- CSS -- //
    wp_enqueue_style('bootstrap.min.css', $cdn . '/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css' . $cache_bust);

    // -- JavaScript -- //
    wp_enqueue_script('jquery.min.js', $cdn . '/ajax/libs/jquery/2.2.3/jquery.min.js', [], null, true);
    wp_enqueue_script('bootstrap.min.js', $cdn . '/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js', [], null, true);
    wp_register_script('scripts.js', get_template_directory_uri() . '/scripts.js', [], null, true);
    wp_enqueue_script('html5shiv.min.js', $cdn . '/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', [], null, true);
    wp_enqueue_script('respond.min.js', $cdn . '/ajax/libs/respond.js/1.4.2/respond.min.js', [], null, true);

    // Add global javascript variable to the theme scripts
    wp_localize_script('scripts.js', 'ajax_url', admin_url('admin-ajax.php'));
    wp_enqueue_script('scripts.js' . $cache_bust);
});

// -- Facebook Include -- //
add_action('wp_footer', function () {

    echo ""
        . "<div id='fb-root'></div>"
        . "<script>(function(d, s, id) {"
        . "var js, fjs = d.getElementsByTagName(s)[0];"
        . "if (d.getElementById(id)) return;"
        . "js = d.createElement(s); js.id = id;"
        . "js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6';"
        . "fjs.parentNode.insertBefore(js, fjs);"
        . "}(document, 'script', 'facebook-jssdk'));</script>";
});