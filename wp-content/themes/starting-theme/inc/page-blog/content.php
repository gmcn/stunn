<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="container-fluid blog-single">
      <div class="row">
        <div class="col-md-6">
          <div class="row blog-single__details">
            <div class="col-xs-6 col-lg-4 blog-single__details__date matchheight">
              <?php echo the_date('d.m.Y'); ?>
            </div>
            <div class="col-xs-6 col-lg-4 blog-single__details__title matchheight">
              <?php echo the_title(); ?>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm hidden-md blog-single__details__empty matchheight">

            </div>
          </div>
          <?php the_content(); ?>
          <a class="back" href="/blog/">
            <img src="<?php echo get_template_directory_uri() ?>/images/back-icon.svg" alt="Back to blog">
            Back to blog
          </a>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6 thumbimg">
          <?php if( have_rows('gallery') ): ?>
            <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

            </a>

            <!-- <div class="row"> -->
              <div class="col-xs-6 col-md-4 col-lg-3 thumbfancy matchheight">
                <div class="wrapper">
                  <img src="<?php echo get_template_directory_uri() ?>/images/fancy-thumb.svg" alt="Fancybox instruction">
                  CLICK ON AN IMAGE TO ENLARGE
                </div>
              </div>
              <?php while( have_rows('gallery') ): the_row();
                // vars
                $image = get_sub_field('image');
                $image_title = get_sub_field('image_title');
                // $image_url = $image['sizes']['thumbnail'];
                ?>

                <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
                  <?php echo $image_title ?>
                <?php else : ?>
                  <?php the_title(); ?>
                <?php endif; ?>">
                  <div class="col-xs-6 col-md-4 col-lg-3 thumbfancy matchheight" style="background: url(<?php echo $image ?>) center center; background-size: cover;">

                  </div>
                </a>

              <?php endwhile; wp_reset_postdata(); ?>
            <!-- </div> -->
            
          <?php else : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid blog-single -->

  <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('gallery') ): ?>
  <!-- Hidden Gallery -->
  <div class="hidden">
    <?php while( have_rows('gallery') ): the_row();
      // vars
      $image = get_sub_field('image');
      $image_title = get_sub_field('image_title');
      $image_url = $image['sizes']['thumbnail'];
      ?>

        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
          <?php echo $image_title ?>
        <?php else : ?>
          <?php the_title(); ?>
        <?php endif; ?>">

            <img src="<?php echo $image_url; ?>" alt="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>" />
        </a>

    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
