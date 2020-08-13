<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'talkie_sp_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function talkie_sp_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'      => esc_html__( 'talkie Extensions','talkie' ),
            'slug'      => 'talkie-extensions',
            'source'    => esc_url('http://iqonic.design/wp-themes/plugins/talkie-extensions.zip'), 
            'required'  => true,
        ),
        
        array(
            'name'       => esc_html__( 'Revolution Slider','talkie' ),
            'slug'       => 'revslider',
            'source'     => esc_url('http://iqonic.design/wp-themes/plugins/revslider.zip'), 
            'required'   => true,
        ),
        

        array(
            'name'      => esc_html__( 'Elementor','talkie' ),
            'slug'      => 'elementor',
            'required'  => true
        ),
        
        array(
            'name'      => esc_html__( 'Contact Form 7','talkie' ),
            'slug'      => 'contact-form-7',
            'required'  => true
        ),
        
        array(
            'name'      => esc_html__( 'Mailchimp','talkie' ),
            'slug'      => 'mailchimp-for-wp',
            'required'  => true
        ),

    );

    /*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}
/*------------------------------------------------------------
 		installation requirement after theme activate
------------------------------------------------------------*/
function talkie_theme_activation () {
	
	// set frontpage to display_posts
	update_option('show_on_front', 'posts');

	// flush rewrite rules
	flush_rewrite_rules();

	do_action('talkie_theme_activation');

	if(class_exists('TGM_Plugin_Activation')){
		$tgmpa = TGM_Plugin_Activation::$instance;
		$is_redirect_require_install = false;
		foreach($tgmpa->plugins as $p){
			$path =  ABSPATH . 'wp-content/plugins/'.$p['slug'];
			if(!is_dir($path)){
				$is_redirect_require_install = true;
				break;
			}
		}
		if($is_redirect_require_install){
			header( 'Location: '.admin_url().'themes.php?page=tgmpa-install-plugins' );
		}
	}
}
add_action('after_switch_theme', 'talkie_theme_activation'); 
/*-------------------------------
		End activation 
------------------------------- */
?>