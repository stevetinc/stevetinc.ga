<?php
function talkie_custom_breadcrumbs() {
    
     $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
     $home = ''.esc_html__('Home', 'talkie').''; // text for the 'Home' link
     $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    
     global $post;
     $homeLink = esc_html(home_url());
    
     if (is_front_page()) {
    
       if ($showOnHome == 1) echo '<li class="breadcrumb-item"><a href="' . $homeLink . '"><i class="fa fa-home mr-2"></i>' . $home . '</a></li>';
    
     } else {
    
       echo '<li class="breadcrumb-item"><a href="' . $homeLink . '"><i class="fa fa-home mr-2"></i>' . $home . '</a></li> ';
    
        if( is_home()){
          echo  '<li class="breadcrumb-item active">'.esc_html__('Blogs', 'talkie').'</li>';
       }elseif ( is_category() ) {
         $thisCat = get_category(get_query_var('cat'), false);
         if ($thisCat->parent != 0) echo '<li class="breadcrumb-item">'.get_category_parents($thisCat->parent, TRUE, '  ').'</li>';
         echo  '<li class="breadcrumb-item active">'.esc_html__('Archive by category : ', 'talkie').' "' . single_cat_title('', false) . '" </li>';
    
       } elseif ( is_search() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Search results for : ', 'talkie').' "' . get_search_query() . '"</li>';
    
       } elseif ( is_day() ) {
         echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ';
         echo '<li class="breadcrumb-item"><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>  ';
         echo  '<li class="breadcrumb-item active">'.get_the_time('d').'</li>';
    
       } elseif ( is_month() ) {
         echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ';
         echo  '<li class="breadcrumb-item active">'.get_the_time('F').'</li>';
    
       } elseif ( is_year() ) {
         echo  '<li class="breadcrumb-item active">'.get_the_time('Y').'</li>';
    
       } elseif ( is_single() && !is_attachment() ) {
         if ( get_post_type() != 'post' ) {
           $post_type = get_post_type_object(get_post_type());
           $slug = $post_type->rewrite;
           echo '<li class="breadcrumb-item"><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
           if ($showCurrent == 1) echo '<li class="breadcrumb-item">'. get_the_title().'</li>';
         } else {
           $cat = get_the_category(); $cat = $cat[0];
          
           if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
           echo '<li class="breadcrumb-item">'.get_category_parents($cat, TRUE, '  ').'</li>';
           if ($showCurrent == 1) echo  '<li class="breadcrumb-item active">'.get_the_title().'</li>';
         }
    
       } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
         $post_type = get_post_type_object(get_post_type());
         echo  '<li class="breadcrumb-item active">'.$post_type->labels->singular_name.'</li>';
    
       } elseif ( is_attachment() ) {
         $parent = get_post($post->post_parent);
         $cat = get_the_category($parent->ID); $cat = $cat[0];
         echo '<li class="breadcrumb-item">'.get_category_parents($cat, TRUE, '  ').'</li>';
         echo '<li class="breadcrumb-item"><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
         if ($showCurrent == 1) echo '<li class="breadcrumb-item active"> ' .  get_the_title().'</li>';
    
       } elseif ( is_page() && !$post->post_parent ) {
         if ($showCurrent == 1) echo  '<li class="breadcrumb-item active">'.get_the_title().'</li>';
    
       } elseif ( is_page() && $post->post_parent ) {
         $parent_id  = $post->post_parent;
         $breadcrumbs = array();
         while ($parent_id) {
           $page = get_page($parent_id);
           $breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
           $parent_id  = $page->post_parent;
         }
         $breadcrumbs = array_reverse($breadcrumbs);
         
         if ($showCurrent == 1) echo '<li class="breadcrumb-item active"> ' .  get_the_title().'</li>';
    
       } elseif ( is_tag() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Posts tagged', 'talkie').' "' . single_tag_title('', false) . '"</li>';
    
       } elseif ( is_author() ) {
          global $author;
         $userdata = get_userdata($author);
         echo  '<li class="breadcrumb-item active">'.esc_html__('Articles posted by : ', 'talkie').' ' . $userdata->display_name.'</li>';
    
       } elseif ( is_404() ) {
         echo  '<li class="breadcrumb-item active">'.esc_html__('Error 404', 'talkie').'</li>';
       }
    
       if ( get_query_var('paged') ) {
         if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
         echo '<li class="breadcrumb-item">'. esc_html__('Page','talkie') . ' ' . get_query_var('paged').'</li>';
         if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
       }    
     }
} 
?>