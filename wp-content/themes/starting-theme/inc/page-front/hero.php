<?php

  $heroImg = get_field('hero_img');

 ?>


<div class="container-fluid hero" style="background: url(<?php echo $heroImg ?>) center center; background-size: cover;">
  <img class="scroll pulse" src="<?php echo get_template_directory_uri(); ?>/images/scroll.svg" alt="scroll">
  <div class="header hidden-xs hidden-sm hidden-md">

      <a href="/">
        <img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Stunn Photography">
      </a>
      <div class="social">
        <span class="open" onclick="openNav()">
          <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.svg" alt="close">
        </span>
        <a href="https://www.instagram.com/stunnphotography/"> <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-logo.svg" alt="instagram"></a>
        <a href="https://www.facebook.com/STUNNPhotography/"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-logo.svg" alt="facebook"></a>
        <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-logo.svg" alt="youtube"></a>
      </div>
  </div>
</div>
