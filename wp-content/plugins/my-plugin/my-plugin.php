<?php
/**
 * @package My_Plugin
 * @version 1.6
 */
/*
Plugin Name: My Plugin
Plugin URI: https://github.com/okiloco/
Description: My primer Plugin en Wordpress.
Author: Fabian Vargas
Version: 1.0.0
Author URI: https://github.com/okiloco
*/

function social_links($attrs){
    
    $social_links = array(
        "facebook"=>"http://facebook.com",  
        "twitter"=>"https://twitter.com" , 
        "google"=>"http://plus.google.com"  
    );
    
    $args = shortcode_atts($social_links,$attrs);
    $socials = "<a href='".$args["facebook"]."'>Facebook<a/>  <a href='".$args["twitter"]."'>Twitter<a/> <a href='".$args["google"]."'>Google<a/>";
    return $socials;
    
}

add_shortcode("social_links","social_links");

?>
