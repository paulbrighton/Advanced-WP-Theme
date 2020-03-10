<?php get_header(); ?>

<div class="container content sticky-footer">
  <div class="main block">
    <h1 class="page-header">
      <?php
      if (is_category()) {
        single_cat_title();
      } else if (is_author()) {
        the_post();
        echo 'Archives By Author: ' . get_the_author();
        rewind_posts();
      } else if (is_tag()) {
        single_tag_title();
      } else if (is_day()) {
        echo 'Archives By Day: ' . get_the_date();
      } else if (is_month()) {
        echo 'Archives By Month: ' . get_the_date('F Y');
      } else if (is_year()) {
        echo 'Archives By Year: ' . get_the_date('Y');
      } else {
        echo 'Archives';
      }
      ?>
    </h1>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="archive-post">
          <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
          <p>Posted on <?php the_time('F j, Y g:i a'); ?></p>
        </div>
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