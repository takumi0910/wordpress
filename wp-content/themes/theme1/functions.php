<?php 
function add_my_files() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . "/style.css" );}
add_action( 'wp_enqueue_scripts', 'add_my_files' );
add_filter( 'show_admin_bar', '__return_false' );

