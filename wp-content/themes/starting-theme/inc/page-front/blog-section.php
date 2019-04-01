<?php

  $blog_img = get_field('blog_img');
  $blog_heading = get_field('blog_heading');
  $blog_copy = get_field('blog_copy');

 ?>

<div class="container-fluid blog_section" id="blog" style="background-image: url(<?php echo $blog_img ?>);">
  <div class="row">
    <div class="col-md-7 col-md-offset-5 blog_section__copy wow fadeInRight">
      <div class="wrapper">
        <h2><?php echo $blog_heading; ?></h2>
        <?php echo $blog_copy; ?>
        <img class="scroll" src="<?php echo get_template_directory_uri(); ?>/images/scroll.svg" alt="scroll">
      </div>
    </div>
  </div>
</div>
