<?php get_header() ; ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part( 'content-page',get_post_format()); ?>
          <?php endwhile; else : ?>
	      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
         
        </div><!-- /.blog-main -->

<?php get_footer() ; ?>