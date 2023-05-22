<?php

function uncommon_add_image_sizes() {
  add_image_size( 'square-xs', 320, 320, true );
  add_image_size( 'square-s', 480, 480, true );
  add_image_size( 'square', 640, 640, true );
  add_image_size( 'square-l', 720, 720, true );
  add_image_size( 'square-xl', 1080, 1080, true );
  add_image_size( 'square-xxl', 1280, 1280, true );
  add_image_size( 'square-xxl', 1620, 1620, true );
  add_image_size( 'rectangle-portrait-xs', 240, 320, true );
  add_image_size( 'rectangle-portrait-s', 320 , 430, true );
  add_image_size( 'rectangle-portrait', 480, 640, true );
  add_image_size( 'rectangle-portrait-l', 720, 960, true );
  add_image_size( 'rectangle-portrait-xl', 960, 1280, true );
  add_image_size( 'rectangle-portrait-xxl', 1440, 1920, true );
  add_image_size( 'rectangle-landscape-xs', 320, 240, true );
  add_image_size( 'rectangle-landscape-s', 430, 320, true );
  add_image_size( 'rectangle-landscape', 640, 480, true );
  add_image_size( 'rectangle-landscape-l', 960, 720, true );
  add_image_size( 'rectangle-landscape-xl', 1280, 960, true );
  add_image_size( 'rectangle-landscape-xxl', 1920, 1440, true );
}
add_action('after_setup_theme', 'uncommon_add_image_sizes');

function uncommon_custom_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'square' => __( 'Square for Homepage Header' ),
    'rectangle-portrait-s' => __( 'Rectangle Portrait 1/4' ),
    'rectangle-portrait' => __( 'Rectangle Portrait 1/3' ),
    'rectangle-portrait-l' => __( 'Rectangle Portrait 1/2' ),
    'rectangle-landscape-s' => __( 'Rectangle Landscape 1/4' ),
    'rectangle-landscape' => __( 'Rectangle Landscape 1/3' ),
    'rectangle-landscape-l' => __( 'Rectangle Landscape 1/2' ),
    'rectangle-landscape-xl' => __( 'Rectangle Landscape 1/1' ),
  ) );
}

add_filter( 'image_size_names_choose', 'uncommon_custom_sizes' );

function my_content_image_sizes_attr( $sizes, $size, $image_src, $image_meta, $attachment_id ) {
  $width = $size[0];
  $height = $size[1];
  
  //square for homepage header
  if ( $width == 640 && $height == 640 ) {
    $sizes = '(min-width: 600px) 33vw, 75vw';
  }  
  //rectangle portrait 1/2
  if ( $width == 720 && $height == 960 ) {
    $sizes = '(min-width: 600px) 50vw, 90vw';
  }  
  //rectangle portrait 1/3
  if ( $width == 480 && $height == 640 ) {
    $sizes = '(min-width: 600px) 30vw, 90vw';
  }  
  //rectangle portrait 1/4
  if ( $width == 320 && $height == 240 ) {
    $sizes = '(min-width: 600px) 24vw, 90vw';
  }  
  //rectangle landscape 1/1
  if ( $width == 1280 && $height == 960 ) {
    $sizes = '(min-width: 600px) 95vw, 90vw';
  }  
  //rectangle landscape 1/2
  if ( $width == 960 && $height == 720 ) {
    $sizes = '(min-width: 600px) 50vw, 90vw';
  }  
  //rectangle landscape 1/3
  if ( $width == 640 && $height == 480 ) {
    $sizes = '(min-width: 600px) 30vw, 90vw';
  }  
  //rectangle landscape 1/4
  if ( $width == 240 && $height == 320 ) {
    $sizes = '(min-width: 600px) 24vw, 90vw';
  }  
  return $sizes;
}

add_filter( 'wp_calculate_image_sizes', 'my_content_image_sizes_attr', 10, 5 );

