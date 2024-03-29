<?php

function theme_enqueue_styles() {
  $parenthandle = 'twentyfifteen-style';
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
      array(),
      $theme->parent()->get('Version')
  );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
      array( $parenthandle ),
      $theme->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function twentyfifteen_blachniet_scripts(){

  // highlight.js
  wp_enqueue_style( 'highlightjs-github-style', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/github-dark-dimmed.min.css', array(), '8.4' );
  wp_enqueue_script( 'highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js', array(), '8.4', true );

}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_blachniet_scripts' );

register_nav_menus( array(
  'footer' => __( 'Footer Menu', 'twentyfifteen' )
));

?>
