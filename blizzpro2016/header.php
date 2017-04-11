<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="http://blizzpro.com/favicon.ico?v=2" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    $theme_locations = get_nav_menu_locations();
    $menu_obj = get_term( $theme_locations['menu'], 'nav_menu' );
    $items = wp_get_nav_menu_items($menu_obj->term_id, array('numberposts' => -1));
    $nav = array();

    foreach ($items as $item) {
        if ($item->menu_item_parent > 0 && isset($nav[$item->menu_item_parent])) {
            $nav[$item->menu_item_parent]['children'][] = array('name' => $item->title, 'url' => $item->url, 'classes' => '');
        } else {
            $nav[$item->ID] = array('name' => $item->title, 'children' => array(), 'url' => $item->url, 'classes' => $item->classes);
        }
    }
    ?>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" width="140" />
                </a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php // blizzpro_menu(); ?>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
                    <?php

                    foreach ($nav as $main) {
                        ?>
                        <li class="
                            <?php echo count($main['children']) ? 'dropdown' : ''; ?>
                            <?php echo $main['classes']; ?>">
                            <a href="<?php echo $main['url']; ?>"
                                <?php if (count($main['children'])) { ?>class="dropdown-toggle" data-toggle="dropdown"<?php } ?>>
                                <?php echo $main['name']; ?>
                                <?php if (count($main['children'])) { ?><span class="caret"></span><?php } ?>
                            </a>
                            <?php
                            if (count($main['children'])) {
                                ?>
                                <ul class="dropdown-menu">
                                <?php
                                foreach ($main['children'] as $child) {
                                    ?> <li><a href="<?php echo $child['url']; ?>"><?php echo $child['name']; ?></a> <?php
                                }
                                ?>
                                </ul>
                                <?php
                            }
                            ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>

                <ul class="nav navbar-nav site-links visible-mg visible-lg navbar-right">
                    <?php
                    foreach (blizzpro_site_links() as $key => $link): ?>
                    <li>
                        <a href="<?php echo $link; ?>" class='blizz-icon <?php if ($link == get_site_url()) { ?>active<?php } ?>'>
                            <img src="<?php echo get_template_directory_uri() . '/images/blizz-icons/' . $key; ?>" />
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
