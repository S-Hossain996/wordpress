<?php
  // init template function
  function theme_init(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
//    html 5 support
    add_theme_support('html5');

    add_image_size('post_thumb',600,400,true);

    //register nav-menu
    register_nav_menus(array(
      'header_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'  
      ));
  }

// hook init
add_action('after_setup_theme' , 'theme_init');

//
function add_css_js(){
  // wp enqueue css
  wp_enqueue_style("theme-css", get_stylesheet_uri() ,array('main_style_sheet'), "v_1.0 ");
  wp_enqueue_style("main_style_sheet", get_template_directory_uri().'/css/styles.css', null, "v-1.0.0", "all");

  // wp enqueue js
  wp_enqueue_script('jquery',true);
  wp_enqueue_script("main-js-file", get_template_directory_uri().'/js/scripts.js', array('jquery'), "v-1.0.0", true);
}
add_action('wp_enqueue_scripts','add_css_js');


// widgests registration
function learn_widegts_init(){
  register_sidebar(array(
    'name' => 'main_sidebar',
    'id' => 'sidebar-1',
    'description' => 'this is example description',
    'before_widgets' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
    ));

  register_sidebar(array(
    'name' => 'sidebar_2',
    'id' => 'sidebar-2',
    'description' => 'this is example description 2',
    'before_widgets' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'learn_widegts_init');


//custom post registration
function custom_post_init(){
  register_post_type('learning',array(
    'labels' => array(
      'name' => 'Test Post',
      'menu_name' => 'Custom Posts',
      'all_items' => 'All Posts',
      'add_new_item' => 'Add New post'
      ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments', 'custom-fields')
    ));
}

add_action('init', 'custom_post_init');