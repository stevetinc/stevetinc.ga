<?php
if ( !function_exists( 'talkie_create_dynamic_style' ) ) {
    
    function talkie_create_dynamic_style() {

        $talkie_dynamic_css = array();
        $talkie_dynamic_css_min_width_1200px = array();

        $talkie_option = get_option('talkie_options');

        //$loader_width = '';
        //$loader_height = '';
       
        if(!empty($talkie_option["logo-dimensions"]["width"])) { $logo_width = $talkie_option["logo-dimensions"]["width"]; }
        if(!empty($talkie_option["logo-dimensions"]["height"])) { $logo_height = $talkie_option["logo-dimensions"]["height"]; }

        if(!empty($talkie_option["sticky-logo-dimensions"]["width"])) { $logo_width = $talkie_option["sticky-logo-dimensions"]["width"]; }
        if(!empty($talkie_option["sticky-logo-dimensions"]["height"])) { $logo_height = $talkie_option["sticky-logo-dimensions"]["height"]; }

        if(!empty($talkie_option["loader-dimensions"]["width"])) {  $loader_width = $talkie_option["loader-dimensions"]["width"]; }
        if(!empty($talkie_option["loader-dimensions"]["height"])) { $loader_height = $talkie_option["loader-dimensions"]["height"]; }

        if(!empty($talkie_option["footerlogo-dimensions"]["width"])) { $footerlogo_width = $talkie_option["footerlogo-dimensions"]["width"]; }
        if(!empty($talkie_option["footerlogo-dimensions"]["height"])) { $footerlogo_height = $talkie_option["footerlogo-dimensions"]["height"]; }

        

        if(isset($talkie_option["body_font"]["font-family"])) { $body_family = $talkie_option["body_font"]["font-family"]; }
        if(isset($talkie_option["body_font"]["font-size"])){ $body_size = $talkie_option["body_font"]["font-size"]; }
        if(isset($talkie_option["body_font"]["font-weight"])){ $body_weight = $talkie_option["body_font"]["font-weight"]; }

        if(isset($talkie_option["primary_menu"]["font-family"])) { $primary_family = $talkie_option["primary_menu"]["font-family"]; }
        if(isset($talkie_option["primary_menu"]["font-size"])) { $primary_size = $talkie_option["primary_menu"]["font-size"]; }
        if(isset($talkie_option["primary_menu"]["font-weight"])) { $primary_weight = $talkie_option["primary_menu"]["font-weight"]; }

        if(isset($talkie_option["sub_menu"]["font-family"])) { $sub_family = $talkie_option["sub_menu"]["font-family"]; }
        if(isset($talkie_option["sub_menu"]["font-size"])) { $sub_size = $talkie_option["sub_menu"]["font-size"]; }
        if(isset($talkie_option["sub_menu"]["font-weight"])) { $sub_weight = $talkie_option["sub_menu"]["font-weight"]; }

        if(isset($talkie_option["h1_font"]["font-family"])) { $h1_family = $talkie_option["h1_font"]["font-family"]; }
        
        if(isset($talkie_option["h1_font"]["font-size"])) { $h1_size = $talkie_option["h1_font"]["font-size"]; }
        if(isset($talkie_option["h1_font"]["font-weight"])) { $h1_weight = $talkie_option["h1_font"]["font-weight"]; }

        if(isset($talkie_option["h2_font"]["font-family"])) { $h2_family = $talkie_option["h2_font"]["font-family"]; }
        if(isset($talkie_option["h2_font"]["font-size"])) { $h2_size = $talkie_option["h2_font"]["font-size"]; }
        if(isset($talkie_option["h2_font"]["font-weight"])) { $h2_weight = $talkie_option["h2_font"]["font-weight"]; }

        if(isset($talkie_option["h3_font"]["font-family"])) { $h3_family = $talkie_option["h3_font"]["font-family"]; }
        if(isset($talkie_option["h3_font"]["font-size"])) { $h3_size = $talkie_option["h3_font"]["font-size"]; }
        if(isset($talkie_option["h3_font"]["font-weight"])) { $h3_weight = $talkie_option["h3_font"]["font-weight"]; }

        if(isset($talkie_option["h4_font"]["font-family"])) { $h4_family = $talkie_option["h4_font"]["font-family"]; }
        if(isset($talkie_option["h4_font"]["font-size"])) { $h4_size = $talkie_option["h4_font"]["font-size"]; }
        if(isset($talkie_option["h4_font"]["font-weight"])) { $h4_weight = $talkie_option["h4_font"]["font-weight"]; }

        if(isset($talkie_option["h5_font"]["font-family"])) { $h5_family = $talkie_option["h5_font"]["font-family"]; }
        if(isset($talkie_option["h5_font"]["font-size"])) { $h5_size = $talkie_option["h5_font"]["font-size"]; }
        if(isset($talkie_option["h5_font"]["font-weight"])) { $h5_weight = $talkie_option["h5_font"]["font-weight"]; }

        if(isset($talkie_option["h6_font"]["font-family"])) { $h6_family = $talkie_option["h6_font"]["font-family"]; }
        if(isset($talkie_option["h6_font"]["font-size"])) { $h6_size = $talkie_option["h6_font"]["font-size"]; }
        if(isset($talkie_option["h6_font"]["font-weight"])) { $h6_weight = $talkie_option["h6_font"]["font-weight"]; }

        if(isset($talkie_option["page_title_font"]["font-family"])) { $page_title_family = $talkie_option["page_title_font"]["font-family"]; }
        if(isset($talkie_option["page_title_font"]["font-size"])) { $page_title_size = $talkie_option["page_title_font"]["font-size"]; }
        if(isset($talkie_option["page_title_font"]["font-weight"])) { $page_title_weight = $talkie_option["page_title_font"]["font-weight"]; }

        if(isset($talkie_option["page_desc_font"]["font-family"])) { $page_desc_family = $talkie_option["page_desc_font"]["font-family"]; }
        if(isset($talkie_option["page_desc_font"]["font-size"])) { $page_desc_size = $talkie_option["page_desc_font"]["font-size"]; }
        if(isset($talkie_option["page_desc_font"]["font-weight"])) { $page_desc_weight = $talkie_option["page_desc_font"]["font-weight"]; }
	
	if(!empty($loader_width)){
		$talkie_dynamic_css[] = array( 
		    'elements'  =>  '#loading img',
		    'property'  =>  'width',
		    'value'     =>  $loader_width. '!important'
		);
	}	
	if(!empty($loader_height)){
		$talkie_dynamic_css[] = array(
		    'elements'  =>  '#loading img',
		    'property'  =>  'height',
		    'value'     =>  $loader_height. '!important'
		);
	}
        // Change font 1
        if( $talkie_option['talkie_change_font'] == 1 ){
            // body
            $talkie_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-family',
                'value'     =>  $body_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-size',
                'value'     =>  $body_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-weight',
                'value'     =>  $body_weight. '!important'
            );

            // primary menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-family',
                'value'     =>  $primary_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-size',
                'value'     =>  $primary_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-weight',
                'value'     =>  $primary_weight. '!important'
            );

            // sub menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-family',
                'value'     =>  $sub_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-size',
                'value'     =>  $sub_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-weight',
                'value'     =>  $sub_weight. '!important'
            );

            // h1 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-family',
                'value'     =>  $h1_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-size',
                'value'     =>  $h1_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-weight',
                'value'     =>  $h1_weight. '!important'
            );

            // h2 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-family',
                'value'     =>  $h2_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-size',
                'value'     =>  $h2_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-weight',
                'value'     =>  $h2_weight. '!important'
            );

            // h3 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-family',
                'value'     =>  $h3_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-size',
                'value'     =>  $h3_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-weight',
                'value'     =>  $h3_weight. '!important'
            );

            // h4 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-family',
                'value'     =>  $h4_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-size',
                'value'     =>  $h4_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-weight',
                'value'     =>  $h4_weight. '!important'
            );

            // h5 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-family',
                'value'     =>  $h5_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-size',
                'value'     =>  $h5_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-weight',
                'value'     =>  $h5_weight. '!important'
            );

            // h6 menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-family',
                'value'     =>  $h6_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-size',
                'value'     =>  $h6_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-weight',
                'value'     =>  $h6_weight. '!important'
            );

            // page_title menu
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-family',
                'value'     =>  $page_title_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-size',
                'value'     =>  $page_title_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-weight',
                'value'     =>  $page_title_weight. '!important'
            );

             // page_desc menu
             $talkie_dynamic_css[] = array(
                'elements'  =>  '.page_desc',
                'property'  =>  'font-family',
                'value'     =>  $page_desc_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.page_desc',
                'property'  =>  'font-size',
                'value'     =>  $page_desc_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-weight',
                'value'     =>  $page_desc_weight. '!important'
            );

            $talkie_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-family',
                'value'     =>  $page_desc_family. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-size',
                'value'     =>  $page_desc_size. '!important'
            );
            $talkie_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-weight',
                'value'     =>  $page_desc_weight. '!important'
            );
            
            
        }
       // }

        // Start generating if related arrays are populated
        if ( count( $talkie_dynamic_css ) > 0 ) {
            echo "<style type='text/css' id='talkie-dynamic-css'>\n\n";
            
            // Basic dynamic CSS
            if ( count( $talkie_dynamic_css ) > 0 ) {
                talkie_dynamic_style( $talkie_dynamic_css );
            }            
            echo '</style>';
        }
    }
}
add_action( 'wp_head', 'talkie_create_dynamic_style' );

if ( !function_exists( 'talkie_create_dynamic_style' ) ) {
    
    function talkie_create_dynamic_style() {

        $talkie_dynamic_css = array();
        $talkie_dynamic_css_min_width_1200px = array();

        $talkie_option = get_option('talkie_options');

        $loader_width = '';
        $loader_height = '';
       if(isset($talkie_option["logo-dimensions"]["width"]))
        {
        if(!empty($talkie_option["logo-dimensions"]["width"])) { $logo_width = $talkie_option["logo-dimensions"]["width"]; }
        if(!empty($talkie_option["logo-dimensions"]["height"])) { $logo_height = $talkie_option["logo-dimensions"]["height"]; }

        if(!empty($talkie_option["loader-dimensions"]["width"])) { $loader_width = $talkie_option["loader-dimensions"]["width"]; }
        if(!empty($talkie_option["loader-dimensions"]["height"])) { $loader_height = $talkie_option["loader-dimensions"]["height"]; }

        if(!empty($talkie_option["footerlogo-dimensions"]["width"])) { $footerlogo_width = $talkie_option["footerlogo-dimensions"]["width"]; }
        if(!empty($talkie_option["footerlogo-dimensions"]["height"])) { $footerlogo_height = $talkie_option["footerlogo-dimensions"]["height"]; }
        
        $talkie_dynamic_css[] = array(
            'elements'  =>  '.navbar-brand img',
            'property'  =>  'width',
            'value'     =>  $logo_width. '!important'
        );
        $talkie_dynamic_css[] = array(
            'elements'  =>  '.navbar-brand img',
            'property'  =>  'height',
            'value'     =>  $logo_height. '!important'
        );
	
        $talkie_dynamic_css[] = array(
            'elements'  =>  'footer .footer-logo img',
            'property'  =>  'width',
            'value'     =>  $footerlogo_width. '!important'
        );
        $talkie_dynamic_css[] = array(
            'elements'  =>  'footer .footer-logo img',
            'property'  =>  'height',
            'value'     =>  $footerlogo_height. '!important'
        );
       

        // Start generating if related arrays are populated
        if ( count( $talkie_dynamic_css ) > 0 ) {
            echo "<style type='text/css' id='talkie-dynamic-css'>\n\n";
            
            // Basic dynamic CSS
            if ( count( $talkie_dynamic_css ) > 0 ) {
                talkie_dynamic_style( $talkie_dynamic_css );
            }            
            echo '</style>';
        }
}
    }
}
add_action( 'wp_head', 'talkie_create_dynamic_style' );



?>
