<?php 
global $talkie_options;
// TGM plugin activation
require_once get_template_directory() . '/inc/tgm/talkie-required-plugins.php';
// Breadcrumbs
require_once get_template_directory() . '/inc/custom/breadcrumbs.php';
// Demo import
require_once get_template_directory() . '/inc/demo/import.php';
// Header Breadcrumbs
require_once get_template_directory() . '/inc/custom/talkie-breadcrumbs.php';
// Comment
require_once get_template_directory() . '/inc/custom/talkie-comment.php';
// Pagination
require_once get_template_directory() . '/inc/custom/talkie-pagination.php';
// Widget
require_once get_template_directory() . '/inc/custom/talkie-widget.php';
// Dynamic Style
require_once get_template_directory() . '/inc/custom/talkie-dynamic-style.php';
require_once get_template_directory() . '/inc/custom/color-style.php';
require_once get_template_directory() . '/inc/custom/custom-color.php';

function talkie_custom_fonts_url() 
{
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not

	* supported by Roboto, translate this to 'off'. Do not translate
	* into your own language.
	*/
	

	

	/* Translators: If there are characters in your language that are not
	* supported by Nunito, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = _x( 'on', 'Poppins font: on or off', 'talkie' );

	if (  'off' !== $poppins ) {
	$font_families = array();

	

	if ( 'off' !== $poppins ) {
	$font_families[] = 'Poppins:400,600,700';
	}



	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

function talkie_load_js_css(){
	$talkie_option = get_option('talkie_options');
	
	/* Custom JS */
	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array(), '4.1.3' , true);
	
	wp_enqueue_script('countdown', get_template_directory_uri() .'/assets/js/countdown.js', array(),'1.0', true);

	wp_enqueue_script('appear', get_template_directory_uri() .'/assets/js/appear.js', array(),'1.0', true);
	
	wp_enqueue_script('jquery-count', get_template_directory_uri() .'/assets/js/jquery.countTo.js', array( 'jquery' ),'1.0', true);

	wp_enqueue_script('jquery-magnific', get_template_directory_uri().'/assets/js/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ),'1.1.0', true);
		
	wp_enqueue_script('skrollr', get_template_directory_uri() .'/assets/js/skrollr.js', array(),'1.0', true);

	wp_enqueue_script('isotope', get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js', array( 'jquery' ),'1.0', true);
	
	wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array(),'2.3.4', true);
	
	wp_enqueue_script('popper', get_template_directory_uri() .'/assets/js/popper.min.js', array(), '1.0', true);
	
	wp_enqueue_script('wow', get_template_directory_uri() .'/assets/js/wow.min.js', array(), '1.3.0', true);

	wp_enqueue_script('wave', get_template_directory_uri() .'/assets/js/wave.js', array(), '1.0.0', true);

	wp_enqueue_script('talkie-custom', get_template_directory_uri() .'/assets/js/talkie-custom.js', array(),'1.2', true);

		
	
	
	/* Custom CSS */
	wp_enqueue_style( 'talkie-font', talkie_custom_fonts_url(), array(), null);
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css',array(), '4.1.3', 'all');

	wp_enqueue_style('ionicons', get_template_directory_uri() .'/assets/css/ionicons.min.css',array(), '2.0.0', 'all');

	wp_enqueue_style('typicon', get_template_directory_uri() .'/assets/css/typicon.min.css',array(), '2.0.0', 'all');
	
	
	
	wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.css', array(), '3.5.2', 'all');
	
	wp_enqueue_style('magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '3.5.2', 'all');
	
	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css',array(), '2.3.4', 'all');

	wp_enqueue_style('wow', get_template_directory_uri() .'/assets/css/wow.css',array(), '3.7.0', 'all');
		
	wp_enqueue_style('talkie-style', get_template_directory_uri() .'/assets/css/talkie-style.css',array(), '1.2', 'all');
	
	wp_enqueue_style('talkie-responsive', get_template_directory_uri() .'/assets/css/talkie-responsive.css',array(), '1.2', 'all');
	
}
add_action( 'wp_enqueue_scripts', 'talkie_load_js_css' );

function talkie_wp_admin_style() {

	wp_enqueue_style('admin-style', get_template_directory_uri() .'/assets/css/talkie-admin-style.css',array(), '1.0', 'all');

}
add_action( 'admin_enqueue_scripts', 'talkie_wp_admin_style' );



function talkie_searchfilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','talkie_searchfilter');


if ( !function_exists( 'talkie_dynamic_style' ) ) {
    
    function talkie_dynamic_style ( $talkie_css_array ){
        foreach ( $talkie_css_array as $css_part ) {
            if ( ! empty( $css_part[ 'value' ] ) ) {
                echo esc_attr($css_part[ 'elements' ]) . "{\n";
                echo esc_attr($css_part[ 'property' ]) . ":" . esc_attr($css_part[ 'value' ]) . ";\n";
                echo "}\n\n";
            }
        }
    }
}
?>
