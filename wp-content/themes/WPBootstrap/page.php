<?php get_header() ; ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title() ; ?></h2>
            <?php if ( has_post_thumbnail() ) : ?>
                   <div class="blog-post-img">
                        <?php the_post_thumbnail(); ?>
                   </div>
            <?php endif ; ?>       
            
            <div class="blog-post-content">
                <?php the_content() ; ?>
            </div>
          </div><!-- /.blog-post -->
          <?php endwhile; else : ?>
	      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
         
        </div><!-- /.blog-main -->


<?php get_footer() ; ?>