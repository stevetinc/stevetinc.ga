<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage talkie
* @since 1.0
* @version 1.0
*/

$talkie_option = get_option('talkie_options');
$row = "row";
$cflag = 1;
$sflag = 1;
$calign="";
$salign="";
if(isset($talkie_option['talkie_top_header_var']))
{
  $topopt = $talkie_option['talkie_top_header_var'];
  if($topopt == 1)
  {
    $row = "row";
    $cflag = 1;
    $sflag = 1;
    $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 2)
  {
    $row = "row";
    
    $cflag = 1;
    $sflag = 0;
      $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 3)
  {
    $row = "row";
    
    $cflag = 0;
    $sflag = 1;
    $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 4)
  {
    $row = "row flex-row-reverse";
    
    $cflag = 1;
    $sflag = 1;
      $calign="text-right";
    $salign="text-left";
  }
  if($topopt == 5)
  {
    $row = "row flex-row-reverse";
    
    $cflag = 1;
    $sflag = 0;
      $calign="text-right";
    $salign="text-left";
  }
  if($topopt == 6)
  {
    $row = "row flex-row-reverse";    
    $cflag = 0;
    $sflag = 1;
      $calign="text-right";
    $salign="text-left";
  }

}

?>
<div class="<?php echo esc_attr($row); ?> ">
  
    <div class="col-lg-6 <?php echo esc_attr($calign); ?>">
    <?php 
    if($cflag == 1)
    {
  ?>
        <div class="top-contact">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="mail:<?php echo esc_attr($talkie_option['email']) ?>"><i class="fa fa-envelope"></i>
                      <?php echo esc_html__($talkie_option['email'],'talkie'); ?>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="tel:<?php echo esc_attr($talkie_option['phone']); ?>"><i class="fa fa-phone"></i>
                      <?php echo esc_html__($talkie_option['phone'],'talkie'); ?>
                    </a>
                  </li>
                </ul>        
        </div>
        <?php } ?>

    </div>
    
    
    <div class="col-lg-6  <?php echo esc_attr($salign); ?>">
    <?php 
    if($sflag == 1)
    { 
    ?>
        <div class="top-social">
            <ul class="list-inline">
                <?php
                    $data = $talkie_option['social-media-iq'];
                    foreach ($data as $key=>$options )
					          { 
                        if($options) {
                            echo '<li class="list-inline-item"><a href="'.$options.'"><i class="fa fa-'.$key.'"></i></a></li>';
                        }
                    } 
                ?>
            </ul>
        </div>
        <?php } 
    ?>
    </div>
    
</div>


  
      

