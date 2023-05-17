<?php

function uncommon_add_image_sizes() {
  add_image_size( 'square-xs', 320, 320, true );
  add_image_size( 'square-s', 480, 480, true );
  add_image_size( 'square', 640, 640, true );
  add_image_size( 'square-l', 720, 720, true );
  add_image_size( 'square-xl', 1080, 1080, true );
  add_image_size( 'square-xxl', 1280, 1280, true );
  add_image_size( 'square-xxl', 1620, 1620, true );
}
add_action('after_setup_theme', 'uncommon_add_image_sizes');

function uncommon_custom_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'square' => __( 'Square for Homepage Header' ),
  ) );
}

add_filter( 'image_size_names_choose', 'uncommon_custom_sizes' );

function my_content_image_sizes_attr( $sizes, $size, $image_src, $image_meta, $attachment_id ) {
  $width = $size[0];
  $height = $size[1];
  
  //square for homepage header
  if ( $width == 640 && $height == 640 ) {
    $sizes = '(min-width: 600px) 40vw, 81vw';
  }  
  return $sizes;
}

add_filter( 'wp_calculate_image_sizes', 'my_content_image_sizes_attr', 10, 5 );

