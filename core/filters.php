<?php

/**
 *  Remove all comments
 */
add_filter( 'comments_open', 'brg_comments_open', 30 );
function brg_comments_open( $open ) {
  return false;
}
add_filter( 'get_comments_number', 'brg_get_comments_number', 30, 2 );
function brg_get_comments_number( $count, $id ) {
  return 0;
}

/**
 *  Check if the page should be full width
 */
add_filter( 'brg/full-width', 'brg_is_full_width', 1, 1 );
function brg_is_full_width( $full_width ) {
  if( is_archive() ||
      is_singular( 'product' ) ||
      is_cart() ||
      is_checkout() ||
      is_account_page() ) {
    $full_width = true;
  }
  return $full_width;
}

/**
 *  Set any extra body classes
 */
add_filter( 'body_class', 'brg_body_classes', 50, 1 );
function brg_body_classes( $classes ) {
  if( apply_filters( 'brg/full-width', false ) ) {
    $classes[] = 'full-width';
    while( false !== ($key = array_search('right-sidebar', $classes) ) ):
      unset( $classes[$key] );
    endwhile;
  }
  return $classes;
}