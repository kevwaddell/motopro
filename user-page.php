<?php 
/*
Template Name: User page
*/
 ?>

<?php get_header('user'); ?>

<!-- MAIN CONTENT START -->

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

<div class="wrap-center">	
	<?php the_content(); ?>
</div>
			
<?php endwhile; ?>
<?php endif; ?>

<!-- MAIN CONTENT END -->

<?php get_footer('user'); ?>
