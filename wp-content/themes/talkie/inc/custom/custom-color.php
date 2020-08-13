<?php
function talkie_primary_color() { 
    //Set Primary Color
    $talkie_option = get_option('talkie_options');
    if($talkie_option['talkie_color'] == "2"){
        $body_bg_color = $talkie_option['primary_color'];
    }
    if($talkie_option['talkie_color'] == "2"){
        $body_bg_color_rgba = $talkie_option['primary_color_rgba'];
    }
    $primery_color = "";

    if($talkie_option['talkie_color'] == "2"){
        // Singal Color
        if( !empty($body_bg_color) ){

             if( !empty($body_bg_color_rgba)){
                 $primery_color .= "
                 .iq-amazing-tab .nav-tabs .nav-link::before, .button ,.pricing-tab li .nav-link.active ,#iq-talkie-price .tab-content>.active .iq-talkie-price , .iq-talkie-price.active, .iq-talkie-price:hover ,.iq-amazing-tab .nav-tabs li .nav-link.active, .iq-amazing-tab .nav-tabs li .nav-link:hover, .button, [type=submit],.iq-team .share ul li a:hover,.box-effect:before,.box-effect-two:before,.owl-carousel .owl-dots .owl-dot.active,.iq-progress-bar>span,.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a,.contact-box i{
                background-image:linear-gradient(to right, $body_bg_color 0%, $body_bg_color_rgba 100%) !important;
            }";

              $primery_color .= "
           .title-box span ,.iq-team:hover .iq-team-info h5,.pricing-tab li .nav-link,.iq-blog-box .iq-blog-meta ul.list-inline li a i, .iq-blog-box .iq-blog-meta ul.list-inline li i,.button-link,.iq-faq .iq-faq-title .iq-faq-icon,.iq-talkie-price-3.active .button,.iq-testimonial .iq-testimonial-user .iq-designation,.widget.widget_recent_comments #recentcomments li.recentcomments a,.widget ul li a:before,.widget-area .widget ul li a:hover,.widget_categories ul li, .widget_archive ul li,.iq-blog-box .iq-blog-meta ul.list-inline li a:hover,.iq-blog-box .blog-title a:hover h5, .iq-blog-box .blog-title a:hover{
                color : $body_bg_color !important;
            }";

            $primery_color .= "
            .page-numbers li .page-numbers.current, .page-numbers li .page-numbers:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active,footer.footer-one input[type=email]:hover, footer.footer-one input[type=email]:focus, .contact-form .cfield input:focus, .contact-form .cfield.textarea textarea:focus,.custom-tab.verticaltab3 .nav.nav-pills[aria-orientation=vertical] .nav-link, input:focus, input[type=text]:focus, input[type=email]:focus, input[type=search]:focus, input[type=password]:focus, textarea:focus, select:focus ,blockquote,.woocommerce-info,.iq-talkie-price-2.active,.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a{
                border-color : $body_bg_color !important;
            }";

          

            $primery_color .= "
            .button,input[type=submit]{background-size: 200% auto !important;}
            .button:hover,input[type=submit]:hover, .contact-form .cfield input[type=submit]:hover,.iq-pricing.blue-hover .price-footer .button:hover,.button-gradient:hover ,.widget_tag_cloud ul li a:hover,input[type=submit]:hover,input[type=submit]:focus{
                background-position: right center !important;
            }
            .share-social li:hover a,.widget_tag_cloud ul li a:hover, .share-box ul li:hover a{color:#ffffff !important;}
            ";

         
            $primery_color .= "
            .testimonial-circle .circle-bg, .advance-feature .nav-pills .nav-link.active, .button-gradient, ul.our-new-team .team-blog::before, .over-history-blog.swiper-container .project-year::before, .swiper-scrollbar-drag, .isotope-filters button.active, .isotope-filters button:hover, .blue-btn.button, .button {
                background-image: linear-gradient(to right, $body_bg_color 0%, $body_bg_color_rgba 51%,$body_bg_color  100%) !important;
            }";

            $primery_color .= "
            .share-social li:hover{
                background-color : $body_bg_color !important;
                background-image: linear-gradient(to right, $body_bg_color 0%, $body_bg_color_rgba 100%) !important;
            }";

            $primery_color .= "
            .iq-pricing.blue-hover, .our-testimonial.owl-carousel .owl-dots .owl-dot, .our-testimonial.owl-carousel .owl-dots .owl-dot.active, .owl-carousel .owl-dots .owl-dot.active,.owl-carousel .owl-dots .owl-dot:hover{
                border-color:  $body_bg_color;
            }";
            $primery_color .= "
              #iq-talkie-price .tab-content>.active .iq-talkie-price .button,.iq-talkie-price-3.active .button,.iq-talkie-price.active .button, .iq-talkie-price:hover .button{
                background : #ffffff !important;
            }
            .pricing-tab li .nav-link.active,.widget_tag_cloud ul li a:hover, footer ul.wp-tag-cloud li a:hover,.widget-area .widget.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a,footer .widget .footer-title{color:#ffffff !important;}
             footer .footer-top .mc4wp-form button[type=submit] {
                background: transparent !important;
            }
            ";


            
         
             }
             else{

            $primery_color .= "
            .iq-amazing-tab .nav-tabs .nav-link::before ,.button ,.pricing-tab li .nav-link.active, #iq-talkie-price .tab-content>.active .iq-talkie-price,.iq-talkie-price.active, .iq-talkie-price.active, .iq-talkie-price:hover ,.iq-amazing-tab .nav-tabs li .nav-link.active, .iq-amazing-tab .nav-tabs li .nav-link:hover, .button, [type=submit],.iq-team .share ul li a:hover,.box-effect:before,.box-effect-two:before,.owl-carousel .owl-dots .owl-dot.active,.iq-progress-bar>span,.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a,.contact-box i{
                background : $body_bg_color !important;
            }";
            $primery_color .= "
            .title-box span ,.iq-team:hover .iq-team-info h5 , .pricing-tab li .nav-link,.iq-blog-box .iq-blog-meta ul.list-inline li a i, .iq-blog-box .iq-blog-meta ul.list-inline li i,.button-link,.iq-faq .iq-faq-title .iq-faq-icon,.iq-talkie-price-3.active .button,.iq-testimonial .iq-testimonial-user .iq-designation,.widget.widget_recent_comments #recentcomments li.recentcomments a,.widget ul li a:before,.widget-area .widget ul li a:hover,.widget_categories ul li, .widget_archive ul li,.iq-blog-box .iq-blog-meta ul.list-inline li a:hover,.iq-blog-box .blog-title a:hover h5, .iq-blog-box .blog-title a:hover{
                color : $body_bg_color !important;
            }";

            $primery_color .= "
            .page-numbers li .page-numbers.current, .page-numbers li .page-numbers:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active,footer.footer-one input[type=email]:hover, footer.footer-one input[type=email]:focus, .contact-form .cfield input:focus, .contact-form .cfield.textarea textarea:focus,.custom-tab.verticaltab3 .nav.nav-pills[aria-orientation=vertical] .nav-link, input:focus, input[type=text]:focus, input[type=email]:focus, input[type=search]:focus, input[type=password]:focus, textarea:focus, select:focus ,blockquote,.iq-talkie-price-2.active ,.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a{
                border-color : $body_bg_color !important;
            }";

            $primery_color .= "
            .page-numbers li .page-numbers:hover{
                background-color : $body_bg_color !important;
            }";

            $primery_color .= "#iq-talkie-price .tab-content>.active .iq-talkie-price .button,.iq-talkie-price-3.active .button,.iq-talkie-price.active .button, .iq-talkie-price:hover .button{
                background : #ffffff !important;
            }
            .pricing-tab li .nav-link.active,.widget_tag_cloud ul li a:hover, footer ul.wp-tag-cloud li a:hover,.widget-area .widget.widget_tag_cloud ul li a, footer ul.wp-tag-cloud li a,footer .widget .footer-title{color:#ffffff !important;}
            ";

            $primery_color .= "
            .woocommerce-info{
                border-top-color : $body_bg_color !important;
            }";

            $primery_color .= "
            .testimonial-circle .circle-bg, .advance-feature .nav-pills .nav-link.active, .button-gradient, ul.our-new-team .team-blog::before, .over-history-blog.swiper-container .project-year::before, .swiper-scrollbar-drag, .isotope-filters button.active, .isotope-filters button:hover {
                background-image: -moz-linear-gradient(to right, $body_bg_color 0%, $body_bg_color 100%) !important;
            }";

            $primery_color .= "
            .share-social li:hover{
                background-color : $body_bg_color !important;
                background-image: linear-gradient(to right, $body_bg_color 0%, $body_bg_color 100%) !important;
            }";

            $primery_color .= "
            .iq-pricing.blue-hover, .our-testimonial.owl-carousel .owl-dots .owl-dot, .our-testimonial.owl-carousel .owl-dots .owl-dot.active, .owl-carousel .owl-dots .owl-dot.active,.owl-carousel .owl-dots .owl-dot:hover{
                border-color:  $body_bg_color;
            }
            footer .footer-top .mc4wp-form button[type=submit] {
                background: transparent !important;
            }";


           
        }
        }


        // Singal Gradient Color
        if( !empty($body_bg_color_rgba) && !empty($body_bg_color)){
           
        }
    }
    wp_add_inline_style( 'talkie-style', $primery_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_primary_color' , 20);

function talkie_secondary_color() {       
     //Set  Secondary Color
     $talkie_option = get_option('talkie_options');
     $secondary_color = $talkie_option['secondary_color'];
     $body_secondary_color = "";
     if( !empty($secondary_color) && $secondary_color != '#1e1e1e') {
 
         $body_secondary_color .="
         h2, h3, h4, h5, h6,.button-link:hover{
            color: $secondary_color !important;
         }";
          $body_secondary_color .="
             #iq-talkie-price .tab-content>.active .iq-talkie-price .button:hover, #iq-talkie-price .tab-content>.active .iq-talkie-price .button:focus,.button:hover, .button:focus, [type=submit]:hover, [type=submit]:focus,.iq-team .share ul li a,.widget_tag_cloud ul li a:hover, footer ul.wp-tag-cloud li a:hover{
             background:$secondary_color !important;
         }";

           $body_secondary_color .=" .widget_tag_cloud ul li a:hover, footer ul.wp-tag-cloud li a:hover{
             border-color:$secondary_color !important;
         }";
         
    }
    wp_add_inline_style( 'talkie-style', $body_secondary_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_secondary_color' , 20);

function talkie_tertiary_color() {       
    //Set  Secondary Color
    $talkie_option = get_option('talkie_options');
    $tertiary_color = $talkie_option['tertiary_color'];
    $body_tertiary_color = "";
    if( !empty($tertiary_color) && $tertiary_color != '#8e989f') {

        $body_tertiary_color= "
        body,.iq-blog-box .iq-blog-meta ul.list-inline li a,.widget_categories ul li a, .widget_archive ul li a, .widget-area .widget ul li a{
            color: $tertiary_color !important;
        }";

        $body_tertiary_color .="
        .title-box .title-design:before, .commentlist .iq-comments-media .reply a{
            background: $tertiary_color !important;
        }";
   }
   wp_add_inline_style( 'talkie-style', $body_tertiary_color );
}
add_action( 'wp_enqueue_scripts', 'talkie_tertiary_color' , 20);
?>