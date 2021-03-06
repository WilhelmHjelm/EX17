<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EX17
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta description="Examensdagarna för Grafisk design och kommunikation, 11-13 maj i Kåkenhus på Campus Norrköping.">
<meta property="og:site_name" content="EX16">
<?php $current_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<meta property="og:url" content="<?php echo $current_url; ?>">
<meta property="og:title" content="<?php if ( is_front_page() && is_home() ) : ?>Startsida<?php else : echo the_title(); endif; ?>">
<meta property="og:description" content="Examensdagarna för Grafisk design och kommunikation, 11-13 maj i Kåkenhus på Campus Norrköping.">
<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/screenshot.png">

<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.2.0.min.js"></script>
<script src="https://use.typekit.net/ywc5eyw.js"></script>
<script>try{Typekit.load({ async: false });}catch(e){}</script>

		<script>$(window).load(function(){
   $('.loading').fadeOut('fast');
});</script>

<script>function delay (URL) {setTimeout( function() { window.location = URL }, 500 );}</script>

<?php wp_head(); ?>

</head>

<?php
if ( is_front_page() ) : ?>
<body <?php body_class(); ?> id="<?php echo get_the_ID(); ?>">
	<div class="loading"></div>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<nav class="main-nav twelve columns">

						<a href="<?php echo get_home_url(); ?>"><div class="one columns mobile-nav-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo" height="70px"></div></a>
						<div class="five columns mobile-nav"><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'menu-1' ) ); ?> </div>
					</nav>
					<div class="twelve columns box header-box">
						<div class="site-title">
							<h1><?php bloginfo('title'); ?></h1>
						</div>
					</div>

					<?php
elseif ( is_post_type_archive('utstallning') || is_singular('utstallning')) : ?>
<body <?php body_class(); ?> id="<?php echo get_the_ID(); ?>">
<header id="masthead" class="site-header utstallning">
		<a href="<?php echo get_home_url();?>/utstallning" class="logotype"></a>
</header><!-- #masthead -->

				<?php else : ?>
					<body <?php body_class(); ?> id="<?php echo get_the_ID(); ?>">
						<div class="loading"></div>
					<div id="page" class="site">
						<header id="masthead" class="site-header" role="banner">
							<div class="container">
								<nav class="main-nav twelve columns">
					<a href="<?php echo get_home_url(); ?>"><div class="one columns mobile-nav-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo" height="70px"></div></a>
					<div class="five columns mobile-nav"><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'menu-1' ) ); ?> </div>
				</nav>
				<div class="twelve columns header-box-small <?php echo get_the_title( $ID ); ?> ">
					<h1 class="page-title white-text <?php echo get_the_ID(); ?>"><?php the_title(); ?></h1>
				</div>

				<?php

				endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
