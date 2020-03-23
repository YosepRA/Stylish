<?php

function setup()
{
  // CSS
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'));

  // JS
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
  wp_register_script('popper', 'https://unpkg.com/@popperjs/core@2', array(), null, true);
  wp_register_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
  wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/da8b41aad6.js');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick'), null, true);
}
add_action('wp_enqueue_scripts', 'setup');

function init()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'init');

function custom_excerpt_length($length)
{
  return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Remove certain comment field.
function remove_website_field($fields)
{
  unset($fields['url']);
  unset($fields['cookies']);
  return $fields;
}
add_filter('comment_form_fields', 'remove_website_field');

// Filter to move comment field to bottom.
function prefix_move_comment_field_to_bottom($fields)
{
  $comment_field = $fields['comment'];
  unset($fields['comment']);
  $fields['comment'] = $comment_field;

  return $fields;
}
add_filter('comment_form_fields', 'prefix_move_comment_field_to_bottom', 10, 1);
