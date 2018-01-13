<?php
//init Theme
wp_enqueue_script( 'jquery3.2.1', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true );
//Fonts Awesome
wp_enqueue_style( 'awesomecss', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css',false,'4.7.0','all');
//Materialize
function materialize_scripts() {
	wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/assets/materialize/css/materialize.css',false,'0.100.2','all');
	wp_enqueue_script( 'materializejs', get_template_directory_uri() . '/assets/materialize/js/materialize.min.js', array(), '20141010', true );
}
add_action( 'wp_enqueue_scripts', 'materialize_scripts' );
//default style
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );
//feature image post
add_theme_support( 'post-thumbnails' );
//menus
register_nav_menus( array(
	'top_menu' => 'القائمة العلوية',
	'main_menu' => 'القائمة الرئيسية',
  'footer_menu' => 'القائمة السفلى',
) );



 ?>
