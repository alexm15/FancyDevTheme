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
        <?=get_the_posts_pagination(array('class' => 'blog_nav') ) ?>
      <?php else: ?>
        <?=_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
