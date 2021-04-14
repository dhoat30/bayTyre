<?php 
 //add nav menu
 function baytyre_config(){ 
    register_nav_menus( 
       array(
          "baytyre_main_menu" => "Baytyre Main Menu"
       )
       );  

       add_theme_support( "title-tag");

   
         
  }
 
  add_action("after_setup_theme", "baytyre_config", 0);
?>