<?php

$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 4,
  'post_status'    => 'publish'
);
$query = new WP_Query( $args );

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
          <a href="<?php the_permalink(); ?>">Click here for more</a>

        </div>
    <?php endwhile; ?>
   </div>
 </div>
 <?php endif; wp_reset_postdata(); ?>

 <div class="container-fluid social-referral">
   + View all <a href="/blog">Blog posts</a>
 </div>
