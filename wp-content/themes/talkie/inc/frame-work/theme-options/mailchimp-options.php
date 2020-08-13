<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'MailChimp Subscribe', 'talkie' ),
    'id'         => 'talkie-subscribe',
    'icon'       => 'el el-envelope',
    'fields'     => array(

        array(
            'id'        => 'talkie_subscribe',
            'type'      => 'text',
            'title'     => esc_html__( 'Subscribe Shortcode','talkie'),
            'subtitle'  => wp_kses( __( '<br />Put you Mailchimp for WP Shortcode here','talkie' ), array( 'br' => array() ) ),
        ),
     
    )) 
);
?>