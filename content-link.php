<article class="post post-link">
  <div class="well">
    <?php $the_content = wp_strip_all_tags(get_the_content()); ?>
    <a href="<?php echo get_the_content(); ?>"><?php echo the_title(); ?></a>
  </div>
</article>