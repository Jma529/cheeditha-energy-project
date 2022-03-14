<?php

/* Variables */
$title = get_field('our_story_title');
$subtitle = get_field('our_story_summary');
$video = get_field('our_story_video');
$image = get_field('our_story_image');
$highlight_1_title = get_field('highlight_1_heading');
$highlight_1_sub = get_field('highlight_1_subheading');
$highlight_2_title = get_field('highlight_2_heading');
$highlight_2_sub = get_field('highlight_2_subheading');
$highlight_3_title = get_field('highlight_3_heading');
$highlight_3_sub = get_field('highlight_3_subheading');
$highlight_4_title = get_field('highlight_4_heading');
$highlight_4_sub = get_field('highlight_4_subheading');


?>


<section class="slide-in black" id="our-story">
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
          <h2 class="big"> <?php echo $highlight_1_title ?> </h2>
          <span> <?php echo $highlight_1_sub ?> </span>
        </div>
        <div class="highlight">
        <h2 class="big"> <?php echo $highlight_2_title ?> </h2>
          <span> <?php echo $highlight_1_sub ?> </span>
        </div><div class="highlight">
        <h2 class="big"> <?php echo $highlight_3_title ?> </h2>
          <span> <?php echo $highlight_1_sub ?> </span>
        </div><div class="highlight">
        <h2 class="big"> <?php echo $highlight_4_title ?> </h2>
          <span> <?php echo $highlight_1_sub ?> </span>
        </div>
      </div>
        
    </div>

  </div>




</section>
