<?php

/* Variables */
$title = get_field('page_title');

/* Post query */
  $args = array(
    'post_type'         => 'capability',
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $capabilities = new WP_Query($args);
?>

<?php if( $capabilities -> have_posts() ): ?>

<section class="slide-in black" id="capabilities">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1><?php echo $title?></h1>
      <p><?php the_content(); ?></p>
      <div class="partner-grid">
      <?php while( $capabilities -> have_posts() ) : $capabilities -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $link = get_field('capabilities_link');
        $description = get_field('page_summary');
        ?>
  
        <div class="partner">
            <a href="<?php echo $link; ?>" target="_blank"> 
              <img class="partner-logo" src="<?php echo $image ?>');"/>
            </a>
            <p><?php echo $description ?></p>
        </div>
       

      <?php endwhile; wp_reset_postdata(); ?>

      </div> 
    </div>
  </div>
</section>

<?php endif; ?>