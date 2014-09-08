<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

		<article <?php post_class($classes); ?>>
			<h2 class="with-span text-center"><?php bloginfo('name'); ?> <span><?php the_title(); ?></span></h2>
			
			<div class="entry-txt with-borders">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
		
		<section class="service-options">
				
		</section>
		
		<!-- Services -->
		<?php include (STYLESHEETPATH . '/_/inc/services-page/services.php'); ?>
		<!--Services end  -->
		
		<!-- Packages Links -->
		<?php include (STYLESHEETPATH . '/_/inc/services-page/packages.php'); ?>
		<!--Packages Links end  -->
		
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/packages/quick-links.php'); ?>
		<!--Quick Links end  -->
		
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
