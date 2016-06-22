<?php
// --- USAGE: [youtube id=""] --- //
add_shortcode('youtube', function ($atts, $content = null) {
    extract(shortcode_atts(array( "id" => '' ), $atts));
    return '<iframe width="560" height="315" src="//www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>';
});

// --- USAGE: [bluepost]content[/bluepost] --- //
add_shortcode('bluepost', function ($atts, $content = null) {
    return '<blockquote class="bluepost">' . $content . '</blockquote>';
});