<?php
/*
 * Footer Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Footer', 'talkie' ),
    'id'    => 'footer-editor',
    'icon'  => 'el el-arrow-down',
    'customizer_width' => '500px',
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Image','talkie'),
    'id'    => 'footer-logo',
    'subsection' => true,
    
    'desc'  => esc_html__('This section contains options for footer.','talkie'),
    'fields'=> array(

        

        array(
            'id'       => 'logo_footer',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Logo','talkie'),            
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload Footer Logo for your Website.','talkie'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/logo.png' ),
        ),

        array(
            'id' => 'logo-dimensions-footer',
            'type' => 'dimensions',
            'default'  => array(
                'Width'   => '200', 
                'Height'  => '100'
            ),
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Footer Logo (Width/Height) Option', 'talkie') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'talkie') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'talkie')
        ) ,

        array(
            'id'       => 'footer_option',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Footer Option', 'talkie' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),


        array(
            'id'       => 'footer_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Footer Set Option', 'talkie' ),
            'required'  => array( 'footer_option', '=', '2' ),
            'subtitle' => esc_html__( 'Select this option for Background Type color and image.', 'talkie' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image',
            ),
            'default'  => '1'
        ),
        
        array(
            'id'       => 'footer_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Background Image','talkie'),
            'required'  => array( 'footer_type', '=', '2' ),
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload Footer image for your Website. Otherwise site title will be displayed in place of Logo.','talkie'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/footer-img.jpg' ),
        ), 

        array(
            'id'       => 'footer_opacity',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Opacity Color', 'talkie' ),
            'required' => array( 
                array('footer_type','!=','1') 
            ),
            'subtitle' => esc_html__( 'Select this option for Background Opacity Color.', 'talkie' ),
            'options'  => array(
                '1' => 'None',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'footer_opacity_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Background Gradient Color', 'talkie' ),
            'required'  => array( 'footer_opacity', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose body Gradient background color', 'talkie' ),
            'default'   => array(
                'color'     => '#eff1fe',
                'alpha'     => 0.9
            ),
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Footer Color', 'talkie' ),
            'subtitle'      => esc_html__( 'Choose Footer Background Color', 'talkie' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'default'   => array(
                'color'     => '#eff1fe',
                'alpha'     => 0.9
            ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_heading_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Heading Color', 'talkie' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Text Color', 'talkie' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_link_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Link Color', 'talkie' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

    )
));  

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Option','talkie'),
    'id'    => 'footer-section',
    'subsection' => true,    
    'desc'  => esc_html__('This section contains options for footer.','talkie'),
    'fields'=> array(

        array(
            'id'        => 'talkie_footer_display',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer','talkie'),
            'subtitle' => esc_html__( 'Display Footer On All Pages', 'talkie' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        
        array(
            'id'        => 'talkie_footer_width',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Footer Layout Type','talkie' ),
            'required'  => array( 'talkie_footer_display', '=', 'yes' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (1column, 2column and 3column) for your footer section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','talkie' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'One Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_first.png' ),
                                '2' => array( 'title' => esc_html__( 'Two Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_second.png' ),
                                '3' => array( 'title' => esc_html__( 'Three Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_third.png' ),
                                '4' => array( 'title' => esc_html__( 'Four Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),  
                                '5' => array( 'title' => esc_html__( '4+3+3+2 Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),   
                                '6' => array( 'title' => esc_html__( '12/4+2+2+4 Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),
                                '7' => array( 'title' => esc_html__( '12/4+2+2+4 Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),    
				'8' => array( 'title' => esc_html__( '12/12 Column','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),                                   
                            ),
            'default'   => '4',
        ),

        array(
            'id'       => 'footer_one',
            'type'     => 'select',
            'title'    => esc_html__('Select 1 Footer Alignment', 'talkie'), 
            'required'  => array( 'talkie_footer_display', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_two',
            'type'     => 'select',
            'title'    => esc_html__('Select 2 Footer Alignment', 'talkie'), 
            'required'  => array( 'talkie_footer_display', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_three',
            'type'     => 'select',
            'title'    => esc_html__('Select 3 Footer Alignment', 'talkie'), 
            'required'  => array( 'talkie_footer_display', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_fore',
            'type'     => 'select',
            'title'    => esc_html__('Select 4 Footer Alignment', 'talkie'),
            'required'  => array( 'talkie_footer_display', '=', 'yes' ), 
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_five',
            'type'     => 'select',
            'title'    => esc_html__('Select 5 Footer Alignment', 'talkie'),
            'required'  => array( 'talkie_footer_display', '=', 'yes' ), 
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

    )
));

Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Footer Copyright', 'talkie' ),
    'id'         => 'footer-copyright',
    'subsection' => true,
    
    'fields'     => array(

        array(
            'id'        => 'display_copyright',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer Copyright','talkie'),
            'subtitle' => esc_html__( 'Display Footer Copyright On All page', 'talkie' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'        => 'footer_copyright',
            'type'      => 'textarea',
            'required'  => array( 'display_copyright', '=', 'yes' ),
            'title'     => esc_html__( 'Copyright Text','talkie'),
            'default'   => esc_html__( 'Copyright 2019 talkie All Rights Reserved.','talkie'),
        ),

        array(
            'id'       => 'footer_copy_color',
            'type'     => 'button_set',
            'required'  => array( 'display_copyright', '=', 'yes' ),
            'title'    => esc_html__( 'Change Footer Copyright Color', 'talkie' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'footer_copyright_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Link Color', 'talkie' ),
            'required'  => array( 'footer_copy_color', '=', '2' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

    )) 
);

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Top Footer Option','talkie'),
    'id'    => 'talkie-footer-top-section',
    'subsection' => true,    
    'desc'  => esc_html__('This section contains options for footer.','talkie'),
    'fields'=> array(
        array(
            'id'        => 'talkie_footer_top_display',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Top Footer','talkie'),
            'subtitle' => esc_html__( 'Display Top Footer On All Pages', 'talkie' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),
        array(
            'id' => 'talkie_footer_top_background',
            'type' => 'button_set',                        
            'desc' => __('Select Footer Background Style', 'talkie') ,            
            'options' => array(
                '1' => 'Image',
                '2' => 'Color',
                '3' => 'Default'
            ) ,
            'default' => '3',

            'required' => array(
                'talkie_footer_top_display',
                '=',
                'yes'
            ) ,
        ) ,

        array(
            'id' => 'talkie_footer_top_image',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('upload image', 'talkie') ,
            'read-only' => true,
            'default' => array (
                'url' =>  get_template_directory_uri() . '/assets/images/theme-option/style/07.png',
            ),
            'required' => array(
                'talkie_footer_top_background',
                '=',
                '1'
            ) ,
            
        ) ,

        array(
            'id' => 'talkie_footer_top_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Color', 'talkie') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'talkie_footer_top_background',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,
    )
    ));
