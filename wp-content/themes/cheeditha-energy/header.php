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
				<a href="#" class="social-icon">
					<svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 2.5475C0.25 1.93817 0.492058 1.35379 0.922923 0.922925C1.35379 0.49206 1.93817 0.250003 2.5475 0.250003H25.45C25.752 0.24951 26.0511 0.308582 26.3302 0.423836C26.6093 0.539091 26.8629 0.708265 27.0766 0.921673C27.2902 1.13508 27.4597 1.38853 27.5752 1.66752C27.6908 1.9465 27.7502 2.24553 27.75 2.5475V25.45C27.7503 25.752 27.6911 26.0512 27.5757 26.3303C27.4603 26.6094 27.291 26.863 27.0775 27.0766C26.864 27.2903 26.6105 27.4597 26.3314 27.5752C26.0524 27.6908 25.7533 27.7502 25.4513 27.75H2.5475C2.24568 27.75 1.94682 27.6905 1.668 27.575C1.38917 27.4595 1.13584 27.2901 0.92248 27.0766C0.709121 26.8632 0.539915 26.6097 0.424528 26.3309C0.309142 26.052 0.249836 25.7531 0.25 25.4513V2.5475ZM11.135 10.735H14.8588V12.605C15.3963 11.53 16.7713 10.5625 18.8375 10.5625C22.7988 10.5625 23.7375 12.7038 23.7375 16.6325V23.91H19.7288V17.5275C19.7288 15.29 19.1913 14.0275 17.8263 14.0275C15.9325 14.0275 15.145 15.3888 15.145 17.5275V23.91H11.135V10.735ZM4.26 23.7388H8.27V10.5625H4.26V23.7375V23.7388ZM8.84375 6.265C8.85131 6.60834 8.79022 6.94974 8.66405 7.26915C8.53788 7.58856 8.34919 7.87955 8.10904 8.12504C7.86889 8.37054 7.58212 8.56559 7.26557 8.69876C6.94902 8.83193 6.60905 8.90053 6.26563 8.90053C5.9222 8.90053 5.58224 8.83193 5.26568 8.69876C4.94913 8.56559 4.66236 8.37054 4.42221 8.12504C4.18206 7.87955 3.99337 7.58856 3.8672 7.26915C3.74104 6.94974 3.67994 6.60834 3.6875 6.265C3.70234 5.59107 3.98048 4.94974 4.46236 4.47836C4.94423 4.00698 5.59153 3.74303 6.26563 3.74303C6.93972 3.74303 7.58702 4.00698 8.06889 4.47836C8.55077 4.94974 8.82891 5.59107 8.84375 6.265V6.265Z" fill="currentColor"/>
				</svg>
			</a>
			<a href="#" class="social-icon">
			<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
<path d="M20.625 0H9.375C4.19813 0 0 4.19813 0 9.375V20.625C0 25.8019 4.19813 30 9.375 30H20.625C25.8019 30 30 25.8019 30 20.625V9.375C30 4.19813 25.8019 0 20.625 0ZM27.1875 20.625C27.1875 24.2437 24.2437 27.1875 20.625 27.1875H9.375C5.75625 27.1875 2.8125 24.2437 2.8125 20.625V9.375C2.8125 5.75625 5.75625 2.8125 9.375 2.8125H20.625C24.2437 2.8125 27.1875 5.75625 27.1875 9.375V20.625Z" fill="currentColor"/>
<path d="M15 7.5C10.8581 7.5 7.5 10.8581 7.5 15C7.5 19.1419 10.8581 22.5 15 22.5C19.1419 22.5 22.5 19.1419 22.5 15C22.5 10.8581 19.1419 7.5 15 7.5ZM15 19.6875C12.4162 19.6875 10.3125 17.5838 10.3125 15C10.3125 12.4144 12.4162 10.3125 15 10.3125C17.5838 10.3125 19.6875 12.4144 19.6875 15C19.6875 17.5838 17.5838 19.6875 15 19.6875Z" fill="currentColor"/>
<path d="M23.0625 7.93686C23.6144 7.93686 24.0619 7.48942 24.0619 6.93748C24.0619 6.38555 23.6144 5.93811 23.0625 5.93811C22.5106 5.93811 22.0631 6.38555 22.0631 6.93748C22.0631 7.48942 22.5106 7.93686 23.0625 7.93686Z" fill="currentColor"/>
				</svg>
			</a>
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
