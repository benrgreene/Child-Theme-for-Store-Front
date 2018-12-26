<?php

add_action( 'init' , function() {
  // Remove all filters/actions we don't want
  include 'core/remove.php';
});
  
// These are our custom actions/filters
include 'core/actions.php';
include 'core/filters.php';