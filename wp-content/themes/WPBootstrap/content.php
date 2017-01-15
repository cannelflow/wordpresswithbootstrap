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