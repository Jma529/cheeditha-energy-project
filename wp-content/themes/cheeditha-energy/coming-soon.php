<?php
/**
 * The template for displaying the comimng soon page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cheeditha-energy
 */
/* Template Name: Coming Soon */ 

get_header(); ?>

<main class="coming-soon">
<div class="wrapper">
 
  <div class="flex">
      <div class="title">
        <h1>New site coming soon...</h1>
      </div>
      <div class="site-logo">
      <a href="<?php echo get_home_url(); ?>" class="header-logo">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-cheeditha.svg" alt="<?php bloginfo( 'name' ); ?>" />
      </a>
    </div>
    <div class="animation-wrap">
      <video autoplay="true" muted="true" loop="true" preload="true">
        <source src="<?php echo get_template_directory_uri(); ?>/media/cheeditha-animation.mp4" type="video/mp4">
      </video>
    </div>
</div>
</div>

<?php get_footer(); ?>