<?php 
/*
Template Name: Packages list template
*/
 ?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

<?php include (STYLESHEETPATH . '/_/inc/packages/parent-packages-vars.php'); ?>

		<article <?php post_class($classes); ?>>
			<h1 class="with-span text-center"><?php bloginfo('name'); ?> <span><?php echo $service_title; ?></span></h1>
			
			<div class="entry-txt with-borders">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
						<?php the_content(); ?>
						
						<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
					</div>
				</div>
			</div>
		</article>
		
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/packages/quick-links.php'); ?>
		<!--Quick Links end  -->
		
		<section class="package-options">
			<?php include (STYLESHEETPATH . '/_/inc/packages/package-table.php'); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/packages/packages-list-mobile.php'); ?>			
		</section>
		
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
