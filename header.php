<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
            <li><a href="#" class='blizz-icon active'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/blizzpro.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/overwatch.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/hearthstone.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/hots.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/wow.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/diablo.png'; ?>" /></a></li>
            <li><a href="#" class='blizz-icon'><img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/starcraft.png'; ?>" /></a></li>
        </ul>
    </nav>
