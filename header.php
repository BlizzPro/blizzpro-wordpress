<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" width="140" />
            </a>
        </div>

        <ul class="nav navbar-nav center-nav">
            <li class='active'><a href="#">News</a></li>
            <li><a href="#">Characters</a></li>
            <li><a href="#">Loot Items</a></li>
            <li><a href="#">Maps</a></li>
            <li><a href="#">Patch Notes</a></li>
            <li><a href="#">BlizzPro.tv</a></li>
            <li><a href="#">Contact Us (remove)</a></li>
        </ul>

        <ul class="nav navbar-nav site-links">
            <?php
            foreach (blizzpro_site_links() as $key => $link): ?>
            <li>
                <a href="<?php echo $link; ?>" class='blizz-icon'>
                    <img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/' . $key; ?>" />
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
