<?php
/*
 * Header Options
*/


$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Sidebars', 'talkie') ,
    'id' => 'editer-sidebar',
    'icon' => 'eicon-sidebar',
    'customizer_width' => '500px',
));

// sidebar Page Settings
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Blog Sidebars','talkie'),
    'id'    => 'sidebar-section',
        
    'subsection' => true,
    'desc'  => wp_kses( __( 'Choose structures (No Sidebar , Right Sidebar, Left Sidebar) for your sidebar section.
            <br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','talkie' ), array( 'br' => array() ) ),            
    'fields'=> array(

        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Blog Page Sidebar Options', 'talkie') ,
            
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,       

        array(
            'id'        => 'talkie_blog_sidebar',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog Page','talkie' ),
            'subtitle'     => esc_html__( 'Choose Sidebar Option For Blog Page','talkie' ),
            
            'options'   => array(
                                '0' => array( 'title' => esc_html__( 'No Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Left Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Right Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                                
                                
                            ),
            'default'   => '0',
        ),

              

        // Single Blog Options
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Single Page Sider Options', 'talkie') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'        => 'talkie_blog_type',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog Singal Page Sidebar Setting','talkie' ),
            
            'options'   => array(


                '3' => array( 'title' => esc_html__( 'No Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Left Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Right Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                
                                
                            ),
            'default'   => '1',
        ),     
     

    )
    ));

// Archive Page
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Archive','talkie'),
    'id'    => 'sidebar-archive',
        
    'subsection' => true,
    'desc'  => wp_kses( __( 'Choose structures (No Sidebar , Right Sidebar, Left Sidebar) for your sidebar section.
            <br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','talkie' ), array( 'br' => array() ) ),            
    'fields'=> array(
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Archive Page Sidebar Options', 'talkie') ,           
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,       

        array(
            'id'        => 'talkie_single_blog_sidebar',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Archive Page','talkie' ),
            'subtitle'     => esc_html__( 'Choose Sidebar Option For Archive  Blog Page','talkie' ),
            
            'options'   => array(
                                '0' => array( 'title' => esc_html__( 'No Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Left Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Right Sidebar','talkie' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                                
                                
                            ),
            'default'   => '0',
        ),
    )
));
