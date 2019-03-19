<?php if ( have_posts() ) : ?>
  <div class="container-fluid blog-posts">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>


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
<?php endif; ?>
