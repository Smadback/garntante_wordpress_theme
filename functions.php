<?php

/* */
function garntante_script_enqueue() {
  /* CSS */
  wp_enqueue_style('materialize', get_template_directory_uri() . '/css/materialize.min.css', array(), '0.97.5', 'all');
  wp_enqueue_style('responsiveslides', get_template_directory_uri() . '/css/responsiveslides.min.css', array(), '1.5.4', 'all');
  wp_enqueue_style('material-icons', 'http://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.5.4', 'all');
  wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', array(), '1.5.4', 'all');
  wp_enqueue_style('garntante', get_template_directory_uri() . '/css/garntante.css', array(), '1.0.0', 'all');

  /* Javascript */
  wp_enqueue_script('jquery');
  wp_enqueue_script('init', get_template_directory_uri(). '/js/init.js', array(), '1.0.0', true);
  wp_enqueue_script('materialize', get_template_directory_uri(). '/js/materialize.min.js', array(), '0.97.5', true);
  wp_enqueue_script('responsiveslides', get_template_directory_uri(). '/js/responsiveslides.min.js', array(), '1.54', true);
  wp_enqueue_script('googlemaps', get_template_directory_uri(). '/js/googlemaps.js', array(), '1.0.0', true);
  wp_enqueue_script('garntante', get_template_directory_uri(). '/js/garntante.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'garntante_script_enqueue');

/* Setup the theme */
function garntante_theme_setup() {
  add_theme_support('menus');
  add_theme_support('post-formats', array('aside', 'image', 'video'));

  /* register custom menus */
  register_nav_menu('header_nav', 'Navigationsleiste');
  register_nav_menu('mobile_nav', 'Navigation für Mobilgeräte');
  register_nav_menu('footer_nav', 'Fußzeile');
}
add_action('init', 'garntante_theme_setup');
