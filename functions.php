<?php 

function WP_kontakt_new_customize_register( $wp_customize ) {



}
//add_action('customize_register', 'Theme_YP_customize_register');

  
  //add_action('pre_get_posts','custom_post_type_cat_filter');


function HWL_page_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());																//підключення стилів
	//wp_enqueue_script('script-name', get_template_directory_uri() ) . '/js/exameple.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery' );   						//підключення скриптів
  wp_enqueue_script('script-js', get_template_directory_uri() . '/js/main.js', array(), null, true);					//підключення скриптів
}



add_action ('wp_enqueue_scripts', 'HWL_page_scripts')

?>
