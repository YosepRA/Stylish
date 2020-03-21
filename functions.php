<?php

function setup()
{
  // CSS
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'));

  // JS
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), null, true);
  wp_register_script('popper', 'https://unpkg.com/@popperjs/core@2', array(), null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/da8b41aad6.js');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
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
