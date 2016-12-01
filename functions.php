<?php
//register Nav Walker class_alias
require_once('wp_bootstrap_navwalker.php');

// Theme support
function wpb_theme_septup(){
  add_theme_support('post-thumbnails');
  // nav menu support
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
  //Post Formats
  add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'wpb_theme_septup');

//Excerpt Length control

function set_excerpt_length() {
  return 50;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'description' => 'Sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'description' => 'Box',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'description' => 'Box',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'description' => 'Box',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'wpb_init_widgets');

//Customiser File
require get_template_directory(). '/inc/customizer.php';
