<?php

// Add our copyright message
add_action( 'storefront_after_footer', 'brg_add_copyright_footer', 25 );
function brg_add_copyright_footer() {
  include get_stylesheet_directory() . '/templates/partials/copyright.php';
}

add_action( 'storefront_single_post', 'brg_add_post_meta', 20 );
add_action( 'storefront_loop_post', 'brg_add_post_meta', 20 );
function brg_add_post_meta() {
  include get_stylesheet_directory() . '/templates/partials/post-meta.php';
}

add_action( 'wp_enqueue_scripts', 'brg_add_theme_styles' );
function brg_add_theme_styles() {
  wp_enqueue_style( 'child-theme-styles', get_stylesheet_directory_uri() . '/assets/styles/child.css' );
}

// Switch out the product zoom for the lightbox
add_action( 'after_setup_theme', 'brg_product_lightbox', 20 );
function brg_product_lightbox() {
  remove_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}