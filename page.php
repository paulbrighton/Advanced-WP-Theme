<?php get_header(); ?>

<div class="container content sticky-footer">
  <div class="main block">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="page">
          <?php if (page_is_parent() || $post->post_parent > 0) : ?>
            <nav class="nav sub-nav">
              <ul>
                <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a></span>
                <?php
                $args = array(
                  'child_of' => get_top_parent(),
                  'title_li' => ''
                );
                ?>
                <?php wp_list_pages($args); ?>
              </ul>
            </nav>
            <div class="clr"></div>
          <?php endif; ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, there are no posts to view yet.') ?>
    <?php endif; ?>
  </div>

  <div class="side">
    <div class="block">
      <h3>Sidebar Head</h3>
      <p>Duis tellus risus, convallis ac mi in, varius pharetra lacus. Nunc bibendum vel urna at fringilla. Morbi varius, urna vel varius posuere, libero velit ultricies dui, nec convallis urna turpis et metus.</p>
      <a class="button">More</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>