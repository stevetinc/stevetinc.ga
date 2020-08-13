<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage talkie
* @since 1.0
* @version 1.0
*/
$talkie_option= get_option('talkie_options');
$talkie_options= get_option('talkie_options');
$sticky = '';
$header_class='';
if(isset($talkie_option['talkie_sticky_header_switch'])){
  $sticky =  $talkie_option['talkie_sticky_header_switch'];
}


if(!empty($sticky)){
  $header_class .= ' has-sticky';
}


if(isset($talkie_option['talkie_header_variation'])){
  $header_class .= ' '.$talkie_option['talkie_header_variation'];
}

if(isset($talkie_option['header_back_opt_switch']) && $talkie_option['header_back_opt_switch'] == 3){
$header_class .=' header_transperent';
}

?>
<header class="header1 <?php echo esc_attr($header_class);  ?>" >  
 <?php 
          if(isset($talkie_option['talkie_top_header_switch']) && $talkie_option['talkie_top_header_switch'])
          { ?>    
  <div class="sub-header">
    <div class="container">
      <?php
            get_template_part( 'template-parts/header/header', 'top' );
          ?>
         
    </div>
  </div>
  <?php  }
            
          ?>
    
      <div class="container main-header">
       
        <div class="row no-gutters">        
          <div class="col-sm-12">
            <div class="logo_block">
                <a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
                <?php  
                if(isset($talkie_option['talkie_logo_type']) && $talkie_option['talkie_logo_type'] == 1)
                {
                  if(isset($talkie_option['talkie_logo']['url']) && $talkie_option['talkie_logo']['url'] != '')
                  { 
                    $logo = $talkie_option['talkie_logo']['url'];
                    $logo_width = $talkie_option['logo-dimensions']['width'];
                    $logo_height = $talkie_option['logo-dimensions']['height'];
                    $logo_unit = $talkie_option['logo-dimensions']['units']; 
                    $logo_style = 'width:'.$logo_width.';height:'.$logo_height;                

                  ?>
                    <img class="img-fluid logo" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>" style="<?php echo esc_attr($logo_style); ?>"> 
                  <?php
                  } 
                  else 
                  { ?>
                    <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                    <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                  <?php }
                 
                
              }

              else if(isset($talkie_option['talkie_logo_type']) && $talkie_option['talkie_logo_type'] == 2)
              {
                if (isset($talkie_option['talkie_header_logo_text']) && $talkie_option['talkie_header_logo_text'] != '') 
                {
                   if(isset($talkie_option['talkie_header_logo_tag']))
                    {
                      $tag= $talkie_option['talkie_header_logo_tag'];
                    }

                    if(isset($talkie_option['header_logo_color']))
                    {
                      $style = "color:".sanitize_hex_color($talkie_option['header_logo_color'])."";
                    }
                    else {
                      $style = '';
                    }

                   echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo">'.esc_html($talkie_option['talkie_header_logo_text']).'</'.esc_attr($tag).'>'; 
                }
                
              }

              if(isset($talkie_option['talkie_logo_sticky_type']) && $talkie_option['talkie_logo_sticky_type'] == 1)
              {
                 
                 if(isset($talkie_option['talkie_header_logo_sticky']['url']) && $talkie_option['talkie_header_logo_sticky']['url'] != '')
                { 
                  $logo = $talkie_option['talkie_header_logo_sticky']['url'];                 

                ?>
                   <img class="img-fluid  logo-sticky" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                <?php
                } 
                
              }

              else if(isset($talkie_option['talkie_logo_sticky_type']) && $talkie_option['talkie_logo_sticky_type'] == 2)
              {
                
                if (isset($talkie_option['talkie_header_logo_sticky_text']) && $talkie_option['talkie_header_logo_sticky_text'] != '') 
                {
                   if(isset($talkie_option['talkie_header_logo_sticky_tag']))
                    {
                      $tag= $talkie_option['talkie_header_logo_sticky_tag'];
                    }

                    if(isset($talkie_option['header_logo_sticky_color']))
                    {
                      $style = "color:".sanitize_hex_color($talkie_option['header_logo_sticky_color'])."";
                    }
                    else {
                      $style = '';
                    }

                   echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo-sticky">'.esc_html($talkie_option['talkie_header_logo_sticky_text']).'</'.esc_attr($tag).'>'; 
                }
              }
              else 
              { 
              ?>
                <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                
                
            <?php } ?>
              </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light menu">
            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="ion-navicon"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if ( has_nav_menu( 'top' ) ) : ?>
											<?php wp_nav_menu( array(
												'theme_location' => 'top',
                        'menu_class'     => 'navbar-nav',
                        'menu_id'        => 'top-menu',
                        'container_id'   => 'iq-menu-container',
											) ); ?>
								<?php endif; ?>
              </div>									
              <div class="sub-main">
                <?php
                if(isset($talkie_option['header_display_button']))
                {
                $options = $talkie_option['header_display_button'];
                if($options == "yes")
                {
                ?>
                  <nav aria-label="breadcrumb">
                    <?php if((!empty($talkie_option['talkie_download_link'])) && (!empty($talkie_option['talkie_download_title'])))
                    {
                        $dlink = $talkie_option['talkie_download_link']; 
                        $dtitle = $talkie_option['talkie_download_title']; 
                    ?>
                    <div class="request-btn"><a href="<?php echo esc_url($dlink,'talkie'); ?>"><?php echo esc_attr($dtitle,'talkie'); ?></a></div>
                    <?php } ?>
                  </nav>
                  <?php
                  }
                }
                ?>
              </div>
            </nav>         
          </div>
        </div>
      </div>
</header>


