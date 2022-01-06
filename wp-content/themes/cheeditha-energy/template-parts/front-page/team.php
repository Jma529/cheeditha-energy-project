<?php

/* Variables */
$title = get_field('our_people_title');

/* Post query */
  $args = array(
    'post_type'         => 'Team',
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $team = new WP_Query($args);
?>


<?php if( $team -> have_posts() ): ?>

<section class="slide-in black" id="our-people">
  <div class="relative">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1><?php echo $title?></h1>

      <?php while( $team -> have_posts() ) : $team -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $position = get_field('team_member_position');
        $description = get_field('team_member_bio');
        ?>

    <article>
      <div class="gallery profile">
      <img class="profile-image" src="<?php echo $image ?>')"/>
        <div class="gallery-overlay">
          <p class="description"><?php echo $description ?></p>
        </div>
      </div>
      <div class="profile-content">
      <h3 class="name"><?php the_title(); ?></h3>
        <span class="position"><?php echo $position ?></span>
      </div>
    </article>

      <?php endwhile; wp_reset_postdata(); ?>
      
    </div>

  </div>
  <div>
  <img class="bg-accent pea" src="<?php echo get_template_directory_uri(); ?>/media/images/img-pea.png" alt="<?php bloginfo( 'name' ); ?>" />
  </div>
  </div>
</section>

<?php endif; ?>