<?php
/*
 * Social Network Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Social Media', 'talkie' ),
    'id'               => 'social_link',
    'icon'             => 'eicon-social-icons',  
    'fields'           => array(
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Social Media Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id'        => 'talkie_display_social_media',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Social Media on Footer','talkie'),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'default'   => esc_html__('no','talkie')
        ),
        array(
            'id'       => 'social-media-iq',
            'type'     => 'sortable',
            'title'    => esc_html__('Social Media Option', 'talkie'),
            'subtitle' => esc_html__('Enter social media url.', 'talkie'),
            'mode'     => 'text',
			'label'    => true,
            'options'  => array(
				'facebook-f'     => '',
				'twitter'        => '',
				'google-plus'  => '',
                'github'      	 => '',
				'instagram'      => '',
                'linkedin'       => '',
                'tumblr'         => '',
                'pinterest'      => '',
                'dribbble'       => '',
                'reddit'         => '',
                'flickr'         => '',
                'skype'          => '',
                'youtube-play'   => '',
                'vimeo'          => '',
                'soundcloud'     => '',
                'wechat'         => '',
                'renren'         => '',
                'weibo'          => '',
                'xing'           => '',
                'qq'             => '',
                'rss'            => '',
                'vk'             => '',
                'behance'        => '',
                'snapchat'       => '',
            ),
           
           
        ),
    ),
) );