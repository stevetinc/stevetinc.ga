<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div id="portfolio" class="content-area">
	<main id="portfolio-main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
                    <?php
                    while ( have_posts() ) : the_post(); 
                        get_template_part( 'template-parts/portfolio/content', get_post_format() );
                    endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- .container -->
<?php
get_footer();
