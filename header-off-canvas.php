<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package _stilts
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_page('off-canvas')) : ?>
	<?php wp_enqueue_script('jquery-off-canvas', get_stylesheet_directory_uri() . '/js/page-off-canvas.js', array('jquery')); ?> 
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<h3 class="menu-toggle"><?php _e( 'Menu', '_stilts' ); ?></h3>
	</header><!-- #masthead -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
		<div class="slide-navigation" role="navigation">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_stilts' ); ?></a>
		
		<div id="off-canvas-nav" class="slide">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
