<?php

function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function twentyfifteen_blachniet_scripts(){

  // highlight.js
  wp_enqueue_style( 'highlightjs-github-style', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css', array(), '8.4' );
  wp_enqueue_script( 'highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js', array(), '8.4', true );

}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_blachniet_scripts' );

register_nav_menus( array(
  'footer' => __( 'Footer Menu', 'twentyfifteen' )
));

?>
