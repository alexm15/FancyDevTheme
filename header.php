<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class("page_grid"); ?>>
  <header class="topbar">
    <div class="container">
      <div class="website_title_section">
        <h2><?php bloginfo( $show = 'name' ) ?></h2>
        <small><?php bloginfo( $show = 'description' ) ?></small>
      </div>
      <?php wp_nav_menu(array(
        'theme_location' => 'topbar-menu',
        'container_class' => 'topbar_nav_container',
        'menu_class' => 'topbar_nav_menu'
      )); ?>
    </div>
  </header>
