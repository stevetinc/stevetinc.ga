/*
Template: Talkie  - Chatbot Landing Page WordPress Theme
Author: iqonicthemes.in
Version: 1.2
Design and Developed by: iqonicthemes.in
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

1.Page Loader
2.Isotope
3.Masonry
4.Progress Bar
5.Counter
6.Tab Features
7.Back To Top
8.Accordion
9.Header
10.Magnific Popup
11.Owl Carousel
12.Wow Animation
13.Skrollr
14.Screenshot

------------------------------------------------
Index Of Script
----------------------------------------------*/
(function(jQuery) {

        "use strict";
         jQuery(window).on('load', function(e) {

                /*------------------------
                Page Loader
                --------------------------*/
                jQuery("#load").fadeOut();
                jQuery("#loading").delay(0).fadeOut("slow");           
            


                
                
                /*------------------------
                Isotope
                --------------------------*/
                jQuery('.isotope').isotope({
                    itemSelector: '.iq-grid-item',
                });

                /*------------------------------
                filter items on button click
                -------------------------------*/
                jQuery('.isotope-filters').on('click', 'button', function() {
                    var filterValue = jQuery(this).attr('data-filter');
                    jQuery('.isotope').isotope({
                        resizable: true,
                        filter: filterValue
                    });
                    jQuery('.isotope-filters button').removeClass('active');
                    jQuery(this).addClass('active');
                });


                /*------------------------
                Masonry
                --------------------------*/
                var jQuerymsnry = jQuery('.iq-masonry-block .iq-masonry');
                if (jQuerymsnry) {
                    var jQueryfilter = jQuery('.iq-masonry-block .isotope-filters');
                    jQuerymsnry.isotope({
                        percentPosition: true,
                        resizable: true,
                        itemSelector: '.iq-masonry-block .iq-masonry-item',
                        masonry: {
                            gutterWidth: 0
                        }
                    });
                    // bind filter button click
                    jQueryfilter.on('click', 'button', function() {
                        var filterValue = jQuery(this).attr('data-filter');
                        jQuerymsnry.isotope({
                            filter: filterValue
                        });
                    });

                    jQueryfilter.each(function(i, buttonGroup) {
                        var jQuerybuttonGroup = jQuery(buttonGroup);
                        jQuerybuttonGroup.on('click', 'button', function() {
                            jQuerybuttonGroup.find('.active').removeClass('active');
                            jQuery(this).addClass('active');
                        });
                    });
                }


                /*------------------------
                Progress Bar
                --------------------------*/
                jQuery('.iq-progress-bar > span').each(function() {
                    var jQuerythis = jQuery(this);
                    var width = jQuery(this).data('percent');
                    jQuerythis.css({
                        'transition': 'width 2s'
                    });
                    setTimeout(function() {
                        jQuerythis.appear(function() {
                            jQuerythis.css('width', width + '%');
                        });
                    }, 500);
                });


                /*----------------
                Counter
                ---------------------*/
                jQuery('.timer').countTo();


                /*------------------------
                Tab Features
                --------------------------*/


                jQuery('.sub-menu').css('display', 'none');
                jQuery('.sub-menu').prev().addClass('isubmenu');
                jQuery(".sub-menu").before('<i class="fa fa-angle-down toggledrop" aria-hidden="true"></i>');


                jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function() {
                    jQuery(this).next('.children, .sub-menu').slideToggle();
                });

                jQuery("#top-menu .menu-item .toggledrop").off("click");
                if (jQuery(window).width() < 992) {
                    jQuery('#top-menu .menu-item .toggledrop').on('click', function(e) {
                        e.preventDefault();
                        jQuery(this).next('.children, .sub-menu').slideToggle();
                    });
                }

                /*------------------------
                Back To Top
                --------------------------*/
                jQuery('#back-to-top').fadeOut();
                jQuery(window).on("scroll", function() {
                    if (jQuery(this).scrollTop() > 250) {
                        jQuery('#back-to-top').fadeIn(1400);
                    } else {
                        jQuery('#back-to-top').fadeOut(400);
                    }
                });

                // scroll body to 0px on click
                jQuery('#top').on('click', function() {
                    jQuery('top').tooltip('hide');
                    jQuery('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

                /*------------------------
                Accordion
                --------------------------*/
                jQuery('.iq-faq .iq-faq-block .iq-faq-details').hide();
                jQuery('.iq-faq .iq-faq-block:first').addClass('iq-active').children().slideDown('slow');
                jQuery('.iq-faq .iq-faq-block ').on("click", function() {
                    if (jQuery(this).children('div.iq-faq-details').is(':hidden')) {
                        jQuery('.iq-faq .iq-faq-block').removeClass('iq-active').children('div.iq-faq-details').slideUp('slow');
                        jQuery(this).toggleClass('iq-active').children('div.iq-faq-details').slideDown('slow');
                    }
                });

             

                /*------------------------
                Header
                --------------------------*/   
                //console.log(jQuery('header').hasClass('has-sticky'));
                if(jQuery('header').hasClass('has-sticky'))
                {         
                    jQuery(window).on('scroll', function() {
                        if (jQuery(this).scrollTop() > 300) {
                            jQuery('header').addClass('menu-sticky');
                            jQuery('.has-sticky .logo').addClass('logo-display');
                        } else if (jQuery(this).scrollTop() < 20 ) {
                            jQuery('header').removeClass('menu-sticky');
                            jQuery('.has-sticky .logo').removeClass('logo-display');
                        }
                    });

                }

                /*------------------------
                Magnific Popup
                --------------------------*/
                jQuery('.popup-gallery').magnificPopup({
                    delegate: 'a.popup-img',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function(item) {
                            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                        }
                    }
                });


                jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });

                /*------------------------
                Faq
                --------------------------*/
                
                jQuery('.collapse').on('shown.bs.collapse', function(){
                    
                    jQuery(this).parent().find(".fa-chevron-right").removeClass("fa-chevron-right").addClass("fa-chevron-down");
                    }).on('hidden.bs.collapse', function(){
                    jQuery(this).parent().find(".fa-chevron-down").removeClass("fa-chevron-down").addClass("fa-chevron-right");
                    });
                /*------------------------
                Owl Carousel
                --------------------------*/
                jQuery('.owl-carousel').each(function() {
                    
                    var jQuerycarousel = jQuery(this);
                    jQuerycarousel.owlCarousel({
                        items: jQuerycarousel.data("items"),                        
                        loop: jQuerycarousel.data("loop"),
                        margin: jQuerycarousel.data("margin"),
                        nav: jQuerycarousel.data("nav"),
                        dots: jQuerycarousel.data("dots"),
                        autoplay: jQuerycarousel.data("autoplay"),
                        autoplayTimeout: jQuerycarousel.data("autoplay-timeout"),
                        navText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"],
                        responsiveClass: true,
                        responsive: {
                            // breakpoint from 0 up
                            0: {
                                items: jQuerycarousel.data("items-mobile-sm"),
                                nav: false,
                                dots: true
                            },
                            // breakpoint from 480 up
                            480: {
                                items: jQuerycarousel.data("items-mobile"),
                                nav: false,
                                dots: true
                            },
                            // breakpoint from 786 up
                            786: {
                                items: jQuerycarousel.data("items-tab")
                            },
                            // breakpoint from 1023 up
                            1023: {
                                items: jQuerycarousel.data("items-laptop")
                            },
                            1199: {
                                items: jQuerycarousel.data("items")
                            }
                        }
                    });
                });

                

                /*------------------------
                Wow Animation
                --------------------------*/
                var wow = new WOW({
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: false,
                    live: true
                });
                wow.init();


                /*------------------------
                    skrollr
                --------------------------*/
                //skrollr.init({forceHeight: false});
         });

        jQuery(window).on('resize', function() { 
            "use strict";
            jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function() {
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });

            jQuery("#top-menu .menu-item .toggledrop").off("click");
            if (jQuery(window).width() < 992) {
                jQuery('#top-menu .menu-item .toggledrop').on('click', function(e) {
                    e.preventDefault();
                    jQuery(this).next('.children, .sub-menu').slideToggle();
                });
            }
        });

        jQuery(document).ready(function() {          

            /*---------------------------
            Tabs
            ---------------------------*/
            
            var a=jQuery('.nav.nav-pills').each(function(){
                var b =jQuery(this).find('a.active').attr('href');
                activaTab(b);
            });
            
            function activaTab(pill){
                jQuery(pill).addClass('active show');
            };

            jQuery('.nav.nav-pills').click(function(){
                jQuery('.nav.nav-pills').children('.tab-title-desc').slideDown('slow');
                
            });
        });

})(jQuery);





