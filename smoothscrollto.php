<?php
/*
 Plugin Name: SmoothScrollTo
 Plugin URI: http://pigsky.net/smoothscrollto
 Description: This is a very simple and tiny pulgin. It makes your page scrolling more smoothly when you click a link like <a href="#footer">Go Bottom<a/>or any other link.
 			After click, the url in the address bar will not be added the anchor'name.
 Version: 1.0
 Author: Addo Zhang
 Author URI: http://pigsky.net
 */
function register_script(){
	wp_register_script('scrollTo', get_bloginfo('wpurl').'/wp-content/plugins/smoothscrollto/jquery.scrollTo-min.js', false,false);
	wp_register_script('sst', get_bloginfo('wpurl').'/wp-content/plugins/smoothscrollto/sst.js', false,false);
}
function add_script(){
	register_script();
	wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',false,'1.3.2');
	wp_enqueue_script('jquery','1.3.2');
	wp_enqueue_script('scrollTo');
	wp_enqueue_script('sst');
}

add_action('wp_print_scripts','add_script',10);
?>
