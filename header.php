<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="alternate" href="<?php the_permalink(); ?>" hreflang="x-default">
    <meta name="viewport" content="width=device-width"/>
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" as="style">
    <?php wp_head(); ?>
	<style>
		#my-menu:not( .mm-menu) {
			display: none;
		}
	</style>
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link rel="dns-prefetch" href="//www.googletagmanager.com">
</head>
<body <?php body_class(); ?>>
    <div id="my-page" style="border: 0px solid #000;">
        <header id="header" style="" class="desktop">
            <div class="wrapper">
                <div id="site-title">
                    <a href="<?php echo get_home_url(); ?>" class="logo-header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo-main" alt=""></a>
                    <div id="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </div>
		    <?php $defaults = array( 'container' => '', 'menu' => 'main-menu', 'menu_class' => 'menu-mobile menu' ); wp_nav_menu( $defaults ); ?>
                    <?php //wp_nav_menu( array( 'theme_location' => 'main-menu','container_id' => 'main-nav', 'container' => false, 'menu_id' => 'myMenu', 'menu_class' => 'menu-mobile menu' ) ); ?>
                </div>
            </div>
        </header>
		<header  class="mobile">
		<div id="my-header">
                <a class="mburger mburger--collapse" href="#my-menu">
                    <b></b>
                    <b></b>
                    <b></b>
                    <span>Menu</span>
                </a>
			 <a href="<?php echo get_home_url(); ?>" class="logo-header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo-main" alt=""></a>
                <nav id="my-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_id' => 'main-nav', 'container' => false, 'menu_id' => 'myMenu', 'menu_class' => 'menu-mobile' ) ); ?>
                </nav>
            </div>
		</header>
