<?php
/*
 * Color Options
 */
global $opt_name;

Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Color Attribute','talkie' ),
    'id'    => 'color-section',
    'icon'  => 'eicon-paint-brush',
    'desc'  => esc_html__('This section change the site default color.','talkie'),
    'fields'=> array(
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Color Scheme Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'talkie_color',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Color Scheme Settings', 'talkie' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'primary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Primary Singal Color', 'talkie' ),
            'required'  => array( 'talkie_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose primary color for main theme color and main background color.', 'talkie' ),
            'default'       =>'#a37cfc',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'primary_color_rgba',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Primary Gradient Color', 'talkie' ),
            'required'  => array( 'talkie_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose primary gradient color for main theme color and main background color.', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'secondary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Secondary Color', 'talkie' ),
            'required'  => array( 'talkie_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose secondary color for dark title and background.', 'talkie' ),
            'default'       =>'#1e1e1e',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'tertiary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Tertiary Color', 'talkie' ),
            'required'  => array( 'talkie_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose tertiary color for description color and border colors', 'talkie' ),
            'default'       =>'#8e989f',
            'mode'          => 'background',
            'transparent'   => false
        ),
       
    )
));
?>