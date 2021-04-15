<?php 
//custom post register

//custom post register
add_theme_support("post-thumbnails");

add_post_type_support( "our-team", "thumbnail" ); 

function register_custom_type2(){ 

   //our team post type
   register_post_type("our-team", array(
      "supports" => array("page-attributes"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Team", 
         "add_new_item" => "Add New Team Member", 
         "edit_item" => "Edit Team Member", 
         "all_items" => "All Team Members", 
         "singular_name" => "Team Member"
      ), 
      "menu_icon" => "dashicons-admin-users"
   )
   ); 

   //projects
   register_post_type("sale", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Sales", 
         "add_new_item" => "Add New Sale", 
         "edit_item" => "Edit Sale", 
         "all_items" => "All Sales", 
         "singular_name" => "Sale"      
      ), 
      "menu_icon" => "dashicons-money-alt"
   )
   ); 

   //usp
   register_post_type("usp", array(
      "supports" => array("title", "thumbnail", "editor"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "USP", 
         "add_new_item" => "Add New USP", 
         "edit_item" => "Edit USP", 
         "all_items" => "All USP", 
         "singular_name" => "USP"     
      ), 
      "menu_icon" => "dashicons-editor-ul"
   )
   ); 

   //Frequently asked questions
   register_post_type("faq", array(
      "supports" => array("title", "editor"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Faq's", 
         "add_new_item" => "Add New Faq's", 
         "edit_item" => "Edit Faq's", 
         "all_items" => "All Faq's", 
         "singular_name" => "Faq's"     
      ), 
      "menu_icon" => "dashicons-edit
      "
   )
   );

   //banners
   register_post_type("banner", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Banners", 
         "add_new_item" => "Add New Banner", 
         "edit_item" => "Edit Banner", 
         "all_items" => "All Banners", 
         "singular_name" => "Banner"     
      ), 
      "menu_icon" => "dashicons-format-video"
   )
   );

   //Reviews
   register_post_type("reviews", array(
      "supports" => array("title", "thumbnail"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Reviews", 
         "add_new_item" => "Add New Review", 
         "edit_item" => "Edit Review", 
         "all_items" => "All Reviews", 
         "singular_name" => "Review"     
      ), 
      "menu_icon" => "dashicons-buddicons-buddypress-logo"
   )
   );
   
   //Services
   register_post_type("services", array(
      "supports" => array("title", "thumbnail", "editor"), 
      "public" => true, 
      'show_in_rest' => true,
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Services", 
         "add_new_item" => "Add New Service", 
         "edit_item" => "Edit Service", 
         "all_items" => "All Services", 
         "singular_name" => "Service"     
      ), 
      "menu_icon" => "dashicons-megaphone"
   )
   );

   //business info
   register_post_type("business-info", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true,
      "hierarchical" => true,
      "labels" => array(
         "name" => "Business Info", 
         "add_new_item" => "Add New Business Info", 
         "edit_item" => "Edit Business Info", 
         "all_items" => "All Business Info", 
         "singular_name" => "Business Info"     
      ), 
      "menu_icon" => "dashicons-format-aside"
   )
   );

    //certification 
    register_post_type("certification", array(
      "supports" => array("title", 'thumbnail'), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Certifications", 
         "add_new_item" => "Add New Certification", 
         "edit_item" => "Edit Certification", 
         "all_items" => "All Certifications", 
         "singular_name" => "Certification"     
      ), 
      "menu_icon" => "dashicons-welcome-learn-more"
   )
   );

   //slider 
   register_post_type("hero", array(
      "supports" => array("title", 'thumbnail', 'editor'), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Heros", 
         "add_new_item" => "Add New Hero", 
         "edit_item" => "Edit Hero", 
         "all_items" => "All Heros", 
         "singular_name" => "Hero"     
      ), 
      "menu_icon" => "dashicons-format-gallery"
   )
   );

   //subtitle 
   register_post_type("subtitle", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Subtitles", 
         "add_new_item" => "Add New Subtitle", 
         "edit_item" => "Edit Subtitle", 
         "all_items" => "All Subtitles", 
         "singular_name" => "Subtitle"     
      ), 
      "menu_icon" => "dashicons-media-code"
   )
   );

   //hero-image 
   register_post_type("hero-image", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Hero Images", 
         "add_new_item" => "Add New Hero Image", 
         "edit_item" => "Edit Hero Image", 
         "all_items" => "All Hero Images", 
         "singular_name" => "Hero Image"     
      ), 
      "menu_icon" => "dashicons-format-image
      "
   )
   );
   
}

add_action("init", "register_custom_type2"); 

//custom taxonomy
function wpdocs_register_private_taxonomy() {
   

   $args2 = array(
      'label'        => __( 'Hero Category', 'textdomain' ),
      'public'       => true,
      'rewrite'      => true,
      'hierarchical' => true,
      'show_in_rest'      => true
  );
   
  register_taxonomy( 'hero-category', 'hero', $args2 );

  $argsProjects = array(
   'label'        => __( 'Project Category', 'textdomain' ),
   'public'       => true,
   'rewrite'      => true,
   'hierarchical' => true,
   'show_in_rest'      => true
);

register_taxonomy( 'project-category', array('projects', 'services'), $argsProjects );
}
add_action( 'init', 'wpdocs_register_private_taxonomy', 0 );