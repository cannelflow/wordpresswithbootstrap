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