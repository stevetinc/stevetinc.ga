<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage talkie
* @since 1.0
* @version 1.0
*/
$talkie_options = get_option('talkie_options');
$talkie_option = get_option('talkie_options');
?>
<header>
      <?php
      if(isset($talkie_option['email_and_button']))
      {
        $options = $talkie_option['email_and_button'];
        if($options == "yes")
        {
        ?>
        <div class="container-fluid sub-header">
          <div class="row">
          <div class="col-auto mr-auto">
          <?php
          if(!empty($talkie_option['header_display_contact']))
          {
            $options = $talkie_option['header_display_contact'];
            if($options == "yes")
            {
          ?>

              <div class="number-info">
                <ul>
                    <?php
                    if(!empty($talkie_option['header_email']))
                    {
                    ?>
                    <li class="email-header"><a href="mailto:<?php echo esc_html($talkie_options['header_email']); ?>">
                    <i class="fas fa-envelope"></i><?php echo esc_attr($talkie_options['header_email']); ?></a></li>
                    <?php } ?>
                    <?php
                    if(!empty($talkie_option['header_phone']))
                    {
                    ?>
                    <li class="phone-header"><a href="tel:<?php echo str_replace(str_split('(),-" '), '',$talkie_options['header_phone']); ?>">
                    <i class="fas fa-phone"></i><?php echo esc_attr($talkie_options['header_phone']); ?></a></li>
                    <?php } ?>
                </ul>
              </div>
            
          <?php
            }
          }
          ?>
          </div>
            <div class="col-auto col-auto ml-auto sub-main">
              <?php
              $talkie_option = get_option('talkie_options');
              if(isset($talkie_option['talkie_header_social_media']))
              {	
                $options = $talkie_option['talkie_header_social_media'];
                if($options == "yes"){ ?>
                  <div class="social-icon">
                    <?php $data = $talkie_option['header-social-media-iq']; ?>
                    <ul>
                      <?php
                      foreach ($data as $key=>$options )
                      {
                        if($options) {
                          echo '<li class="d-inline"><a href="'.$options.'"><i class="fa fa-'.$key.'"></i></a></li>';
                        }
                      } ?>
                    </ul>
                  </div>
              <?php
                }
              }	
              ?>
            </div>
          </div>
        </div>
        <?php
        }
      }
      ?>
      <div class="container-fluid main-header">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
                <?php  
                if(isset($talkie_option['talkie_logo']['url']))
                { 
                  $logo = $talkie_option['talkie_logo']['url'];
                ?>
                  <img class="img-fluid logo" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                <?php
                } 
                else 
                { 
                ?>
                  <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'talkie', 'talkie' ); ?>"> 
                <?php } ?>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if ( has_nav_menu( 'top' ) ) : ?>
											<?php wp_nav_menu( array(
												'theme_location' => 'top',
                        'menu_class'     => 'navbar-nav ml-auto',
                        'menu_id'        => 'top-menu',
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
