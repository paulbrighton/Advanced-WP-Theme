<?php
// Theme Support
function adv_theme_support() {
  // Featured Image Support
  add_theme_support('post-thumbnails');
  // Nav Menus
  register_nav_menus(array(
    'primary'       =>    __('Primary Menu'),
    'footer'        =>    __('Footer Menu')
  ));

  // Post Format Support
  add_theme_support('post-formats', array( 'aside', 'gallery', 'link' ));
}

add_action('after_setup_theme', 'adv_theme_support');

// Excerpt Length
function adv_set_excerpt_length () {
  return 25;
}

// Change the default excerpt sentence ending [...] to ...
function adv_excerpt_more ($excerpt_more) {
  return '...';
}

add_filter('excerpt_length', 'adv_set_excerpt_length');
add_filter('excerpt_more', 'adv_excerpt_more');