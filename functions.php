<?php
/* enqueu style */
 function add_theme_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,800|Raleway:400,500&display=swap', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );


/* Menyer */
function add_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'add_new_menu' );

/* add support */
add_post_type_support( 'page', 'excerpt' );
