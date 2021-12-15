<?php 
// Variables 

$animation = get_field('animation');
?>

<div class="animation-wrap">
  <video autoplay="true" muted="true" loop="true" preload="true">
    <source src="<?php echo $animation; ?>" type="video/mp4">
  </video>
</div>