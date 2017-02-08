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
<meta description="Examensdagarna för Grafisk design och kommunikation, 12-14 maj i Kåkenhus på Campus Norrköping.">
<meta property="og:site_name" content="EX16">
<?php $current_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<meta property="og:url" content="<?php echo $current_url; ?>">
<meta property="og:title" content="<?php if ( is_front_page() && is_home() ) : ?>Startsida<?php else : echo the_title(); endif; ?>">
<meta property="og:description" content="Examensdagarna för Grafisk design och kommunikation, 11-13 maj i Kåkenhus på Campus Norrköping.">
<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_social_1200x630.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<nav class="main-nav twelve columns">
				<?php
				if ( is_front_page() && is_home() ) : ?>
						<img src="logo">
						<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav' ) ); ?>
					</nav>
					<div class="twelve columns">
						FIRST BOX
					</div>
				<?php else : ?>
					<img src="logo">
					<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_id' => 'main-nav' ) ); ?>
				</nav>
				<div class="twelve columns">
					FIRST BOX
				</div>
				<?php

				endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
