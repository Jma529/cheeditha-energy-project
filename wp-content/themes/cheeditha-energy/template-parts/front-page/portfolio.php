<?php

/* Variables */
$title = get_field('portfolio_title');

/* Post query */
  $args = array(
    'post_type'         => 'Projects',
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $team = new WP_Query($args);
?>


<?php if( $team -> have_posts() ): ?>
<h1>Hello</h1>
<section class="slide-in black" id="portfolio-page">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1><?php echo $title?></h1>

      <?php while( $team -> have_posts() ) : $team -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $title = get_field('project_title');
        $description = get_field('project_desc');
        ?>

    <article>
      <div class="profile-image" style="background-image: url('<?php echo $image ?>');"></div>
      <div class="profile-content">
        <h3 class="name"><?php the_title(); ?></h3>
        <span class="position"><?php echo $title ?></span>
        <p class="description"><?php echo $description ?></p>
      </div>
    </article>

      <?php endwhile; wp_reset_postdata(); ?>
      
    </div>

  </div>
</section>

<?php endif; ?>