<?php
// --- USAGE: [youtube id=""] --- //
add_shortcode('youtube', function ($atts, $content = null) {
    extract(shortcode_atts(array( "id" => '' ), $atts));
    return '<iframe width="560" height="315" src="//www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>';
});