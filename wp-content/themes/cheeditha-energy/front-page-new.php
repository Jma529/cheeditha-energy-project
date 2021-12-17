<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cheeditha-energy
 */
/* Template Name: Home */ 

get_header(); ?>

<main class="front-page">

<?php 

// get_template_part('template-parts/front-page/hero');

get_template_part('template-parts/front-page/about');

get_template_part('template-parts/front-page/team');

get_template_part('template-parts/front-page/portfolio');

get_template_part('template-parts/front-page/partners');

get_template_part('template-parts/front-page/contact');

?>

</main>

<?php get_footer(); ?>