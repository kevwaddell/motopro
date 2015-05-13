<?php 
/*
Template Name: Service page template
*/
?>

<?php get_header(); ?>

<?php if (has_post_thumbnail()) { ?>
<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-sml.php'); ?>
<?php } else { ?>
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php');?>
<?php }  ?>

<!-- Container  -->
<div class="container">
	
	<div class="row">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php 
$legal_procedures = get_field('ml_legal_procedures');
//echo '<pre>';print_r($legal_procedures);echo '</pre>';
 ?>

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
			
			<!-- Quick Links -->
			<?php include (STYLESHEETPATH . '/_/inc/service-page-single/quick-links.php'); ?>
			<!--Quick Links end  -->
			
		</article>
						
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/service-page-single/sidebar.php'); ?>
	</aside>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
