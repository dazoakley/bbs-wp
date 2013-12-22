<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
    <head profile="http://gmpg.org/xfn/11">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="description" content="Building Bioinformatics Solutions is the companion website for the book with the same name.  News, updates and support.">
        <meta name="keywords" content="bioinformatics, biology, perl, mysql, r, programming, forum" />
        <meta name="verify-v1" content="rT24YD+Potnef1rDQZ5nK3WDV/NDcSuAAiiY8h2MHLM=" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
        <link rel="icon" type="image/png" href="/favicon32.png" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="header" class="container">
            <div id="site-title">
                <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                <p class="description"><?php bloginfo('description'); ?></p>
            </div>
        </div>
        <div id="container">
            <div id="site-navigation">
                <ul id="nav-list">
                    <?php
                      wp_nav_menu( array(
                        'menu'        => 'header-menu',
                        'depth'       => -1,
                        'container'   => false,
                        'items_wrap'  => '%3$s',
                        'menu_class'  => 'menu',
                        'fallback_cb' => 'wp_page_menu'
                      ));
                    ?>
                </ul>
            </div>
