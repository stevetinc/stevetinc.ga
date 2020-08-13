<?php
/*
 * Header Options
*/
$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'talkie') ,
    'id' => 'header-editor',
    'icon' => 'eicon-arrow-up',
    'customizer_width' => '500px',
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Layout', 'talkie') ,
    'id' => 'header-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for header.', 'talkie') ,
    'fields' => array(

        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Layout Options', 'talkie') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_header_variation',
            'type' => 'image_select',

            'options' => array(
                'header_default' => array(
                    'title' => esc_html__('Default', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/classic.png',
                ) ,
                'header_left' => array(
                    'title' => esc_html__('Logo left', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/stack-left.png',
                ) ,
                'header_right' => array(
                    'title' => esc_html__('Logo right', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/stack-right.png',
                ) ,

                'header_center' => array(
                    'title' => esc_html__('Logo center', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/stack-center.png',
                ) ,
                'header_split' => array(
                    'title' => esc_html__('Split menu logo center', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/split.png',
                ) ,

            ) ,
            'default' => 'header_default',
        ) ,

        array(
            'id' => 'header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Header Background Type', 'talkie') ,
            
            'options' => array(
                '0' => esc_html__('none', 'talkie') ,
                '1' => esc_html__('Image', 'talkie') ,
                '2' => esc_html__('Color', 'talkie'),
                '3' => esc_html__('Transparent', 'talkie')
            ) ,
            'default' => esc_html__('0', 'talkie')
        ) ,
        

        array(
            'id' => 'talkie_header_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Header background image', 'talkie') ,
            'read-only' => false,            
            
            'required' => array(
                'header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'talkie_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Header Color', 'talkie') ,            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'header_back_opt_switch',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,
        
        




        

        

       

    )
));

//Top Header Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Header', 'talkie') ,
    'id' => 'header-variation-top',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Top header.', 'talkie') ,
    'fields' => array(
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Top Header Setting', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general',
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id' => 'talkie_top_header_switch',
            'title' => esc_html__('Enable Top Header', 'talkie') ,
            'type' => 'switch',
            'default' => true,
        ) ,

        array(
            'id' => 'talkie_top_header_var',
            'type' => 'image_select',

            'options' => array(
                '1' => array(
                    'title' => esc_html__('Default', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-1.jpg',
                ) ,
                '2' => array(
                    'title' => esc_html__('Style 1', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-2.jpg',
                ) ,
                '3' => array(
                    'title' => esc_html__('Style 2', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-3.jpg',
                ) ,

                '4' => array(
                    'title' => esc_html__('Style 3', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-4.jpg',
                ) ,
                '5' => array(
                    'title' => esc_html__('Style 4', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-5.jpg',
                ) ,
                '6' => array(
                    'title' => esc_html__('Style 5', 'talkie') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-6.jpg',
                ) ,

            ) ,
            'required' => array(
                'talkie_top_header_switch',
                '=',
                true
            ) ,
            'default' => esc_html__('1', 'talkie')
        ) ,

        array(
            'id' => 'sticky_top_header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Top Header Background Type', 'talkie') ,
            
            'options' => array(
                '0' => esc_html__('none','talkie'),
                '1' => esc_html__('Image', 'talkie') ,
                '2' => esc_html__('color', 'talkie'),
                '3' => esc_html__('Transparent', 'talkie')
                
            ) ,
            'default' => esc_html__('0', 'talkie'),
            'required' => array(
                'talkie_top_header_switch',
                '=',
                true
            ) ,
        ) ,


        

        array(
            'id' => 'top_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Background Color', 'talkie') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'sticky_top_header_back_opt_switch',
                '=',
                '2'
            ) ,
        ) ,

        array(
            'id' => 'top_header_back_img',
            'type' => 'media',
            'title' => esc_html__('Image', 'talkie') ,
            
            'default' => '#ffffff',
            'url'=>true,
            'required' => array(
                'sticky_top_header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'top_header_text_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Color', 'talkie') ,            
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'talkie_top_header_switch',
                '=',
                true
            ) ,
        ) ,

        array(
            'id' => 'top_header_text_hover_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Hover Color', 'talkie') ,           
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'talkie_top_header_switch',
                '=',
                true
            ) ,
        ) ,
    )
));

//Sticky Header Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Sticky Header', 'talkie') ,
    'id' => 'header-variation-sticky',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Stikcy header.', 'talkie') ,
    'fields' => array(
        
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Sticky Header Settings', 'talkie') ,
        ) ,

        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_sticky_header_switch',
            'title' => esc_html__('Enable Sticky Header', 'talkie') ,
            'type' => 'switch',
            'default' => true,
        ) ,

        

        
        array(
            'id' => 'sticky_header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Stikcy Header Background Type', 'talkie') ,
            
            'options' => array(
                '0' => esc_html__('none', 'talkie') ,
                '1' => esc_html__('Image', 'talkie') ,
                '2' => esc_html__('color', 'talkie'),
                '3' => esc_html__('Transparent', 'talkie')
            ) ,
            'default' => esc_html__('0', 'talkie'),
            'required' => array(
                'talkie_sticky_header_switch',
                '=',
                true
            ) ,
        ) ,
        

        array(
            'id' => 'talkie_sticky_header_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Sticky Header Background Image', 'talkie') ,
            'read-only' => false,            
            
            'required' => array(
                'sticky_header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'talkie_sticky_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Sticky Header Background Color', 'talkie') ,            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'sticky_header_back_opt_switch',
                '=',
                '2'
            ) ,
            'transparent' => true
        ) ,
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Menu Color', 'talkie') ,
    'id' => 'default-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Top Menu.', 'talkie') ,
    'fields' => array(

        //top menu start
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Top Header Menu Color Settings', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Menu Text Color', 'talkie') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'talkie_menu_hover_color',
            'type' => 'color',
            'title' => esc_html__('Set Menu Hover Text Color', 'talkie') ,  
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'talkie_submenu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sub Menu Text Color', 'talkie') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'talkie_sub_menu_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Sub Menu Background Color', 'talkie') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        
        //Sticky menu start
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Sticky Menu Setting', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'talkie_sticky_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Menu Color Settings', 'talkie') , 
            'mode' => 'background',
            
            'transparent' => false
        ) ,

        array(
            'id' => 'talkie_menu_sticky_hover_color',
            'type' => 'color',
            'title' => esc_html__('Set Hover Sticky Menu Color', 'talkie') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

         array(
            'id' => 'talkie_sticky_sub_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Sub Menu Color', 'talkie') , 
            'mode' => 'background',
            
            'transparent' => false
        ) ,

        array(
            'id' => 'talkie_sub_sticky_menu_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Sub Menu BackGround Color', 'talkie') ,
            'mode' => 'background',            
            'transparent' => false
        ) ,

        
    )
));   

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Button', 'talkie') ,
    'id' => 'hader-button-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for button in header.', 'talkie') ,
    'fields' => array(

      array(
            'id'        => 'header_display_button',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Login/CTA Button','talkie'),
            'subtitle' => esc_html__( 'Turn on to display the Login and CTA button in top header.','talkie'),
            'options'   => array(
                            'yes' => esc_html__('On','talkie'),
                            'no' => esc_html__('Off','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'        => 'talkie_download_title',
            'type'      => 'text',
            'title'     => esc_html__( 'Title(Download)','talkie'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'default'   => 'Get Started',
            'desc'   => esc_html__('Change Title (e.g.Download).','talkie'),
        ),
        array(
            'id'        => 'talkie_download_link',
            'type'      => 'text',
            'title'     => esc_html__( 'Link(Download)','talkie'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'desc'   => esc_html__('Add download link.','talkie'),
        ),

        array(
            'id'       => 'he_button_color',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Header Button Colors', 'talkie' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'header_button_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Color', 'talkie' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Color', 'talkie' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Hover Button Hover Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Text Color', 'talkie' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_hover_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Text Color', 'talkie' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Hover Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        
    )
));   





