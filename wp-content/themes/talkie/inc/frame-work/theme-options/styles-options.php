<?php
/*
 * Styles Options
 */
global $opt_name;

Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Typography','talkie' ),
    'id'    => 'default-style-section',
    'icon'  => 'eicon-typography',
    'desc'  => esc_html__('This section contains typography related options.','talkie'),
    'fields'=> array(

        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Typography Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

    	array(
                'id'        => 'talkie_change_font',
                'type'      => 'switch',
                'title'     => esc_html__( 'Do you want to change fonts?','talkie' ),
                'default'   => esc_html__( '0','talkie' ),
                'on'    	=> esc_html__( 'Yes','talkie' ),
                'off'   	=> esc_html__( 'No','talkie' )
        ),

    	array(
                'id'        => 'body_font',
                'type'      => 'typography',
                'title'     => esc_html__( 'Body Font','talkie' ),
                'subtitle'  => esc_html__( 'Select the font.','talkie' ),
                'desc'      => esc_html__( 'Poppins is default font.','talkie' ),
                'required'  => array( 'talkie_change_font', '=', '1' ),
                'google'    => true,
                'font-style'    => true,
                'font-weight'   => true,
                'font-size'     => true,
                'line-height'   => false,
                'color'         => false,
                'text-align'    => false,            
                'default'       => array(
                    'font-family' => esc_html__( 'Poppins','talkie' ),
                    'google'      => true
                )
        ),

        array(
                'id'        => 'primary_menu',
                'type'      => 'typography',
                'title'     => esc_html__( 'Primary Menu','talkie' ),
                'subtitle'  => esc_html__( 'Select the font.','talkie' ),
                'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
                'required'  => array( 'talkie_change_font', '=', '1' ),
                'google'    => true,
                'font-style'    => true,
                'font-weight'   => true,
                'font-size'     => true,
                'line-height'   => false,
                'color'         => false,
                'text-align'    => false,            
                'default'       => array(
                    'font-family' => esc_html__( 'PT+Sans','talkie' ),
                    'google'      => true
                )
        ),
        array(
            'id'        => 'sub_menu',
            'type'      => 'typography',
            'title'     => esc_html__( 'Submenu Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),

        array(
            'id'        => 'h1_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h2_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h3_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h4_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h5_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h6_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'page_title_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'Page Title Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'page_desc_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'Page Description Font','talkie' ),
            'subtitle'  => esc_html__( 'Select the font.','talkie' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','talkie' ),
            'required'  => array( 'talkie_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','talkie' ),
                'google'      => true
            )
        ),
    )
));
?>