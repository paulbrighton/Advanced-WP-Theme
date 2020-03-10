<?php get_header(); ?>

<div class="container content sticky-footer">
  <div class="main block">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h2><?php the_title(); ?></h2>
          <p class="meta">
            Posted at
            <?php the_time('F j, Y g:i a'); ?>
            by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>.
            </a>
            Posted In
            <?php
            $categories = get_the_category();
            $seperator = ', ';
            $output     = '';

            if ($categories) {
              foreach ($categories as $category) {
                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . ' </a>' . $seperator;
              }
            }

            echo trim($output, $seperator);
            ?>
          </p>
          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          
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