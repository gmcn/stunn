<?php

  $about_img = get_field('about_img');
  $about_heading = get_field('about_heading');
  $about_copy = get_field('about_copy');

 ?>

<div class="container-fluid about_section" id="about" style="background-image: url(<?php echo $about_img ?>);">
  <div class="row">
    <div class="col-md-7 col-md-offset-5 about_section__copy wow fadeInRight">
      <div class="wrapper">
        <h2><?php echo $about_heading; ?></h2>
        <?php echo $about_copy; ?>
        <img class="scroll" src="<?php echo get_template_directory_uri(); ?>/images/scroll.svg" alt="scroll">
      </div>
    </div>
  </div>
</div>
