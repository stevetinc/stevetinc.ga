<?php
/*
 * Header Options
*/


$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Page', 'talkie') ,
    'id' => 'editer-page',
    'icon' => 'eicon-product-pages',
    'customizer_width' => '1000px',
));

// Blog Page Settings
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Blog Page Settings','talkie'),
    'id'    => 'blog-section',
    
    
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for Pages.','talkie'),
    'fields'=> array(
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Page Options', 'talkie') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'talkie_blog_banner_image',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Blog Page Default Banner Image','talkie'),
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','talkie'),
        ),

        array(
            'id'       => 'blog_btn',
            'type'     => 'text',
            'title'    => esc_html__( 'Blog Button Name', 'talkie' ),
            'subtitle' => esc_html__( 'Change Blog Button Name in blog page and singal blog page', 'talkie' ),
            'default'  => esc_html__('Read More','talkie' ),
        ),

        array(
            'id'        => 'talkie_blog',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog page Setting','talkie' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar, 1column, 2column and 3column) for your blog section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','talkie' ), array( 'br' => array() ) ),            
            'options'   => array(
                                
                                '1' => array( 'title' => esc_html__( 'One Columns','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/one-column.png' ), 
                                '2' => array( 'title' => esc_html__( 'Two Columns','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/two-column.png' ), 
                                '3' => array( 'title' => esc_html__( 'Three Columns','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/backend/three-column.png' ),                                
                            ),
            'default'   => '1',
        ),

        array(
            'id'        => 'talkie_display_pagination',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Previous/Next Pagination','talkie'),
            'subtitle' => esc_html__( 'Turn on to display the previous/next post pagination for blog page.','talkie'),
            'options'   => array(
                            'yes' => esc_html__('On','talkie'),
                            'no' => esc_html__('Off','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'        => 'talkie_display_image',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Featured Image on Blog Archive Page','talkie'),
            'subtitle' => esc_html__( 'Turn on to display featured images on the blog or archive pages.','talkie'),
            'options'   => array(
                            'yes' => esc_html__('On','talkie'),
                            'no' => esc_html__('Off','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

       

        array(
            'id'        => 'talkie_display_comment',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Comments','talkie'),
            'subtitle' => esc_html__( 'Turn on to display comments.','talkie'),
            'options'   => array(
                            'yes' => esc_html__('On','talkie'),
                            'no' => esc_html__('Off','talkie')
                        ),
            'default'   => esc_html__('yes','talkie')
        ),

        array(
            'id'       => 'comment_btn',
            'type'     => 'text',
            'title'    => esc_html__( 'Comment Button Name', 'talkie' ),
            'subtitle' => esc_html__( 'Change Comment Button Name in singal blog page', 'talkie' ),
            'default'  => esc_html__('Read More','talkie' ),
        ),

    )
    ));
Redux::setSection( $opt_name, array(
        'title' => esc_html__('404','talkie'),
        'id'    => 'fourzerofour-section',
        
        'subsection' => true,
        'desc'  => esc_html__('This section contains options for 404.','talkie'),
        'fields'=> array(
            array(
                'id' => 'info_general'.rand(10,1000),
                'type' => 'info',
                'style' => 'custom',
                'color' => sanitize_hex_color($color),
    
                'title' => __('404 Page Options', 'talkie') ,
            ) ,
    
            array(
                'id' => 'section-general'.rand(10,1000),
                'type' => 'section',
                'indent' => true
            ) ,
    
            array(
                'id'       => 'talkie_404_banner_image',         
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( '404 Page Default Banner Image','talkie'),
                'read-only'=> false,
                'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','talkie'),
            ),
    
            array(
                'id'        => 'talkie_fourzerofour_title',
                'type'      => 'text',
                'title'     => esc_html__( '404 Page Title','talkie'),
                'default'   => esc_html__( '404 Error','talkie' )
            ),
            array(
                'id'        => 'talkie_four_description',
                'type'      => 'textarea',
                'title'     => esc_html__( '404 Page Description','talkie'),
                'default'   => esc_html__( 'Oops! This Page is Not Found.','talkie' )
            ),
        )) 
    );

   