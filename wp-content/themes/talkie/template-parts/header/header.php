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


?>
<header>

<?php 
     
  
    if(isset($talkie_option['top_bar_option']) && $talkie_option['top_bar_option'] === "yes" ){   

        if(isset($talkie_option['top_contact_option']) && $talkie_option['top_contact_option'] === "yes" ){  
             
        }   

        ?>
        
    

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1>Contact</h1>
            </div>
            <div class="col-lg-6">
                <h1>Social</h1>
            </div>
        </div>
    </div> -->

<?php } ?>
  
      
</header>
