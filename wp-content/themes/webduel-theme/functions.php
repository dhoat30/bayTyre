<?php 
/**
 * Inspiry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inspiry

 */

require get_theme_file_path('/inc/custom-post-type.php');

require get_theme_file_path('/inc/nav-registeration.php');


 //enqueue scripts
 function nexgen_scripts(){ 
   wp_enqueue_script("jQuery");
   wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('popper', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('magnific', get_theme_file_uri('/assets/js/magnific-popup.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('owl', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('scrollit', get_theme_file_uri('/assets/js/scrollIt.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('validator', get_theme_file_uri('/assets/js/validator.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('contact', get_theme_file_uri('/assets/js/contact.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);

   wp_enqueue_style('bootstrapStyles', get_theme_file_uri('/assets/css/bootstrap.min.css'));      
   wp_enqueue_style('OwnlStyles', get_theme_file_uri('/assets/css/owl.carousel.min.css'));    
   wp_enqueue_style('magnificStyles', get_theme_file_uri('/assets/css/magnific-popup.css')); 
   wp_enqueue_style('icomoonStyles', get_theme_file_uri('/assets/css/icomoon.css')); 
   wp_enqueue_style('icoFont', get_theme_file_uri('/assets/css/icofont.min.css')); 
   wp_enqueue_style('AnimateStyles', get_theme_file_uri('/assets/css/animate.css')); 
   wp_enqueue_style('styleScondaryStyles', get_theme_file_uri('/assets/css/style.css')); 
   wp_enqueue_style('responsiveStyles', get_theme_file_uri('/assets/css/responsive.css')); 
 
   if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
      wp_enqueue_script('main', 'http://localhost:3000/bundled.js',  NULL, '1.0', true);
    } 
    else {
      wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.4986f70258041b321038.js'),  array( 'jquery' ), '1.0', true);
      wp_enqueue_script('main', get_theme_file_uri('/bundled-assets/scripts.d395b3386071a58bc6dc.js'), array( 'jquery' ), '1.0', true);
      wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.d395b3386071a58bc6dc.css'));      
      wp_enqueue_style('our-vendor-styles', get_theme_file_uri('/bundled-assets/styles.d395b3386071a58bc6dc.css'));
    }
    wp_localize_script("main", "nexgenData", array(
      "root_url" => get_site_url(),
      "nonce" => wp_create_nonce("wp_rest")
    ));
}
add_action( "wp_enqueue_scripts", "nexgen_scripts" ); 

  //admin bar
  if ( ! current_user_can( "manage_options" ) ) {
   show_admin_bar( false );
}
//sidebar


add_action( "widgets_init", "mat_widget_areas" );
function mat_widget_areas() {
    register_sidebar( array(
        "name" => "Theme Sidebar",
        "id" => "mat-sidebar",
        "description" => "The main sidebar shown on the right in our awesome theme",
        "before_widget" => '<li id="%1$s" class="widget %2$s">',
		"after_widget"  => "</li>",
		"before_title"  => '<h3 class="widget-title">',
		"after_title"   => "</h3>",
    ));
}



