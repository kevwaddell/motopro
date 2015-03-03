<?php 
/*
Template Name: Taxi Licensing page template
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php //include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php if (has_post_thumbnail()) { ?>
<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-sml.php'); ?>
<?php }  ?>

<!-- Container  -->
<div class="container">

	<div class="row">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			
			<div class="slogan"><span>Trust us with <br>your Taxi license</span></div>
	
			<!-- Quick Links -->
			<?php include (STYLESHEETPATH . '/_/inc/taxi-licensing-page/quick-links.php'); ?>
			<!--Quick Links end  -->
			
		</article>
				
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/taxi-licensing-page/sidebar.php'); ?>
	</aside>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
