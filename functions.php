<?php
 function add_theme_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/* Menyer */
function add_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'add_new_menu' );
