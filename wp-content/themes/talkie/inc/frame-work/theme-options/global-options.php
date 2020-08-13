<?php
/*
 * Global Options
*/
$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Global', 'talkie') ,
    'id' => 'editer-global',
    'icon' => 'el el-globe',
    'customizer_width' => '500px',
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Body Layout', 'talkie') ,
    'id' => 'site-global',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_general',
            'type' => 'info',
            'style' => 'custom',            
            'color' => sanitize_hex_color($color),
            'title' => __('Layout Options', 'talkie') ,
            'desc' => __('This Section Contain Option For Your Site Layout.','talkie'),
        ) ,

        array(
            'id' => 'section-general',
            'type' => 'section',            
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_site_layout_genaral',
            'type' => 'image_select',
            'desc' => __('<p>Choose From Above Suitable Option For Your Site.</p>','talkie'),
            'options' => array(
                '1' => array(
                    'title' => esc_html__('Boxed', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/style/boxed.png',
                ) ,
                '2' => array(
                    'title' => esc_html__('Full Width', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/style/full-width.png',
                ) ,

            ) ,
           

        ) ,
        array(
            'id' => 'info_general' . rand(0, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => esc_attr(sanitize_hex_color($color)),
            'desc' => __('This Section Contain Option For Your Grid Container Width.','talkie'),
            'title' => __('Grid Container Width', 'talkie') ,
        ) ,
        array(
            'id' => 'opt-slider-label',
            'type' => 'slider',
            'desc' => __('<p>Adjust Your Site Container Width Wtih Help Of Above Opiton.</p>','talkie'),            
            'min' => 960,
            'step' => 1,
            'max' => 1920,
            'display_value' => 'select',
            'default' => 1200
        ) ,       

        
        array(
            'id' => 'info_general_background',
            'type' => 'info',
            'style' => 'custom',
            'color' => esc_attr(sanitize_hex_color($color)),
            'desc' => __('<p>This Section Contain Optin For Your Page Body Background.</p>','talkie'),
            'title' => __('Body Background', 'talkie') ,
        ) ,

        array(
            'id' => 'section-general-background',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_background_genaral',
            'type' => 'button_set',                        
            'desc' => __('Select Your Page Background Style', 'talkie') ,            
            'options' => array(
                '1' => 'Image',
                '2' => 'Color',
                '3' => 'none'
            ) ,
            'default' => '3'
        ) ,

        array(
            'id' => 'talkie_background_image',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('upload image', 'talkie') ,
            'read-only' => true,
            'default' => array (
                'url' =>  get_template_directory_uri() . '/assets/images/theme-option/style/07.png',
            ),
            'required' => array(
                'talkie_background_genaral',
                '=',
                '1'
            ) ,
            
        ) ,

        array(
            'id' => 'talkie_background_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Color', 'talkie') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'talkie_background_genaral',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,

       

        

    )
));
//Favicon Option
Redux::setSection($opt_name, array(
    'title' => esc_html__('Favicon', 'talkie') ,
    'id' => 'site-favicon',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_general_favicon',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Favicon', 'talkie') ,
            'desc' => __('Upload .ico File For Favicon Icon', 'talkie')
        ) ,
        array(
            'id' => 'section-general-favicon',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_background_favicon',
            'type' => 'media',            
            'url' => true,
            'read-only' => false,
            

        ) ,
    )
));

//Loader Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Loader', 'talkie') ,
    'id' => 'site-loader-global',
    
    'subsection' => true,

    'fields' => array(
        array(
            'id' => 'info_general_favicon'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Loader Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general-favicon'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_loader_switch',
            'type' => 'button_set',
            'title' => __('', 'talkie') ,
            'subtitle' => __('', 'talkie') ,
            'desc' => __('', 'talkie') ,
            //Must provide key => value pairs for options
            'options' => array(
                '0' => esc_html__('none','talkie'),
                '1' => esc_html__('Image','talkie'),
                '2' => esc_html__('text', 'talkie'),
                
            ) ,
            'default' => esc_html__('0','talkie')
            
        ) ,


        array(
            'id' => 'talkie_background_loader',
            'type' => 'media',
            'title'    => __('Upload Loader Image', 'talkie'),               
            
            'desc' => 'upload gif image here',
            'url' => false,
            'read-only' => false,
            'required' => array(
                'talkie_loader_switch',
                '=',
                '1'
            ) ,
        ) ,   
          array(
            'id' => 'loader-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Stikcy Header Logo (Width/Height) Option', 'talkie') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'talkie') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'talkie') ,
            'required' => array(
                'talkie_loader_switch',
                '=',
                '1'
            ) ,

        ) ,     
        array(
            'id'        => 'talkie_loader_text',
            'type'      => 'text',   
            'title'    => __('Enter Loader Text', 'talkie'),                      
            'default'   => esc_html__( 'Loading....','talkie' ),
            'desc' => esc_html__('Enter Text', 'talkie') ,
            'required' => array(
                'talkie_loader_switch',
                '=',
                '2'
            ) ,
        ),
        array(
            'id'       => 'talkie_loader_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'talkie'),             
            'desc'     => __('Select Tag For Loader Text.', 'talkie'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'talkie'),
                'h2' => esc_html__('h2', 'talkie'),
                'h3' => esc_html__('h3', 'talkie'),
                'h4' => esc_html__('h4', 'talkie'),
                'h5' => esc_html__('h5', 'talkie'),
                'h6' => esc_html__('h6', 'talkie'),
                
            ),
            'required' => array(
                'talkie_loader_switch',
                '=',
                '2'
            ) ,
            'default' => esc_html__('h2', 'talkie'),
        ),
        array(
            'id' => 'talkie_loader_back_color',
            'type' => 'color',   
            'title'    => __('Background Color', 'talkie'),                        
            'desc' => esc_html__('Choose Background Color For  Loader.', 'talkie') ,
            'default' => '#ffffff',
            'mode' => 'background',            
            'transparent' => false,
                
            
           
        ) ,

        array(
            'id' => 'talkie_loader_back_color_text',
            'type' => 'color', 
            'title'    => __('Choose Color Loader Text', 'talkie'),                                 
            'desc' => esc_html__('Choose Color For Loader Text .', 'talkie') ,
            'default' => '#ffffff',
            'mode' => 'background',            
            'transparent' => false,
            'required' => array(
                'talkie_loader_switch',
                '=',
                '2'
            ) ,

          
        ) ,
    )
));
// Back To Top Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Back To Top', 'talkie') ,
    'id' => 'site-back-to-top',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_'. rand(10,100),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Back To Top Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-sticky-header-logo',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'talkie_back_to_top',
            'type'     => 'button_set',          
            
            
            'options'  => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'default'  => 'yes'
        ),

       
    )
));


// Logo Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Logo', 'talkie') ,
    'id' => 'editer-logo',
    'icon' => 'eicon-logo',
    'customizer_width' => '500px',
));
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Logo', 'talkie') ,
    'id' => 'site-logo-global',
    
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'info_header_logo',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Logo Options', 'talkie') ,
        ) ,

        array(
            'id' => 'section-start',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_logo_type',
            'type' => 'button_set',
            'title' => __('Header Logo Type', 'talkie') ,            
            'desc' => __('', 'talkie') ,
            //Must provide key => value pairs for options
            'options' => array(
                '1' => esc_html__('Image','talkie'),
                '2' => esc_html__('text', 'talkie'),
                
            ) ,
            'default' => esc_html__('1','talkie')
            
        ) ,

        array(
            'id' => 'talkie_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'talkie') ,
            'read-only' => false,
            'indent' => true,
            'required' => array(
                'talkie_logo_type',
                '=',
                '1'
            ) ,
            
        ) ,
        array(
            'id' => 'logo-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Header Logo (Width/Height) Option', 'talkie') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'talkie') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'talkie') ,
            'required' => array(
                'talkie_logo_type',
                '=',
                '1'
            ) ,

        ) ,

        array(
            'id' => 'talkie_header_logo_text',
            'type' => 'text',
            'title' => esc_html__('Header Logo Text', 'talkie') ,
            'required' => array(
                'talkie_logo_type',
                '=',
                '2'
            ) ,

        ) ,
         array(
            'id'       => 'talkie_header_logo_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'talkie'),             
            'desc'     => __('Select Tag For Text.', 'talkie'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'talkie'),
                'h2' => esc_html__('h2', 'talkie'),
                'h3' => esc_html__('h3', 'talkie'),
                'h4' => esc_html__('h4', 'talkie'),
                'h5' => esc_html__('h5', 'talkie'),
                'h6' => esc_html__('h6', 'talkie'),
                
            ),
            'required' => array(
                'talkie_logo_type',
                '=',
                '2'
            ) ,
            'default' => esc_html__('2', 'talkie'),
        ),

       

        array(
            'id' => 'header_logo_color',
            'type' => 'color',
            'title' => esc_html__('Set Header Logo Color', 'talkie') ,
            'subtitle' => esc_html__('Choose Header Logo Color', 'talkie') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'talkie_logo_type',
                '=',
                '2'
            ) ,
        ) ,
      

        array(
            'id' => 'divider_' . rand(0, 999) ,
            'type' => 'divide'
        ) ,
       

        

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Sticky Header Logo', 'talkie') ,
    'id' => 'site-sticky-logo-global',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_sticky_header_logo',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Stikcy Header Logo Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-sticky-header-logo',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_logo_sticky_type',
            'type' => 'button_set',
            'title' => __('Stikcy Header Logo Type', 'talkie') ,
            
            //Must provide key => value pairs for options
            'options' => array(
                '1' => esc_html__('Image','talkie'),
                '2' => esc_html__('text', 'talkie'),
                
            ) ,
            'default' => esc_html__('1','talkie')
            
        ) ,

        array(
            'id' => 'talkie_header_logo_sticky',
            'type' => 'media',
            'url' => false,
            'title' => esc_html__('Image', 'talkie') ,
            'read-only' => false,
            'required' => array(
                'talkie_logo_sticky_type',
                '=',
                '1'
            ) ,
            'subtitle' => esc_html__('', 'talkie') ,
        ) ,
        array(
            'id' => 'sticky-logo-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Stikcy Header Logo (Width/Height) Option', 'talkie') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'talkie') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'talkie') ,
            'required' => array(
                'talkie_logo_sticky_type',
                '=',
                '1'
            ) ,

        ) ,

        array(
            'id' => 'talkie_header_logo_sticky_text',
            'type' => 'text',
            'title' => esc_html__('Stikcy Header Logo Text', 'talkie') ,
            'required' => array(
                'talkie_logo_sticky_type',
                '=',
                '2'
            ) ,

        ) ,

         array(
            'id'       => 'talkie_header_logo_sticky_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'talkie'),             
            'desc'     => __('Select Tag For Text.', 'talkie'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'talkie'),
                'h2' => esc_html__('h2', 'talkie'),
                'h3' => esc_html__('h3', 'talkie'),
                'h4' => esc_html__('h4', 'talkie'),
                'h5' => esc_html__('h5', 'talkie'),
                'h6' => esc_html__('h6', 'talkie'),
                
            ),
            'required' => array(
                'talkie_logo_sticky_type',
                '=',
                '2'
            ) ,
            'default' => esc_html__('2', 'talkie'),
        ),

       

        array(
            'id' => 'header_logo_sticky_color',
            'type' => 'color',
            'title' => esc_html__('Set Stikcy Header Logo Color', 'talkie') ,
            'subtitle' => esc_html__('Choose Stikcy Header Logo Color', 'talkie') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'talkie_logo_sticky_type',
                '=',
                '2'
            ) ,
        ) ,
       
    )
));


