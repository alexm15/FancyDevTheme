<?php get_header(); ?>
<main class="main_section">
  <div class="container">
    <div class="clearfix">
      <div class="f_right">
        <?php get_sidebar('primary'); ?>
      </div>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php  get_template_part("template-parts/content", get_post_type());?>
          <div class="single_post_nav clearfix">
            <div class="f_left"><?php previous_post_link(); ?></div>
            <div class="f_right"><?php next_post_link(); ?></div>
          </div>
        <?php endwhile; ?>

      <?php else: ?>
        <?=_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
