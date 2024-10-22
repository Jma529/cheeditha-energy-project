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
	<div class="bg-topo"></div>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cheeditha-energy' ); ?></a>
	<div class="site-logo mobile">
				<a href="<?php echo get_home_url(); ?>" class="header-logo">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-cheeditha.svg" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
	</div>