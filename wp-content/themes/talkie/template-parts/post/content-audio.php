<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$content = apply_filters( 'talkie_the_content', get_the_content() );
		$audio = false;

		// Only get audio from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}
	?>
	<div class="iq-page-blog">
		<div class="iq-blog-box">	
			<?php
			$talkie_option = get_option('talkie_options');
			if(isset($talkie_option['talkie_display_image']))
			{
			$options = $talkie_option['talkie_display_image'];
			if($options == "yes"){
				if ( has_post_thumbnail() ) { ?>
				<div class="iq-blog-image">
				<?php 
					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'talkie' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
					?>
				</div>	
				<?php } 
				} 
			}
			else 
			{
			?>
				<div class="iq-blog-image">
				<?php 
					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'talkie' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
					?>
				</div>	
			<?php
			}
			?>
			<div class="iq-blog-detail">
					<div class="iq-blog-meta">
						<ul class="list-inline">
							<?php 
							//post date
							$archive_year  = get_the_time('Y',$post->post_id);
							$archive_month = get_the_time('m',$post->post_id); 
							$archive_day   = get_the_time('d',$post->post_id);
							$date=date_create($post->post_date); ?>
							<li class="list-inline-item">	
								<i class="fa fa-calendar mr-2" aria-hidden="true"></i>
									<?php echo sprintf("%s",talkie_time_link()); ?>	
							</li>

				
							<li class="list-inline-item">
						<a href="<?php echo  sprintf("%s",get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ),'talkie'); ?>" class="iq-user">
						<i class="fa fa-user mr-2" aria-hidden="true"></i>
							<?php echo  sprintf("%s ",get_the_author(),'talkie'); ?>
						</a>
					</li>
						</ul>
					</div>
					<?php if(!is_single())
					{
					?>
					<div class="blog-title">
						<h5 class="entry-title">
							<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
								<?php the_title(); ?>
							</a>
						</h5>						
					</div>
					<?php 
					}
					?>
					<?php if(!is_single()){ ?>
					<div class="blog-button">
					<?php 
					if(!empty($talkie_option['blog_btn']))
					{ 
					?>
					<a class="button-link" href="<?php the_permalink();?>"><?php echo esc_attr($talkie_option['blog_btn']); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<?php 
					}
					else
					{ 
					?>
					<a class="button-link" href="<?php the_permalink();?>"><?php esc_html_e('Read More', 'talkie'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<?php 
					}
					?>
					</div>
					<?php
					}
					?>							
			</div>	
		</div>	
	</div>
	<?php 
	$talkie_option = get_option('talkie_options');
	if(isset($talkie_option['talkie_display_comment']))
		{
		$options = $talkie_option['talkie_display_comment'];
		if($options == "yes")
		{
			if(is_single()){
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				talkie_pagination();
			}
		}
	}
	else {
		if(is_single()){
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			talkie_pagination();
		}
		
	}
	?>
</article><!-- #post-## -->
