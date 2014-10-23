<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package designosource
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="wp-content/themes/designosource_2014/style.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'designosource' ); ?></a>

	<header class="banner navbar navbar-default navbar-static-top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
	    </div>

	    <nav class="collapse navbar-collapse" role="navigation">
	      <?php
	        if (has_nav_menu('primary')) :
	          wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav'));
	        endif;
	      ?>
	    </nav>
	  </div>
	</header>

	<div id="content" class="site-content">
