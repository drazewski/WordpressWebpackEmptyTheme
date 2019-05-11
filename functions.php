<?php
/**
 * Functions and definitions
 *
 * @package WebpackAndWordpress
 */

function theme_scripts() {
  // register webpack stylesheet and js with theme
  wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
  wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/build/app.js' , null , null , true );
}

add_action('wp_enqueue_scripts', 'theme_scripts', 99);