<?php 
/*
Template Name: Legal Procedures list template
*/
 ?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

<?php include (STYLESHEETPATH . '/_/inc/packages/legal-procedures-vars.php'); ?>

		<article <?php post_class($classes); ?>>
			
			<h2 class="with-span text-center"><?php bloginfo('name'); ?> <span><?php echo $service_title; ?></span></h2>
			
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
			
			<?php if (!empty($procedures)) { ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/packages/legal-procedures-list.php'); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/packages/legal-procedures-list-mobile.php'); ?>		
			
			<?php include (STYLESHEETPATH . '/_/inc/packages/legal-procedures-info.php'); ?>	
			
			<?php } ?>	
		</section>
		
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<!-- Social Share buttons -->
<?php include (STYLESHEETPATH . '/_/inc/global/share-btns.php'); ?>
<!--Social Share buttons   -->

<?php get_footer(); ?>
