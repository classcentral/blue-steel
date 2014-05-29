<?php
/**
 * Custom functions
 */

// Banner image sizes
add_image_size( 'blog-banner-full', 1600, 600, true );

// Thumbnail image sizes
add_image_size( 'blog-thumbnail', 400, 265, true );

/*
add_filter( 'mrw_mce_text_style', 'mrw_add_text_styles_example' );
function mrw_add_text_styles_example( $styles ) {
  $new_styles = array(
    array(
      'title' => "Blockquote",
      'selector' => 'blockquote',
      'classes' => 'test'
    ),
  );
  return array_merge( $styles, $new_styles );
}
*/
