<?php
/*
* Template Name: Contact page template
* Template Post Type: page
*/
get_header();?>
<div class='custom-container g-container'>
	<div class='row align-items-center'>
	<?php while (have_posts()) : the_post(); ?>
			<div class="contact-form col-lg-6 col-md-12">
				<h1><?php the_title(); ?></h1>
				<div class="clearfix">
					<?php the_content(); ?>
				</div>
			</div>
	<?php endwhile; ?>
	<?php query_posts(array(
	   'post_type' => 'maps'
	)); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="google-map col-lg-6 col-md-12">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
