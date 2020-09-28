<?php get_header(); ?>
<main class="main_section">
  <div class="container">
    <div class="clearfix">
      <div class="f_right">
        <?php get_sidebar('primary'); ?>
      </div>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php  get_template_part("template-parts/bloglist", get_post_type());?>
        <?php endwhile; ?>
        <?php the_posts_pagination( ) ?>
        <!-- <div class="f_left"><?php //next_posts_link( 'Older posts' ); ?></div>
        <div class="f_right"><?php //previous_posts_link( 'Newer posts' ); ?></div> -->
      <?php else: ?>
        <?=_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
