<?php

/* Variables */
$title = get_field('partner_title');

/* Post query */
  $args = array(
    'post_type'         => 'Partner',
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $partners = new WP_Query($args);
?>

<?php if( $partners -> have_posts() ): ?>

<section class="slide-in black" id="partners">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex partner-list">
      <h1><?php echo $title?></h1>
    <div class="partner-grid">
      <?php while( $partners -> have_posts() ) : $partners -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $link = get_field('partner_link');
        $description = get_the_content();
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