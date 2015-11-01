<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Winnie-Palay
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'winnie-palay' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'left-menu', 'menu_id' => 'left-menu' ) ); ?>
			<a href="<?php get_site_url(); ?>"><div class="logo"></div></a>
			<?php wp_nav_menu( array( 'theme_location' => 'right-menu', 'menu_id' => 'right-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<a href="<?php get_site_url(); ?>"><div class="mobile-logo"></div></a>
		<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu' ) ); ?>
		<div class="slicknav-wrap"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
