<?php

/*
=================================
  ENQUEUES
=================================
*/
function fancydev_enqueue_styles() {
  wp_enqueue_style( 'fancycss', $src = get_template_directory_uri() . '/assets/css/fancy.css', $deps = array(), $ver = "1.0.0", $media = 'all' );

  wp_enqueue_script( 'fancyjs', $src = get_template_directory_uri() . '/assets/js/fancy.js', $deps = array('jquery'), $ver = "1.0.0", $in_footer = true );
}
add_action( 'wp_enqueue_scripts', "fancydev_enqueue_styles");


/*
=================================
  NAVIGATION
=================================
*/
function fancydev_register_menus() {
  register_nav_menus(
    array(
      'topbar-menu' => __( 'Header Top Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
add_action( 'init', 'fancydev_register_menus' );

/*
=================================
  SIDEBAR
=================================
*/
function fancydev_register_sidebars() {
  register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'Fancy Dev Theme' ),
        'id'            => 'primary',
        'before_widget' => '<aside id="%1$s" class="widget %2$s widget_primary">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'fancydev_register_sidebars' );

/*
=================================
  THEME SUPPORTS
=================================
*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

require get_template_directory() . '/inc/fancy_dev_walker.php';
