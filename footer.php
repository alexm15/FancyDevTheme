<footer class="footer">
  <div class="container">
    <p>&copy <?= current_time('Y'); echo " - "; echo bloginfo( $show = 'title' ); ?></p>
    <?php wp_nav_menu(array(
      'theme_location' => 'footer-menu',
      'container_class' => 'footer_nav_container',
      'menu_class' => 'footer_nav_menu'
    )); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
