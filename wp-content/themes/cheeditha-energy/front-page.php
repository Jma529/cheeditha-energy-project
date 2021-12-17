<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cheeditha-energy
 */
/* Template Name: Home */ 

@include 'header-light.php' ?>

<main class="coming-soon">
<div class="wrapper">
 
  <div class="flex">
     
      <div class="site-logo">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-cheeditha.svg" alt="<?php bloginfo( 'name' ); ?>" />
    </div>
    <div class="animation-wrap coming-soon">
      <video playsinline autoplay muted loop>
        <source src="<?php echo get_template_directory_uri(); ?>/media/cheeditha-animation.mp4" type="video/mp4">
      </video>
    </div>
    <div class="contact-info">
        <h1>New site coming soon...</h1>
        <h2>Need to get in touch?</h2>
				<p>
					<a href="mailto:enquire@cheeditha.com.au">enquire@cheedithaenergy.com.au</a>
				</p>
				<p>
					<a href="tel:1300861537">1300861537</a>
				</p>
			</div>

</div>
</div>

<?php get_footer(); ?>