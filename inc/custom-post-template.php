<?php 
/**
 * Add Custom post types and their taxonomies
 *
 * @package uncommon2023
 */

function uncommon2023_post_block_template() {

$post_type_object = get_post_type_object( 'post' );
$post_type_object->template = array(
  array( 'core/group', array(
    'align' => 'wide',
    'className' => 'custom-post-block-template',
    'style' => array(
      'spacing' => array(
        'padding' => array(
          'top' => '0px',
          'right' => '0px',
          'bottom' => '0px',
          'left' => '0px'
        )
      )
    )
  ), array(
    array('core/post-featured-image', array()),
    array( 'core/group', array(
      'style' => array(
        'spacing' => array(
          'padding' => array(
            'top' => 'var:preset|spacing|s',
            'right' => 'var:preset|spacing|s',
            'bottom' => 'var:preset|spacing|s',
            'left' => 'var:preset|spacing|s'
          )
        )
      )
    ), array(
      array('core/button', array(
        'placeholder' => 'Add link and button text',
      ))
    ))
  ) ),
);
}
add_action( 'init', 'uncommon2023_post_block_template');

