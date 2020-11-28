<?php /* Template Name: Home page */ ?>
<?php get_header();
// SEKCIJA INTRO
query_posts(array(
   'post_type' => 'intro'
));
?>
<div class="container-fluid about-section featured-image">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail(); ?>
      <div class="g-container title-holder">
          <h1><?php the_title(); ?></h1>
      </div>
    <?php endwhile; ?>
</div>
<!-- SEKCIJA USLUGE - NAVIGACIJA -->
<?php query_posts(array(
   'post_type' => 'menu',
));
?>
<div class="menu-section clearfix">
  <div class="container-fluid">
    <h2>Usluge</h2>
    <div class='custom-wrapper clearfix'>
    <?php while (have_posts()) : the_post();
      $link = get_field( "item_link" );
    ?>
      <a href=<?php echo $link; ?> class="four-item menu-item">
        <div class="link-wrapper">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="icon d-flex align-items-center">
          <?php
            $icon = get_field( "image_icon" );
                if( $icon ) {
                  echo '<i class=" ' . $icon . '"></i>';
                } else {
                  echo '';
                }
           ?>
        </div>
        <div class="more">
          <span class=custom-btn>Pogledaj više</span>
        </div>
      </a>
    <?php endwhile; ?>
    </div>
    </div>
</div>
<?php query_posts(array(
   'post_type' => 'inspection',
));
?>
<!-- SEKCIJA  SLIKA BR 2 -->
<div class="container-fluid about-section featured-image">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail(); ?>
      <div class="g-container title-holder">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
</div>
<!-- SEKCIJA NAJNOVIJE VESTI -->
<?php
query_posts(array(
   'post_type' => 'post',
   'category' => 'Blog',
   'slug' => 'blog',
   'posts_per_page' =>'4'
));
?>
<div class="container-fluid blog-section">
  <div class="g-container">
    <h2>Najnovije vesti</h2>
    <div class='mb-5 clearfix'>
      <?php while (have_posts()) : the_post(); ?>
            <div class="half-item single-post d-flex">
              <a href="<?php the_permalink(); ?>">
                <div class="title">
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class='post-content'>
                  <p class="date"> <i class="far fa-calendar-alt"></i><?php echo get_the_date( 'F, j Y', $postData[0]->ID ); ?></p>
                  <p><?php echo substr(get_the_excerpt(), 0, 100) . '...'; ?></p>
                    <span class="read-more">Pročitajte više <i class="fas fa-chevron-right"></i></span>
                </div>
              </a>
            </div>
      <?php endwhile; ?>
    </div>
    <a class="custom-btn" href="/category/blog/">Pogledajte sve akcije</a>
  </div>
</div>
<!-- SEKCIJA NAJNOVIJI PROIZVODI -->
<?php
query_posts(array(
   'post_type' => 'product',
   'posts_per_page' =>'4'
));
?>
<div class="container-fluid shop-section clearfix">
  <div class="g-container">
    <h2>Najnoviji proizvodi</h2>
    <div class='clearfix products'>
      <?php while (have_posts()) : the_post(); ?>
            <div class="four-item single-post single-product">
              <a href="<?php the_permalink(); ?>">
                <div class="imageHolder d-flex align-items-center justify-content-center">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="title clearfix">
                  <h3><?php the_title(); ?></h3>
                  <span class="custom-btn m-0">Detaljnije<i class="fas fa-chevron-right"></i></span>
                </div>

              </a>
            </div>
      <?php endwhile; ?>
    </div>
    <a class="custom-btn shop" href="/auto-delovi/">Pogledajte sve proizvode</a>
  </div>
</div>
<?php get_footer(); ?>
