<?php
// -> START Contact
    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Contact', 'talkie' ),
        'id'    => 'Contact', 
        'icon'  => 'eicon-map-pin',
        'desc'  => esc_html__( '', 'talkie' ),
		'fields'           => array(
            array(
                'id'       => 'address',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Address', 'talkie' ),
                'subtitle' => esc_html__( 'Subtitle', 'talkie' ),
                'desc'     => esc_html__( 'Field Description', 'talkie' ),
                'default'  => esc_html__('1234 North Avenue Luke Lane, South Bend, IN 360001','talkie' ),
            ),
			array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'talkie' ),
                'subtitle' => esc_html__( 'Subtitle', 'talkie' ),
                'desc'     => esc_html__( 'Field Description', 'talkie' ),
                'preg' => array(
                    'pattern' => '/[^0-9_ -+()]/s', 
                    'replacement' => ''
                ),
                'default'  => esc_html__('+0123456789','talkie' ),
            ),
			
			array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'talkie' ),
                'desc'     => esc_html__( 'Field Description', 'talkie' ),
                'validate' => 'email',
                'msg'      => esc_html__('custom error message','talkie' ),
                'default'  => esc_html__('support@iqnonicthemes.com','talkie' ),
            ),
						
        )
        
    ) );
?>