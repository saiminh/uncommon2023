<?php

if ( ! function_exists( 'uncommon2023' ) ) :
  function uncommon2023()  {
    // Adding support for core block visual styles.
    add_theme_support( 'wp-block-styles' );
    // Enqueue editor styles.
    // add_editor_style( 'style-editor.css' );
  }
  add_action( 'after_setup_theme', 'uncommon2023' );
endif;

function uncommon2023_scripts() {
  wp_enqueue_style( 'uncommon2023-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
  wp_enqueue_script( 'header', get_template_directory_uri().'/assets/js/index.js', array(), false, true );

  // Enqueue JS only for certain pages
  // ––––––––––––––––––––––––––––––––
  // global $post;
  // if( $post && strpos( $post->post_content, 'peak-faq' ) !== false) {
  //   wp_enqueue_script( 'faqs', get_template_directory_uri().'/assets/js/faqs.min.js', array(), false, true );
  // }
  // if( is_home() || is_archive() || is_search() ) {
  //   wp_enqueue_script( 'faqs', get_template_directory_uri().'/assets/js/cat-filter.min.js', array(), false, true );
  // }
}
add_action( 'wp_enqueue_scripts', 'uncommon2023_scripts' );

require_once get_template_directory() . '/inc/remove-comments.php';
require_once get_template_directory() . '/inc/image-sizes.php';
require_once get_template_directory() . '/inc/custom-post-template.php';
require_once get_template_directory() . '/inc/cleanup-frontend-code.php';

add_action('admin_head', 'admin_styles');
function admin_styles() {
    echo '<link rel="stylesheet" href="'. get_stylesheet_directory_uri() . '/style-editor.css" type="text/css" media="all" />';
}