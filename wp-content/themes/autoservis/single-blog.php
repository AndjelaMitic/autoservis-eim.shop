<?php
/*
 * Template Name: Blog
 * Template Post Type: post
 */
get_header();  ?>
<div class="g-container post-view">

 <?php  ?>
     <div class="single-post">
       <div class="single-post-view blog">
         <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
           <h1><?php the_title(); ?></h1>
           <p class="date"> <i class="far fa-calendar-alt mr-2"></i><?php echo get_the_date( 'F, j Y', $postData->ID ); ?></p>
         </div>
           <div class="post-content">
             <?php the_content(); ?>
           </div>
           <?php endwhile; ?>
         <?php endif; ?>
       </div>
       </div>
</div>
<?php get_footer(); ?>
