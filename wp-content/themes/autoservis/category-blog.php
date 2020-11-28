<?php get_header(); ?>
<div class="g-container blog-section archive">
    <h2>Blog</h2>
    <div class="row no-gutters">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="category-single-post single-post half-item">
        <a href="<?php the_permalink(); ?>">
          <div class="title">
            <h3><?php the_title(); ?></h3>
          </div>
          <div class="post-content">
            <p class="date"> <i class="far fa-calendar-alt"></i><?php echo get_the_date( 'F, j Y', $postData[0]->ID ); ?></p>
            <p><?php echo substr(get_the_excerpt(), 0, 150) . '...'; ?></p>
            <span class="read-more">Pročitajte više <i class="fas fa-chevron-right"></i></span>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
