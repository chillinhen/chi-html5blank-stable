<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php
            if (wp_title('', false)) {
                echo ' :';
            }
            ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>


            <!-- header -->
            <header class="header clear" role="banner">

                <!-- logo -->
                <h1 class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img" alt="<?php get_bloginfo('name'); ?>">
                        <span><?php bloginfo('title'); ?> - <?php bloginfo('description'); ?></span>
                    </a>
                </h1>
                <?php #if(is_front_page()) : ?>
                <div class="titles">
<?php get_template_part('partials/header', 'slides'); ?>
                </div>
                <?php #endif; ?>
                <!-- /logo -->


                <!-- /nav -->
            </header>
            <!-- /header -->
            <main role="main">
                <!-- nav 
                <nav class="nav" role="navigation">
<?php #html5blank_nav(); ?>
                </nav>-->

