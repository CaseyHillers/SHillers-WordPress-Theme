<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container-fluid">
	<header id="masthead" class="site-header" role="banner">
		<div class="row navbar">
	    <div class="col-xs-12">
				<button type="button" class="navbar-toggle withripple" id="navbar-button">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" class="site-title" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="row"><!-- Stuff below header -->
		<div class="nav col-xs-12 col-sm-3 col-md-3">
			<nav id="site-navigation" class="nav nav-pills nav-stacked navigational" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
			</nav><!-- #site-navigation -->
		</div>

		<div id="content" class="site-content col-xs-12 col-sm-9 col-md-8">
