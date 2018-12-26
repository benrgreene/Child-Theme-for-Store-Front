<?php

// Remove default copyright
remove_action( 'storefront_footer', 'storefront_credit', 20 );

// Remove comments
remove_action( 'storefront_single_post_bottom', 'storefront_display_comments', 20 );

// post meta
remove_action( 'storefront_single_post', 'storefront_post_meta', 20 );
remove_action( 'storefront_loop_post', 'storefront_post_meta', 20 );

// remove any filter on archives
add_action( 'loop_start', function() {
  if( apply_filters( 'brg/full-width', false ) ) {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
  }  
});
