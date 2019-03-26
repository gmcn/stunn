<?php

  $gallery_img = get_field('gallery_img');
  $gallery_heading = get_field('gallery_heading');
  $gallery_copy = get_field('gallery_copy');

 ?>

<div class="container-fluid gallery_section" id="gallery" style="background: url(<?php echo $gallery_img ?>) fixed; background-size: cover;">
  <div class="row">
    <div class="col-md-6 gallery_section__copy wow fadeInLeft">
      <div class="wrapper">
        <h2><?php echo $gallery_heading; ?></h2>
        <?php echo $gallery_copy; ?>
        <img class="scroll" src="<?php echo get_template_directory_uri(); ?>/images/scroll.svg" alt="scroll">
      </div>
    </div>
  </div>
</div>
