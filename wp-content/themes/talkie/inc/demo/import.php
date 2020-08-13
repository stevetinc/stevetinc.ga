<?php
function talkie_import_files() { 
    return array(
        array(
            'import_file_name'             => esc_html__('Demo 1','talkie'),
            //'categories'                   => array( 'Category 1', 'Category 2' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-1/preview_import_image1.jpg',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 2','talkie'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-2/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'A special note for this import.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/?page_id=345',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 3','talkie'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-3/preview_import_image3.jpg',
            'import_notice'                => esc_html__( 'A special note for this import.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/?page_id=868',
        ),

        array(
            'import_file_name'             => esc_html__('blog-standard','talkie'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-4/preview_import_image4.jpg',
            'import_notice'                => esc_html__( 'A special note for this import.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/blog-standard/',
        ),

        array(
            'import_file_name'             => esc_html__('feature-slider','talkie'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-5/preview_import_image5.jpg',
            'import_notice'                => esc_html__( 'A special note for this import.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/feature-slider/',
        ),

        array(
            'import_file_name'             => esc_html__('service-slider','talkie'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/talkie-xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/talkie-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/talkie-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/talkie_redux.json',
                    'option_name' => 'talkie_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-6/preview_import_image6.jpg',
            'import_notice'                => esc_html__( 'A special note for this import.', 'talkie' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/talkie/demo2/service-slider/',
        ),
        
       
    );
}
add_filter( 'pt-ocdi/import_files', 'talkie_import_files' );

function talkie_after_import_setup($selected_import) {
    

    // Assign menus to their locations.
    $locations = get_theme_mod( 'nav_menu_locations' ); // registered menu locations in theme
    $menus = wp_get_nav_menus(); // registered menus
    
    if($menus) {				
        foreach($menus as $menu) { // assign menus to theme locations
            
            if( $menu->name == 'Main Menu' || $menu->name == 'main-menu' ) {
                $locations['top'] = $menu->term_id;
            }					
        }
    }
    set_theme_mod( 'nav_menu_locations', $locations ); // set menus to locations 

            
            if ( 'Demo 1' === $selected_import['import_file_name'] ) {
    
                // Assign front page and posts page (blog page).
                 $front_page_id = get_page_by_title( 'home' );
                 $blog_page_id  = get_page_by_title( 'Blog' );
                
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            } elseif ( 'Demo 2' === $selected_import['import_file_name'] ) {
                //Same codes as above for the demo 2
                $front_page_id = get_page_by_title( 'Home 2' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            } elseif ( 'Demo 3' === $selected_import['import_file_name'] ) {
                //Same codes as above for the demo 3
                $front_page_id = get_page_by_title( 'Home 3' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );
            }

            elseif ( 'blog-standard' === $selected_import['import_file_name'] ) {
                //Same codes as above for the demo 3
                $front_page_id = get_page_by_title( 'Blog Standard' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );
            }

            elseif ( 'feature-slider' === $selected_import['import_file_name'] ) {
                //Same codes as above for the demo 3
                $front_page_id = get_page_by_title( 'Feature Slider' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );
            }

            elseif ( 'service-slider' === $selected_import['import_file_name'] ) {
                //Same codes as above for the demo 3
                $front_page_id = get_page_by_title( 'Service Slider' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );
            }

            
                
             //Import Revolution Slider
                if ( class_exists( 'RevSlider' ) ) {
                    $slider_array = array(
                    get_template_directory()."/inc/demo/demo-1/talkie.zip",
                    get_template_directory()."/inc/demo/demo-2/talkie-02.zip",
                    get_template_directory()."/inc/demo/demo-3/talkie-demo-3.zip",
                    get_template_directory()."/inc/demo/demo-4/blog-standard.zip",
                    get_template_directory()."/inc/demo/demo-5/feature-slider.zip",
                    get_template_directory()."/inc/demo/demo-6/creative-freedom.zip",
                    
                    );

                    $slider = new RevSlider();

                    foreach($slider_array as $filepath){
                    $slider->importSliderFromPost(true,true,$filepath);  
                    }
                }


    // remove default post
    wp_delete_post(1);

}
add_action( 'pt-ocdi/after_import', 'talkie_after_import_setup' );
?>