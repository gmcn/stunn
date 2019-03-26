<?php

$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 4,
  'post_status'    => 'publish'
);
$query = new WP_Query( $args );

$main_media_type = get_field('main_media_type');

 ?>

 <?php if ( $query->have_posts() ) : ?>
 <div class="container-fluid">
   <div class="row">
     <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-3 blog-entry" style="background: url(<?php echo the_post_thumbnail_url('medium'); ?>) center center; background-size:cover;">
          <div class="date">
            <?php the_date('d.m.y'); ?>
          </div>
          <h3><?php the_title(); ?></h3>

          <?php echo $main_media_type ?>

          <?php if( get_field('main_media_type') == 'text' ) : ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/text-icon.svg" alt="">
          <?php endif; ?>

          <?php if (get_field('main_media_type') == 'video') : ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/play-icon.svg" alt="">
          <?php endif; ?>

          <?php if (get_field('main_media_type') == 'image') : ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/camera-icon.svg" alt="">
          <?php endif; ?>

          <a href="<?php the_permalink(); ?>">Click here for more</a>

        </div>
    <?php endwhile; ?>
   </div>
 </div>
 <?php endif; wp_reset_postdata(); ?>

 <div class="container-fluid social-referral">
   + View all <a href="/blog">Blog posts</a>
 </div>
