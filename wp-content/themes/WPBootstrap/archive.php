<?php get_header() ; ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
            <p class="blog-post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
            <?php if ( has_post_thumbnail() ) : ?>
                   <div class="blog-post-img">
                        <?php the_post_thumbnail(); ?>
                   </div>
            <?php endif ; ?>       
            
            <div class="blog-post-excerpt">
                <?php the_excerpt() ; ?>
            </div>
          </div><!-- /.blog-post -->
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

<?php get_footer() ; ?>