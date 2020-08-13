<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage talkie
 * @since 1.0
 * @version 1.0
 */

?>
<?php $talkie_option = get_option('talkie_options'); ?>
<?php
if(isset($talkie_option['display_copyright']))
{
	$options = $talkie_option['display_copyright'];
	if($options == "yes")
	{ 
	?>
	<div class="copyright-footer">
		<div class="container">
			<div class="pt-3 pb-3">
				<div class="row justify-content-between">

					<div class="col-lg-6 col-md-12 text-lg-left text-md-center text-center">
						<?php
							$talkie_option = get_option('talkie_options');
							if(isset($talkie_option['social-media-iq']))
							{	
						?>
							<div class="social-icone">
								<?php $data = $talkie_option['social-media-iq']; ?>
								<ul>
									<?php
									foreach ($data as $key=>$options )
									{
										if($options) {
											echo '<li class="d-inline"><a href="'.$options.'"><i class="fa fa-'.$key.'"></i></a></li>';
										}
									} ?>
								</ul>
							</div>	
						<?php				
								}	
						?>
                 </div>
             

					

					
					<div class="col-lg-6 col-md-12 text-lg-right text-md-center text-center">
						<?php
						if(isset($talkie_option['footer_copyright'])) {  ?>
							<span class="copyright"><?php echo esc_attr($talkie_option['footer_copyright']); ?></span>
							<?php
						}
						else {	?>
							<span class="copyright"><a target="_blank" href="<?php echo esc_url( __( 'https://themeforest.net/user/iqonicthemes/portfolio/', 'talkie' ) ); ?>"> <?php printf( esc_html__( 'Proudly powered by %s', 'talkie' ), 'talkie.' ); ?></a></span>
							<?php
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
}
else{ 
?>
<div class="copyright-footer">
		<div class="container">
			<div class="pt-3 pb-3">
				<div class="row flex-row-reverse justify-content-between">
					<div class="col-lg-6 col-md-12 text-lg-right text-md-center text-center">
						<?php
						if(isset($talkie_option['footer_copyright'])) { ?>
							<span class="copyright"><?php echo esc_attr($talkie_option['footer_copyright']); ?></span>
							<?php
						}
						else {?>
							<span class="copyright"><a target="_blank" href="<?php echo esc_url( __( 'https://themeforest.net/user/iqonicthemes/portfolio/', 'talkie' ) ); ?>"> <?php printf( esc_html__( 'Proudly powered by %s', 'talkie' ), 'talkie.' ); ?></a></span>
							<?php
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>