<article <?php post_class("content_section post_item"); ?> id="post-<?php the_ID(); ?>">
  <h1><?=the_title();?></h1>
  <small class="post_item__description"><span><?=get_the_date(); ?></span><?=the_category( $separator = '', $parents = '', $post_id = false );?></small>
  <?php the_tags( $before = '<span class="post_tag">', "</span><span class='post_tag'>", $after = '</span>' ) ?>
  <hr>
  <br>
  <p><?=the_content();?></p>
</article>
