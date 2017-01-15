<?php get_header() ; ?>

<div class="container">    
      <div class="row">

        <div class="col-sm-8 blog-main">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() );?>
          <?php endwhile; else : ?>
	      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
         
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->
        
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php get_sidebar() ; ?>
        </div>  
      </div><!-- /.row -->

</div><!-- /.container -->
        
<?php get_footer() ; ?>