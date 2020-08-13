<?php


// talkie custom style color options

function talkie_container_width(){

    $talkie_option = get_option('talkie_options');

     //box layout and full width layout container width

    $box_container_width="";

    if(isset($talkie_option['opt-slider-label']) && !empty($talkie_option['opt-slider-label'])){
         $container_width =$talkie_option['opt-slider-label'];
        
         $box_container_width="
         body.boxed_layout #page, .container ,  body.boxed_layout header.menu-sticky ,body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container ,  body.full_width_layout  .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: ".$container_width."px !important;
         }
         body.boxed_layout .elementor-section.elementor-section-full_width ,body.boxed_layout section.elementor-section.elementor-section-boxed{
            width:100% !important;
            left:0 !important;
            right: auto !important;
         }
         body.boxed_layout header.menu-sticky .main-header
         {
            width: ".$container_width."px !important;
         }
         body.boxed_layout .container ,body.boxed_layout .elementor-section.elementor-section-full_width>.elementor-container .elementor-container ,body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container .elementor-container 
         {
            padding:0;
         }
         body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container, body.boxed_layout .elementor-section.elementor-section-full_width>.elementor-container, body.boxed_layout header .container, body.boxed_layout footer .container
         {
            padding:0 15px;
         }

        @media (max-width: 1199px) and (min-width: 992px)
        {

                body.boxed_layout #page, .container ,  body.boxed_layout header.menu-sticky ,body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container ,  body.full_width_layout  .elementor-section.elementor-section-boxed>.elementor-container{
                    max-width: 960px !important;
                }
        }

        @media (max-width: 991px)
        {
                 body.boxed_layout #page, .container ,  body.boxed_layout header.menu-sticky ,body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container ,  body.full_width_layout  .elementor-section.elementor-section-boxed>.elementor-container
                {
                    max-width: 720px !important;
                }
                body.boxed_layout #page 
                {
                    max-width: 90% !important;
                    max-width: calc(100% - 60px) !important;
                }
        }

        @media (max-width: 767px)
        {
                   body.boxed_layout #page, .container ,  body.boxed_layout header.menu-sticky ,body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container ,  body.full_width_layout  .elementor-section.elementor-section-boxed>.elementor-container
                {
                    max-width: 100% !important;

                } 
                body.boxed_layout .elementor-section.elementor-section-boxed>.elementor-container, body.boxed_layout .elementor-section.elementor-section-full_width>.elementor-container 
                {
                    padding: 0 15px;
                }
 
                body.boxed_layout #page
                {
                    max-width: 90% !important;
                    max-width: calc(100% - 30px) !important;
                }


        }";
    }     
    
    // Custom extra css
    $custom_css = get_option('custom_css');

    // talkie apply inline style
    wp_add_inline_style( 'talkie-style',
        $custom_css.
        $box_container_width
    );

   
}
add_action( 'wp_enqueue_scripts', 'talkie_container_width', 21 );


 //Set Body background Color and image
function talkie_layout_color() {     
   
    $talkie_option = get_option('talkie_options');
    $talkie_background_genaral = $talkie_option['talkie_background_genaral'];
   
    $body_primary_color = "";

    if($talkie_option['talkie_background_genaral'] == "1"){
         if(!empty($talkie_option['talkie_background_image']['url'])){
              $bglayout = $talkie_option['talkie_background_image']['url'];
          }
        if( !empty($bglayout) ) {
            $body_primary_color .= "
            body {
                background:url($bglayout) !important;
            }"; 
        }
    }

    if($talkie_option['talkie_background_genaral'] == "2"){
         $talkie_background_color = sanitize_hex_color($talkie_option['talkie_background_color']);
        if( !empty($talkie_background_color) && $talkie_background_color != '#ffffff') {
            $body_primary_color .= "
            body {
                background-color: $talkie_background_color !important;
            }"; 
        }
    }

    
    wp_add_inline_style( 'talkie-style', $body_primary_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_layout_color' , 20);

 //Set loader background Color 
function talkie_loader_color() {     
   
    $talkie_option = get_option('talkie_options');
    $talkie_loader_back_color =sanitize_hex_color($talkie_option['talkie_loader_back_color']);
   
    $body_loader_color = "";  
       
        if( !empty($talkie_loader_back_color) ) {
            $body_loader_color .= "
            #loading {
                background:$talkie_loader_back_color !important;
            }"; 
        }    
    wp_add_inline_style( 'talkie-style', $body_loader_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_loader_color' , 20);

//
function talkie_banner_title_hide() {     
   
    $talkie_option = get_option('talkie_options');
    $display_title =$talkie_option['display_title'];
    $display_title_style = "";  
   

       
        if( !empty($display_title) ) {
            if($display_title == "no")
            {
                 $display_title_style .= "
                .iq-breadcrumb-one h2.title{
                    display:none !important;
                }"; 
            }
        }    
    wp_add_inline_style( 'talkie-style', $display_title_style );
}
add_action( 'wp_enqueue_scripts', 'talkie_banner_title_hide' , 20);

//Set header background Color 
function header_background_color() {     
   
    $talkie_option = get_option('talkie_options');

    $header_background_color = ""; 

    if($talkie_option['header_back_opt_switch'] == 1){

        if(!empty($talkie_option['talkie_header_back_img']['url'])){

              $bglayout = $talkie_option['talkie_header_back_img']['url'];
        }

        if( !empty($bglayout) ) {
            $header_background_color .= "
            header {
                background:url($bglayout) !important;
                position:relative;
            }"; 
        }  
    }
    if($talkie_option['header_back_opt_switch'] == 2){

        $talkie_header_back_color = sanitize_hex_color($talkie_option['talkie_header_back_color']);   
         
        if( !empty($talkie_header_back_color) ) {
            $header_background_color .= "
            header {
                background:$talkie_header_back_color !important;
                position:relative;
            }"; 
        }   
    } 
    if($talkie_option['header_back_opt_switch'] == 3){
        
        
            $header_background_color .= "
            header {
                background:transparent !important;
            }"; 
          
    } 
    wp_add_inline_style( 'talkie-style', $header_background_color );
}
add_action( 'wp_enqueue_scripts', 'header_background_color' , 20);


//Set header sticky background Color 
function header_sticky_background_color() {     
   
    $talkie_option = get_option('talkie_options');
    $header_sticky_background_color = ""; 
    if($talkie_option['sticky_header_back_opt_switch'] == 1){

        if(!empty($talkie_option['talkie_sticky_header_back_img']['url'])){

              $bglayout = $talkie_option['talkie_sticky_header_back_img']['url'];
        }

        if( !empty($bglayout) ) {

            $header_sticky_background_color .= "
            header.menu-sticky {
                background:url($bglayout) !important;
                position:fixed;
            }"; 
        }  
    }
    if($talkie_option['sticky_header_back_opt_switch'] == 2){

        $talkie_header_back_color = sanitize_hex_color($talkie_option['talkie_sticky_header_back_color']);   
         
        if( !empty($talkie_header_back_color) ) {

            $header_sticky_background_color .= "
            header.menu-sticky {
                background:$talkie_header_back_color !important;
                position:fixed;
            }"; 
        }   
    } 

    if($talkie_option['sticky_header_back_opt_switch'] == 3){
        
        
            $header_sticky_background_color .= "
            header.menu-sticky {
                background:transparent !important;
            }"; 
          
    } 
    wp_add_inline_style( 'talkie-style', $header_sticky_background_color );
}
add_action( 'wp_enqueue_scripts', 'header_sticky_background_color' , 20);


//Set header Top background Color 
function header_top_background_color() {     
   
    $talkie_option = get_option('talkie_options');

    $header_top_background_color = ""; 

    if($talkie_option['sticky_top_header_back_opt_switch'] == 1){

        if(!empty($talkie_option['top_header_back_img']['url'])){

              $bglayout = esc_url($talkie_option['top_header_back_img']['url']);
        }

        if( !empty($bglayout) ) {
            $header_top_background_color .= "
            header .sub-header {
                background:url($bglayout) !important;
            }"; 
        }  
    }
    if($talkie_option['sticky_top_header_back_opt_switch'] == 2){

        $top_header_color = $talkie_option['top_header_back_color'];   
        
          
        if( !empty($top_header_color) ) {
           $top_header_color =  sanitize_hex_color($top_header_color);
         $header_top_background_color .= "
            header .sub-header {
                background : $top_header_color !important;
            }"; 
        }   
    } 
    if($talkie_option['sticky_top_header_back_opt_switch'] == 3){
        
        
            $header_top_background_color .= "
            header .sub-header {
                background:transparent !important;
            }"; 
          
    } 
    wp_add_inline_style( 'talkie-style', $header_top_background_color );
}
add_action( 'wp_enqueue_scripts', 'header_top_background_color' , 20);

//Set header Top Text Color 
function header_top_text_color() {     
    $header_top_text_color = "";
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['top_header_text_color'])) {
        $top_header_text_color = sanitize_hex_color($talkie_option['top_header_text_color']);
        

        if( !empty($top_header_text_color)) {

                 $header_top_text_color .= "
                 header .sub-header a  { color:$top_header_text_color; }
                 ";

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_top_text_color );
}
add_action( 'wp_enqueue_scripts', 'header_top_text_color' , 20);

//Set header Top Text Color 
function header_top_text_hover_color() {     
    $header_top_text_hover_color = ""; 
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['top_header_text_hover_color'])) {
        $top_header_text_hover_color = sanitize_hex_color($talkie_option['top_header_text_hover_color']);
        

        if( !empty($top_header_text_hover_color) ) {

                 $header_top_text_hover_color .= "
                 header .sub-header a:hover  { color:$top_header_text_hover_color; }
                 ";

        }    
    }
   
    wp_add_inline_style( 'talkie-style', $header_top_text_hover_color );
}
add_action( 'wp_enqueue_scripts', 'header_top_text_hover_color' , 20);


//Set menu Text Color 
function header_menu_text_color() {     
    $header_menu_text_color = ""; 
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_menu_color'])) {
        $talkie_menu_color = sanitize_hex_color($talkie_option['talkie_menu_color']);
        


        if( !empty($talkie_menu_color)) {

                 $header_menu_text_color .= "
                 header .main-header .navbar ul li a ,header .main-header .navbar ul li i  { color:$talkie_menu_color; }
                 ";

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_menu_text_color );
}
add_action( 'wp_enqueue_scripts', 'header_menu_text_color' , 20);

//Set menu Text Hover Color 
function header_menu_text_hover_color() {     
    $header_menu_text_hover_color = "";
    $talkie_option = get_option('talkie_options');
     if( isset($talkie_option['talkie_menu_hover_color'])) {
    $talkie_menu_hover_color = sanitize_hex_color($talkie_option['talkie_menu_hover_color']);
     


    if( !empty($talkie_menu_hover_color)) {

             $header_menu_text_hover_color .= "
             header .main-header .navbar ul  li:hover a,header .main-header .navbar ul  li:hover i, header .main-header .navbar ul li a:hover, header .main-header .navbar ul li.current-menu-item a, header .main-header .navbar ul li.current-menu-parent a,header .main-header .navbar ul li.current-menu-parent  i ,header .main-header .navbar ul li.current-menu-item i{ color:$talkie_menu_hover_color; }
             ";
               $header_menu_text_hover_color .= "
               header .main-header .navbar ul li .sub-menu li a:hover, header .main-header .navbar ul li .sub-menu li.current-menu-item a, header .main-header .navbar ul li .sub-menu li:hover>a, header .main-header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover a, header .main-header .navbar ul li .sub-menu li.current-menu-parent a, header .main-header .navbar ul li .sub-menu li.current-menu-parent .sub-menu li.current-menu-item a{
                background:$talkie_menu_hover_color;
                color:#ffffff;
               }";

    }    
   }
    wp_add_inline_style( 'talkie-style', $header_menu_text_hover_color );
}
add_action( 'wp_enqueue_scripts', 'header_menu_text_hover_color' , 20);

//Set Sub menu Text  Color 
function header_sub_menu_text_color() {     
    $header_sub_menu_text_color = ""; 
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_submenu_color'])) {
        $talkie_submenu_color = sanitize_hex_color($talkie_option['talkie_submenu_color']);
        


        if( !empty($talkie_submenu_color)) {

                 $header_sub_menu_text_color .= "
                 header .main-header .navbar ul li:hover .sub-menu li a,header .main-header .navbar ul li .sub-menu li  i{ color:$talkie_submenu_color; }
                 ";
                 $header_sub_menu_text_color .= "
                 header .main-header .navbar ul li .sub-menu li a:hover, header .main-header .navbar ul li .sub-menu li.current-menu-item a, header .main-header .navbar ul li .sub-menu li:hover>a, header .main-header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover a, header .main-header .navbar ul li .sub-menu li.current-menu-parent a, header .main-header .navbar ul li .sub-menu li.current-menu-parent .sub-menu li.current-menu-item a ,header .main-header .navbar ul li .sub-menu li:hover > i, header .main-header .navbar ul li .sub-menu li.current-menu-ancestor i{color:#ffffff;}";
                

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_sub_menu_text_color );
}
add_action( 'wp_enqueue_scripts', 'header_sub_menu_text_color' , 20);

//Set Sub menu Background  Color 
function header_sub_menu_background_color() {     
    $header_sub_menu_background_color = "";
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_sub_menu_back_color'])) {
        $talkie_sub_menu_back_color = sanitize_hex_color($talkie_option['talkie_sub_menu_back_color']);
         


        if( !empty($talkie_sub_menu_back_color)) {

                 $header_sub_menu_background_color .= "
                header .main-header .navbar ul li .sub-menu,header .main-header  .navbar ul li .sub-menu li a{ background:$talkie_sub_menu_back_color; }
                 ";      
                

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_sub_menu_background_color );
}
add_action( 'wp_enqueue_scripts', 'header_sub_menu_background_color' , 20);




//Set menu sticky Text Color 
function header_sticky_menu_text_color() {     
    $header_sticky_menu_text_color = "";
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_sticky_menu_color'])) {
        $talkie_sticky_menu_color = sanitize_hex_color($talkie_option['talkie_sticky_menu_color']);
         


        if( !empty($talkie_sticky_menu_color)) {

                 $header_sticky_menu_text_color .= "
                 header .main-header .navbar ul li a ,header .main-header .navbar ul li i  { color:$talkie_sticky_menu_color; }
                 ";

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_sticky_menu_text_color );
}
add_action( 'wp_enqueue_scripts', 'header_sticky_menu_text_color' , 20);

//Set menu sticky Text Hover Color 
function header_sticky_menu_text_hover_color() {     
    $header_sticky_menu_text_hover_color = "";
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_menu_sticky_hover_color'])) {
        $talkie_menu_sticky_hover_color = sanitize_hex_color($talkie_option['talkie_menu_sticky_hover_color']);
         


        if( !empty($talkie_menu_sticky_hover_color)) {

                 $header_sticky_menu_text_hover_color .= "
                 header .main-header .navbar ul  li:hover a,header .main-header .navbar ul  li:hover i, header .main-header .navbar ul li a:hover, header .main-header .navbar ul li.current-menu-item a, header .main-header .navbar ul li.current-menu-parent a,header .main-header .navbar ul li.current-menu-parent  i ,header .main-header .navbar ul li.current-menu-item i{ color:$talkie_menu_sticky_hover_color; }
                 ";
                   $header_sticky_menu_text_hover_color .= "
                   header .main-header .navbar ul li .sub-menu li a:hover, header .main-header .navbar ul li .sub-menu li.current-menu-item a, header .main-header .navbar ul li .sub-menu li:hover>a, header .main-header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover a, header .main-header .navbar ul li .sub-menu li.current-menu-parent a, header .main-header .navbar ul li .sub-menu li.current-menu-parent .sub-menu li.current-menu-item a{
                    background:$talkie_menu_sticky_hover_color;
                    color:#ffffff;
                   }";

        }    
    }
   
    wp_add_inline_style( 'talkie-style', $header_sticky_menu_text_hover_color );
}
add_action( 'wp_enqueue_scripts', 'header_sticky_menu_text_hover_color' , 20);

//Set Sub menu sticky Text  Color 
function header_sticky_sub_menu_text_color() {     
    $header_sticky_sub_menu_text_color = ""; 
    $talkie_option = get_option('talkie_options');
     if( isset($talkie_option['talkie_sticky_sub_menu_color'])) {
        $talkie_sticky_sub_menu_color = sanitize_hex_color($talkie_option['talkie_sticky_sub_menu_color']);
       


        if( !empty($talkie_sticky_sub_menu_color)) {

                 $header_sticky_sub_menu_text_color .= "
                 header .main-header .navbar ul li:hover .sub-menu li a,header .main-header .navbar ul li .sub-menu li  i{ color:$talkie_sticky_sub_menu_color; }
                 ";
                 $header_sticky_sub_menu_text_color .= "
                 header .main-header .navbar ul li .sub-menu li a:hover, header .main-header .navbar ul li .sub-menu li.current-menu-item a, header .main-header .navbar ul li .sub-menu li:hover>a, header .main-header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover a, header .main-header .navbar ul li .sub-menu li.current-menu-parent a, header .main-header .navbar ul li .sub-menu li.current-menu-parent .sub-menu li.current-menu-item a ,header .main-header .navbar ul li .sub-menu li:hover > i, header .main-header .navbar ul li .sub-menu li.current-menu-ancestor i{color:#ffffff;}";
                

        }    
   }
    wp_add_inline_style( 'talkie-style', $header_sticky_sub_menu_text_color );
}
add_action( 'wp_enqueue_scripts', 'header_sticky_sub_menu_text_color' , 20);

//Set Sub menu sticky Background  Color 
function header_sticky_sub_menu_background_color() {     
    $header_sticky_sub_menu_background_color = ""; 
    $talkie_option = get_option('talkie_options');
    if( isset($talkie_option['talkie_sub_sticky_menu_back_color'])) {
        $talkie_sub_sticky_menu_back_color = sanitize_hex_color($talkie_option['talkie_sub_sticky_menu_back_color']);
       


        if( !empty($talkie_sub_sticky_menu_back_color)) {

                 $header_sticky_sub_menu_background_color .= "
                header .main-header .navbar ul li .sub-menu,header .main-header  .navbar ul li .sub-menu li a{ background:$talkie_sub_sticky_menu_back_color; }
                 ";      
                

        }   
    } 
   
    wp_add_inline_style( 'talkie-style', $header_sticky_sub_menu_background_color );
}
add_action( 'wp_enqueue_scripts', 'header_sticky_sub_menu_background_color' , 20);


function header_button_color() { 
    $talkie_option = get_option('talkie_options');
    if($talkie_option['he_button_color'] == "2"){ 
        $header_button_color = $talkie_option['header_button_color'];
        $header_button_hover_color = $talkie_option['header_button_hover_color'];
        $header_button_text_color = $talkie_option['header_button_text_color'];
        $header_button_hover_text_color = $talkie_option['header_button_hover_text_color'];
    }

    $button_color = "";
    
    if($talkie_option['he_button_color'] == "2"){  
            $button_color .= "
            header .request-btn a {
                background: $header_button_color !important;
            }";
            $button_color .= "
            header .request-btn a:hover {
                background: $header_button_hover_color !important;
            }";
            $button_color .= "
            header .request-btn a {
                color: $header_button_text_color !important;
            }";
            $button_color .= "
            header .request-btn a:hover {
                color: $header_button_hover_text_color !important;
            }";
    }
    wp_add_inline_style( 'talkie-style', $button_color ); 
}
add_action( 'wp_enqueue_scripts', 'header_button_color' , 20);


//Set footer Top background Color 
function footer_top_background_color() {     
   
    $talkie_option = get_option('talkie_options');

    $footer_top_background_color = ""; 

    if($talkie_option['talkie_footer_top_background'] == 1){

        if(!empty($talkie_option['talkie_footer_top_image']['url'])){

              $bglayout = esc_url($talkie_option['talkie_footer_top_image']['url']);
        }

        if( !empty($bglayout) ) {
            $footer_top_background_color .= "
            footer .footer-topbar {
                background:url($bglayout) !important;
            }"; 
        }  
    }
    if($talkie_option['talkie_footer_top_background'] == 2){

        $top_footer_color = $talkie_option['talkie_footer_top_color'];   
        
          
        if( !empty($top_footer_color) ) {
           $top_footer_color =  sanitize_hex_color($top_footer_color);
         $footer_top_background_color .= "
            footer .footer-topbar {
                background : $top_footer_color !important;
            }"; 
        }   
    } 
  
    wp_add_inline_style( 'talkie-style', $footer_top_background_color );
}
add_action( 'wp_enqueue_scripts', 'footer_top_background_color' , 20);

function hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);
 
    if(strlen($hex) == 3) {
       $r = hexdec(substr($hex,0,1).substr($hex,0,1));
       $g = hexdec(substr($hex,1,1).substr($hex,1,1));
       $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
       $r = hexdec(substr($hex,0,2));
       $g = hexdec(substr($hex,2,2));
       $b = hexdec(substr($hex,4,2));
    }
    $rgb = array($r, $g, $b);
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
 }
 
function talkie_banner_title_color() {     
    //Set Body Color
    $talkie_option = get_option('talkie_options');
   
    $bn_title_color = "";

    if(isset($talkie_option['bg_title_color']) && !empty($talkie_option['bg_title_color']))
    {
     
        $bg_title_color = $talkie_option['bg_title_color'];
        if(!empty($bg_title_color)){ 
            $bn_title_color .="
            .iq-breadcrumb-one h2{
                color: $bg_title_color !important;
            }"; 
        } 
    
     wp_add_inline_style( 'talkie-style', $bn_title_color );
    }
}
add_action( 'wp_enqueue_scripts', 'talkie_banner_title_color' , 20);




function talkie_bg_color() {
    //Set Background Color
    
    $talkie_option = get_option('talkie_options');
    $bg_color = '';
    $background_color = '';
    if(isset($talkie_option['bg_type']) && !empty($talkie_option['bg_type']))
    {
    if($talkie_option['bg_type'] == "1"){
        if(isset($talkie_option['bg_color']))
        {
        $bg_color = $talkie_option['bg_color'];
        }
    }
    

    
        if($talkie_option['bg_type'] == "1"){
            if( !empty($bg_color) && $bg_color != '#ffffff') {
                $background_color .= "
                .iq-bg-over {
                    background : $bg_color !important;
                }"; 
            }
        }
    
    wp_add_inline_style( 'talkie-style', $background_color ); 
    }
}
add_action( 'wp_enqueue_scripts', 'talkie_bg_color' , 20);

function talkie_opacity_color() {
    //Set Background Opacity Color
    
    $talkie_option = get_option('talkie_options');
    if($talkie_option['bg_opacity'] == "3"){
    $bg_opacity = $talkie_option['opacity_color']['rgba'];
    }
    $op_color = "";

   
        if($talkie_option['bg_opacity'] == "3"){
        if( !empty($bg_opacity) && $bg_opacity != '#ffffff') {
            $op_color .= "
            .breadcrumb-video::before,.breadcrumb-bg::before, .breadcrumb-ui::before {
                background : $bg_opacity !important;
            }"; 
            }
        }
    
    wp_add_inline_style( 'talkie-style', $op_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_opacity_color' , 20);

function talkie_breadcrumbs_color() {
    //Set Background Opacity Color
    
    $talkie_option = get_option('talkie_options');
    $breadcrum_color = "";
    if($talkie_option['display_breadcrumbs'] == "yes"){
        if(isset($talkie_option['breadcrumbs_color']) && !empty($talkie_option['breadcrumbs_color']))
        {
            $breadcrumbs_color = $talkie_option['breadcrumbs_color'];
        }

         
    }
    

    
        if( !empty($breadcrumbs_color)){
            $breadcrum_color .= "
            .iq-breadcrumb-one ol li a, .iq-breadcrumb-one .breadcrumb-item.active, .iq-breadcrumb-one .breadcrumb-item + .breadcrumb-item::before {
                color : $breadcrumbs_color !important;
            }"; 

            wp_add_inline_style( 'talkie-style', $breadcrum_color );
            }
    
    
}
add_action( 'wp_enqueue_scripts', 'talkie_breadcrumbs_color' , 20);

function talkie_breadcrumbs_hover_color() {
    //Set Background Opacity Color
   
    $talkie_option = get_option('talkie_options');
    if($talkie_option['display_breadcrumbs'] == "yes" && isset($talkie_option['breadcrumbs_hover_color'])){
    $breadcrumbs_hover_color = $talkie_option['breadcrumbs_hover_color'];
    }
    $breadcrum_hover_color = "";

    
        if( !empty($breadcrumbs_hover_color)){
            $breadcrum_hover_color .= "
            .iq-breadcrumb-one ol li a:hover, .iq-breadcrumb-one .breadcrumb-item.active {
                color : $breadcrumbs_hover_color !important;
            }"; 
            }
    
    wp_add_inline_style( 'talkie-style', $breadcrum_hover_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_breadcrumbs_hover_color' , 20);


function talkie_footer_color(){
    //Set Footer Background Color
    $talkie_option = get_option('talkie_options');
    if($talkie_option['footer_option'] == "2"){
        $f_color = $talkie_option['footer_color']['rgba'];
        $footer_heading_color = $talkie_option['footer_heading_color'];
        $footer_text_color = $talkie_option['footer_text_color'];
        $footer_link_color = $talkie_option['footer_link_color'];
    }
    $footer_color = "";
    
    if($talkie_option['footer_option'] == "2"){
            $footer_color .= "
            .iq-over-dark-90::before {
                background : $f_color !important;
            }"; 
            $footer_color .= "
            footer .footer-top .footer-title,footer .testimonail-widget-menu .owl-carousel .owl-item .testimonial-info .testimonial-name h5,footer .testimonail-widget-menu .owl-carousel .owl-item .testimonial-info .testimonial-name .sub-title,footer .footer-top .text-white {
                color : $footer_heading_color !important;
            }"; 
            $footer_color .= "
            footer,footer .widget ul li a, footer.footer-one .info-share li a, footer.footer-one ul.iq-contact li i, footer .testimonail-widget-menu .owl-carousel .owl-item .testimonial-info p {
                color : $footer_text_color !important;
            }";

            $rgb = hex2rgb($footer_link_color);
            $conrgb = '';
            $conrgb .= '('; 
            foreach($rgb as $rgba){
                $conrgb .= $rgba.',';
            }
                $conrgb .= '0.6)';

            $footer_color .= "
            footer.footer-one .widget ul li a:hover, footer .widget ul.menu li a:hover, footer.footer-one .info-share li a:hover ,footer .wp-video .mejs-overlay-button:before {
                color : $footer_link_color !important;
            }

            footer .wp-video:before{
                background:rgba$conrgb;
            }";    
    }
    wp_add_inline_style( 'talkie-style', $footer_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_footer_color' , 20);

function talkie_footer_copyright(){
    //Set Footer Background Color
    $talkie_option = get_option('talkie_options');
    if($talkie_option['footer_copy_color'] == "2"){
        $footer_copyright_color = $talkie_option['footer_copyright_color'];
    }
    $footer_copyright = "";
    
    if($talkie_option['footer_copy_color'] == "2"){
            $footer_copyright .= "
            .copyright-footer .copyright {
                color : $footer_copyright_color !important;
            }";  
    }
    wp_add_inline_style( 'talkie-style', $footer_copyright );
}
add_action( 'wp_enqueue_scripts', 'talkie_footer_copyright' , 20);


function talkie_footer_opacity_color() {
    $talkie_option = get_option('talkie_options');
    if($talkie_option['footer_opacity'] == "2"){
    $f_op_color = $talkie_option['footer_opacity_color']['rgba'];
    }
    $footer_opacity_color = "";
    
    if($talkie_option['footer_opacity'] == "2"){
        if(!empty($f_op_color)) {
            $footer_opacity_color .= "
            .iq-over-dark-90::before {
                background : $f_op_color !important;
            }"; 
        }
    }
    wp_add_inline_style( 'talkie-style', $footer_opacity_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_footer_opacity_color' , 20);
?>
