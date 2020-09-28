<?php get_header(); ?>
<?php get_template_part('parts/head-page'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container" style="min-height : 50vh;">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
