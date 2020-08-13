<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage talkie
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$talkie_option = get_option('talkie_options');

if(isset($talkie_option['talkie_404_banner_image']['url'])){
	$bgurl = $talkie_option['talkie_404_banner_image']['url'];
}
?>
<div <?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="error-404 not-found">
					<div class="page-content">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php  
									if(!empty($talkie_option['talkie_404_banner_image']['url'])) { ?>
									<div class="fourzero-image mb-5">
										<img src ="<?php echo esc_url($talkie_option['talkie_404_banner_image']['url']); ?>" alt="<?php  esc_attr_e( '404', 'talkie' ); ?>"/>
									</div>	

								<?php } else { ?>
							
									<div class="big-text"><?php esc_html_e( '404', 'talkie' ); ?></div>

								<?php } ?>
								<h4>
									<?php 
										if(isset($talkie_option['talkie_four_description']) && !empty($talkie_option['talkie_four_description']))
										{
											$four_title = $talkie_option['talkie_fourzerofour_title']; 
											echo esc_html($four_title); 
										}
										else 
										{
											echo esc_html_e('404 Error', 'talkie');
										}
										
									?>
								</h4>
								<p class="mb-5">
									
									<?php 
										if(isset($talkie_option['talkie_four_description']) && !empty($talkie_option['talkie_four_description']))
										{
											$four_des = $talkie_option['talkie_four_description']; 
											echo esc_html($four_des); 
										}
										else 
										{
											echo esc_html_e('Oops! This Page is Not Found.', 'talkie');
										}
									?>
								</p>

								<div class="d-block">
									<a class="button" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Back to Home', 'talkie'); ?></a>
								</div>
							</div>
						</div>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
</div>

<?php get_footer();
