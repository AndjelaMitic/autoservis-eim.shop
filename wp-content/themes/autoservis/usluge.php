<?php
/*
 * Template Name: Usluge
 * Template Post Type: page
 */
get_header();  ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  <div class="featured-image">
    <?php the_post_thumbnail(); ?>
    <div class="title-holder g-container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="g-container service">
    <?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
