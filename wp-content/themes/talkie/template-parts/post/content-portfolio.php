<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="iq-portfolio">
                    <a href="<?php echo get_permalink()  ?>" class="iq-portfolio-img">
                        <?php echo get_the_post_thumbnail()  ?>
                    </a>
                    <div class="iq-portfolio-content">
                        <h6><a href="<?php echo get_permalink()  ?>"><?php echo get_the_title()  ?></a></h6>
                        
                    </div>
</div>
	
</article><!-- #post-## -->
