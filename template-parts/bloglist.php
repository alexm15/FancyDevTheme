<article <?php post_class("content_section post_item"); ?> id="post-<?php the_ID(); ?>">


  <h1><a href="<?php the_permalink(); ?>"><?=the_title();?></a></h1>
  <small class="post_item__description"><span><?=get_the_date(); ?></span><?=the_category( $separator = '', $parents = '', $post_id = false );?></small>
  <?php the_tags( $before = '<span class="post_tag">', "</span><span class='post_tag'>", $after = '</span>' ) ?>
  <?php if( has_post_thumbnail() ): ?>
		<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
	<?php endif; ?>
  <br>
  <p><?=the_excerpt();?></p>
  <a href="<?php the_permalink();?>" class="btn btn_primary">Read More</a>
</article>
