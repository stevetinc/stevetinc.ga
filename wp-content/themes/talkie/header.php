<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage talkie
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<!-- Required meta tags -->
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/1aea88cfed213b5c2f5d9aec3/76fc4132f7bf9e867bb55b3eb.js");</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php 
  $talkie_option = get_option('talkie_options');
	
		if ( ! function_exists( 'has_site_icon' ) || ! wp_site_icon() ) {
			if( !empty($talkie_option['talkie_background_favicon']['url']) ) { ?>
				<link rel="shortcut icon" href="<?php echo esc_url($talkie_option['talkie_background_favicon']['url']); ?>" />
				<?php 
      }
      else {
        ?>
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri().'/assets/images/favicon.ico'); ?>" />
        <?php 
      }
    }
   
wp_head(); ?>
</head>

<body data-spy="scroll" data-offset="80" <?php body_class(); ?>>
<?php
if(isset($talkie_option['talkie_loader_switch']))
{
  $options= $talkie_option['talkie_loader_switch'];
}
else {
  $options = '';
}


  
  ?>


<?php  if($options != 0  ) { ?>
    <!-- loading -->
  <div id="loading">
    <div id="loading-center">

      <?php
      if($options == 1)
      {
        if(!empty($talkie_option['talkie_background_loader']['url'])){
        $bgurl = $talkie_option['talkie_background_loader']['url'];
       
        ?>
          <div class="load-img" >
          <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','talkie'); ?>">
          </div>
        <?php
        }
        
      }
      else if($options == 2)
      {
        if(isset($talkie_option['talkie_loader_tag']))
        {
          $tag= $talkie_option['talkie_loader_tag'];
        }
        else
        {
          $tag = "2";
        }
        if(isset($talkie_option['talkie_loader_back_color_text']))
        {
          $style = "color:".$talkie_option['talkie_loader_back_color_text']."";
        }
        else {
          $style = '';
        }
        
        echo '<'.esc_attr($tag).' style='.esc_attr($style).'>'.esc_html__($talkie_option['talkie_loader_text'],'talkie').'</'.esc_attr($tag).'>';
        ?>
        
      <?php }
      
      else{
        $bgurl = get_template_directory_uri().'/assets/images/loader.gif';
        ?>
        <div class="load-img">
          <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','talkie'); ?>">
         </div>
        <?php
        }
      ?>
    </div>
  </div>
 <!-- loading End -->
<?php } 
else {
  $bgurl = get_template_directory_uri().'/assets/images/loader.gif';
  ?>
  <div id="loading">
    <div id="loading-center">

    <div class="load-img">
          <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','talkie'); ?>">
         </div>
</div>
</div>
<?php }
?>
 
  
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html__( 'Skip to content', 'talkie' ); ?></a>
  
    
  
    <?php
      

        get_template_part( 'template-parts/header/header', 'one' );   

        if(isset($talkie_option['display_banner']))
        {
          $opt = $talkie_option['display_banner'];
          if($opt == "yes")
          {
            talkie_display_header(); 
          }

        }
        else 
        {
            talkie_display_header(); 
        }    
        
      
  ?>

 
	<div class="site-content-contain">
		<div id="content" class="site-content">
