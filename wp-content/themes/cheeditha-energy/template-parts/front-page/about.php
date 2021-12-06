<?php

/* Variables */
$title = get_field('our_story_title');
$subtitle = get_field('our_story_summary');
$video = get_field('our_story_video');
$image = get_field('our_story_image');


?>


<section class="slide-in black" id="our-story-page">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1><?php echo $title ?></h1>
      <p><?php echo $subtitle ?> </p>
      <?php if( $video ) : ?>
        <div class="video about-video">
          <?php echo $video ?>
        </div>  
      <?php elseif( $image ) : ?>
        <div class="image about-image">
          <img src="<?php echo $image; ?>"/>
        </div>  
      <?php endif; ?>
      <div class="highlights">
        <div class="highlight">
          <h2>10,000</h2>
          <span>Emissions saved</span>
        </div>
        <div class="highlight">
        <h2>10,000</h2>
          <span>Emissions saved</span>
        </div><div class="highlight">
        <h2>10,000</h2>
          <span>Emissions saved</span>
        </div><div class="highlight">
        <h2>10,000</h2>
          <span>Emissions saved</span>
        </div>
      </div>
        
    </div>

  </div>


</section>
