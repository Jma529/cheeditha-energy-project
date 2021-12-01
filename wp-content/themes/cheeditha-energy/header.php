<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cheeditha-energy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site flex">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cheeditha-energy' ); ?></a>

	<header id="masthead" class="header">
		<div class="header-wrapper">
			<div class="site-logo">
				<a href="<?php echo get_home_url(); ?>" class="header-logo">
              		<img class="logo" src="wp-content/themes/cheeditha-energy/Media/Images/logo-cheeditha.svg" alt="<?php bloginfo( 'name' ); ?>" />
            	</a>
			</div>
		<div class="vertical-line"></div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cheeditha-energy' ); ?></button>
			<div class="menu-items">
				<div class="menu-top">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-top',
					)
				);
				?>
			</div>
			<div class="vertical-line"></div>
			<div class="menu-middle">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-middle',
					)
				);
				?>
			</div>
			<div class="vertical-line"></div>
			<div class="menu-bottom">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-bottom',
					)
				);
				?>
			</div>

		</nav><!-- #site-navigation -->
	   </div>
	</header><!-- #masthead -->
