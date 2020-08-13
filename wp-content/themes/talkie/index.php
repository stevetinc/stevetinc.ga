<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage talkie
 * @since 1.0
 * @version 1.0
 */

get_header();

$talkie_options = get_option('talkie_options');
$options= $talkie_options['talkie_blog']; 
$sidebar= $talkie_options['talkie_blog_sidebar']; 



//echo "<script>alert('".$sidebar."');</script>";
?>
<?php if(is_front_page()){ 
    ?>
    <div class="iq-breadcrumb text-center green-bg">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-sm-12">
				<div class="heading-title white iq-breadcrumb-title">
					<h1 class="title"><?php  esc_html_e( 'Home', 'talkie' ); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				
				<?php
				if($options == 1)
				 {
					$flag = 1;
					if($sidebar == 1 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row flex-row-reverse";
						 $flag = 1;
					 }
					 else if($sidebar == 2 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row";
						 $flag = 1;
					 }
					 else {
						 $row = "row";
						 $flag = 0;
					 }
					?>
					<div class="<?php echo esc_attr($row); ?>">
						<?php if ( ! is_active_sidebar('sidebar-1') || $flag == 0) { ?>
							<div class="col-md-12 col-sm-12">
						<?php } else{ ?>
							<div class="col-lg-8 col-sm-12 mt-lg-0 mt-5">
						<?php } ?>
								
						
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );

								endwhile;

								}
								else {
		
									get_template_part( 'template-parts/post/content', 'none' );
		
								}
							?>
							<?php
							if(isset($talkie_option['talkie_display_pagination']))
							{
							$options = $talkie_option['talkie_display_pagination'];
							if($options == "yes")
							{
							talkie_pagination();
							}
							}
							else
							{
							talkie_pagination();
							}
							?>
							</div>
							<?php if ( is_active_sidebar('sidebar-1') && $flag == 1) { ?>		
								<div class="col-lg-4 col-sm-12 mt-lg-0 mt-5">
									<?php get_sidebar(); ?>
								</div>
							<?php } ?>
					</div><!-- #row -->
					<?php 
					}
					else if($options == 2)
					{
						$flag = 1;
				   
					if($sidebar == 1 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row flex-row-reverse";
						 $flag = 1;
					 }
					 else if($sidebar == 2 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row";
						 $flag = 1;
					 }
					 else {
						 $row = "row";
						 $flag = 0;
					 }
					?>
					<div class="<?php echo esc_attr($row); ?>">
						<?php if ( ! is_active_sidebar('sidebar-1') || $flag==0 ) { ?>
							<div class="col-md-12 col-sm-12">
						<?php } else{ ?>
							<div class="col-lg-8 col-sm-12 mt-lg-0 mt-5">
						<?php } ?>
					
							<div class="row">
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();
								?>
								<div class="col-lg-6 col-md-6 col-sm-6 talkie-space-bottom"> 
								<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );
								?>

								</div>
								<?php
								endwhile;
								}
								else {
		
									get_template_part( 'template-parts/post/content', 'none' );
		
								}
							?>
							</div>
							</div>
							<?php if ( is_active_sidebar('sidebar-1') && $flag == 1 ) { ?>		
								<div class="col-lg-4 col-sm-12 mt-lg-0 mt-5">
									<?php get_sidebar(); ?>
								</div>
							<?php } ?>
							
					</div><!-- #row -->
					<?php
					if(isset($talkie_option['talkie_display_pagination']))
					{
					$options = $talkie_option['talkie_display_pagination'];
					if($options == "yes")
					{
					talkie_pagination();
					}
					}
					else
					{
					talkie_pagination();
					}
					?>
					<?php 
					} 
					else if($options == 3)
					{
						$flag = 1;
				   
					if($sidebar == 1 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row flex-row-reverse";
						 $flag = 1;
					 }
					 else if($sidebar == 2 && $sidebar!= '' && $sidebar !=0)
					 {
						 $row = "row";
						 $flag = 1;
					 }
					 else {
						 $row = "row";
						 $flag = 0;
					 }
					?>
					<div class="<?php echo esc_attr($row); ?>">
						<?php if ( ! is_active_sidebar('sidebar-1') || $flag==0 ) { ?>
							<div class="col-md-12 col-sm-12">
						<?php } else{ ?>
							<div class="col-lg-8 col-sm-12 mt-lg-0 mt-5">
						<?php } ?>
					
							<div class="row">
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();
								?>
								<div class="col-lg-4 col-md-6 talkie-space-bottom"> 
								<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );
								?>

								</div>
								<?php
								endwhile;
								}
								else {
		
									get_template_part( 'template-parts/post/content', 'none' );
		
								}
							?>
							</div>
							</div>
							<?php if ( is_active_sidebar('sidebar-1') && $flag == 1 ) { ?>		
								<div class="col-lg-4 col-sm-12 mt-lg-0 mt-5">
									<?php get_sidebar(); ?>
								</div>
							<?php } ?>
							
					</div><!-- #row -->
					<?php
					if(isset($talkie_option['talkie_display_pagination']))
					{
					$options = $talkie_option['talkie_display_pagination'];
					if($options == "yes")
					{
					talkie_pagination();
					}
					}
					else
					{
					talkie_pagination();
					}
					?>
					<?php 
					}
				
					
					else
					{
					?>
					<div class="row">
							<?php if ( ! is_active_sidebar('sidebar-1') ) { ?>
								<div class="col-md-12 col-sm-12">
							<?php } else { ?>
								<div class="col-lg-8  col-sm-12">
							<?php } ?>
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );

								endwhile;
								
							}
							else {

								get_template_part( 'template-parts/post/content', 'none' );

							}
							?>
							<?php
							talkie_pagination();
							?>
						</div>
						<div class="col-lg-4  col-sm-12 mt-5 mt-lg-0">
							<?php get_sidebar(); ?>
						</div>
					</div><!-- #row -->
					<?php } ?>

					
					
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->			
<?php get_footer(); ?>