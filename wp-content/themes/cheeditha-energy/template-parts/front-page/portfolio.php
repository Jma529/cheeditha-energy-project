<?php

/* Variables */
$title = get_field('portfolio_title');

/* Post query */
  $args = array(
    'post_type'         => 'Project',
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $projects = new WP_Query($args);
?>

<?php if( $projects -> have_posts() ): ?>

<section class="slide-in black" id="portfolio-page">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1><?php echo $title?></h1>

      <?php while( $projects -> have_posts() ) : $projects -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $title = get_field('project_title');
        $description = get_field('project_desc');
        ?>

    <article class="gallery project">
      <div class="profile-image" style="background-image: url('<?php echo $image ?>');"></div>
        <div class="gallery-overlay">
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