<?php 

// Variables 

$title = get_field('contact_title');
$subtitle = get_field('contact_subtitle');

?>


<section class="slide-in black" id="contact">
  <div class="wrapper">
    <div class="close">Close</div>
    <div class="content flex">
      <h1> <?php echo $title ?> </h1>
      <p><?php echo $subtitle ?> </p>
      <div class="form">
      <?php echo do_shortcode('[ninja_form id="1"]'); ?>
      </div>
    </div>
  </div>
</section>