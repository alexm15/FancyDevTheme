<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
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
        'menu_class' => 'topbar_nav_menu',
        'walker' => new Fancy_dev_walker()
      )); ?>
    </div>
  </header>
