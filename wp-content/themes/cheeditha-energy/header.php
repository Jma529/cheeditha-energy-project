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

 // Variables 
 $email = get_field('email');
 $phone = get_field('phone');
 $linkedin = get_field('linkedin');
 $instagram = get_field('instagram');
 $address = get_field('address');
 $animation = get_field('animation');
 $webm_animation = get_field('webm_animation');

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
	<div class="animation-wrap">
  <video playsinline autoplay muted loop>
    <source src="<?php echo $animation; ?>" type="video/mp4">
		<source src="<?php echo $webm_animation; ?>" type="video/webm">
  </video>
	</div>
	<header id="masthead" class="header">
		<div class="header-wrapper">
			<div class="site-logo desktop">
				<a href="<?php echo get_home_url(); ?>" class="header-logo">
              		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-cheeditha.svg" alt="<?php bloginfo( 'name' ); ?>" />
            	</a>
			</div>
		<div class="vertical-line"></div>
		<nav id="site-navigation" class="main-navigation">
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
		<div class="vertical-line"></div>
		<div class="contact">
			<div class="social-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/media/images/icon-linkedin.svg"/>
				<img src="<?php echo get_template_directory_uri(); ?>/media/images/icon-instagram.svg"/>
			</div>
			<div class="contact-info">
				<p><?php echo $address ?></p>
				<p>
					<a href="mailto:<?php echo $email?>"><?php echo $email ?></a>
				</p>
				<p>
					<a href="tel:<?php echo $phone?>"><?php echo $phone ?></a>
				</p>
			</div>
	

		</div>
	   </div>

	</header><!-- #masthead -->
