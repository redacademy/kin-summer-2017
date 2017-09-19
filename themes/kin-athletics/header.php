<?php
/**
 * The header for our theme.
 *
 * @package Kin-_Athletics_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="kin-athletic-logo">
					<div class='kin-logo1'><a href='<?php echo esc_url( home_url( '/front-page/') )?>'><img src="<?php echo esc_url(get_template_directory_uri()); ?>/asset/logos/logo1.svg"/></a></div>
					<div class='kin-logo2'><a href='<?php echo esc_url( home_url( '/front-page/') )?>'><img src="<?php echo esc_url(get_template_directory_uri()); ?>/asset/logos/logo2.svg"/></a></div>					
				</div><!-- .kin-athletic-logo -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
