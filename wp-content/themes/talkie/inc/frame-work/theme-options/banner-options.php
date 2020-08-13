<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Banner Setting','talkie'),
    'id'    => 'breadcrumbs-fevicon',
    'icon'  => 'eicon-banner',
    'desc'  => esc_html__('This section contains options for Breadcrumbs.','talkie'),
    'fields'=> array(

        // array(
        //     'id'       => 'talkie_page_banner_image',         
        //     'type'     => 'media',
        //     'url'      => true,
        //     'title'    => esc_html__( 'Default Banner Image','talkie'),
        //     'read-only'=> false,
        //     'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/banner/bg.png' ),
        //     'subtitle' => esc_html__( 'Upload default banner image for your Website. Otherwise blank field will be displayed in place of this section.','talkie'),
        // ),

        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Banner Layout Options', 'talkie') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'      => 'bg_image',
            'type'    => 'image_select',
            'title'   => esc_html__( 'Select Image', 'talkie' ),
            'subtitle' => esc_html__( 'A preview of the selected image will appear underneath the select box.', 'talkie' ),
            'options' => array(
                '1'      => array(
                    'alt' => 'Style1',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-1.jpg',
                ),
                '2'      => array(
                    'alt' => 'Style2',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-2.jpg',
                ),
                '3'      => array(
                    'alt' => 'Style3',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-3.jpg',
                ),
                '4'      => array(
                    'alt' => 'Style4',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-4.jpg',
                ),
                '5'      => array(
                    'alt' => 'Style5',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-5.jpg',
                ),
            ),
            'default' => '2'
        ),
        array(
            'id'        => 'display_banner',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Banner','talkie'),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'        => 'display_breadcrumbs',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Breadcrumbs on Banner','talkie'),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'required'  => array( 'display_banner', '=', 'yes' ),
         
                'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'        => 'display_title',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Title on Banner','talkie'),
            'options'   => array(
                            'yes' => esc_html__('Yes','talkie'),
                            'no' => esc_html__('No','talkie')
                        ),
            'required'  => array( 'display_banner', '=', 'yes' ),
         
                'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'            => 'breadcrumbs_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Color', 'talkie' ),
            'subtitle'      => esc_html__( 'Choose Title Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

         array(
            'id'            => 'breadcrumbs_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Active Color', 'talkie' ),
            'subtitle'      => esc_html__( 'Choose Title Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),
        array(
            'id'            => 'bg_title_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Title Color', 'talkie' ),
            'subtitle'      => esc_html__( 'Choose Title Color', 'talkie' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'       => 'bg_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Header Set Option', 'talkie' ),
            'subtitle' => esc_html__( 'Select this option for Background Type color or image and video.', 'talkie' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image',
                '3' => 'Video'
            ),
            'default'  => '1'
        ),

        array(
            'id'       => 'banner_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Set Body Image','talkie'),
            'read-only'=> false,
            'required'  => array( 'bg_type', '=', '2' ),
            'subtitle' => esc_html__( 'Upload Image for your body.','talkie'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/bg.jpg' ),
        ), 

        array(
            'id'            => 'bg_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Background Color', 'talkie' ),
            'subtitle'      => esc_html__( 'Choose Background Color', 'talkie' ),
            'required'  => array( 'bg_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'       => 'bg_video_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Your Video Path', 'talkie' ),
            'required'  => array( 'bg_type', '=', '3' ),
            'subtitle' => esc_html__( 'Upload video in media and paste video link over here.', 'talkie' ),
            'default'  => esc_html__('http://localhost/talkie/wordpress/wp-content/uploads/2019/08/SampleVideo.mp4','talkie' ),
        ),

        array(
            'id'       => 'bg_opacity',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Opacity Color', 'talkie' ),
            'required' => array( 
                array('bg_type','!=','1') 
            ),
            'subtitle' => esc_html__( 'Select this option for Background Opacity Color.', 'talkie' ),
            'options'  => array(
                '1' => 'None',
                '2' => 'Dark',
                '3' => 'Custom'
            ),
            'default'  => '1'
        ),


        array(
            'id'            => 'opacity_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Background Gradient Color', 'talkie' ),
            'required'  => array( 'bg_opacity', '=', '3' ),
            'subtitle'      => esc_html__( 'Choose body Gradient background color', 'talkie' ),
            'default'       => 'rgba(2, 13, 30, 0.9)',
            'transparent'   => false
        ),

    )
)); 
?>