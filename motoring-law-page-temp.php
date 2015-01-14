<?php 
/*
Template Name: Motoring Law page template
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
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
			
			<!-- Quick Links -->
			<?php include (STYLESHEETPATH . '/_/inc/motoring-law-page/quick-links.php'); ?>
			<!--Quick Links end  -->
			
			<?php if (!empty($legal_procedures)) { ?>
			<?php if (wp_is_mobile()) { ?>
			<!-- Legal Procedures Mobile -->
			<?php include (STYLESHEETPATH . '/_/inc/motoring-law-page/legal-precedures.php'); ?>
			<!--Legal Procedures end  -->
			<?php } else { ?>
			<!-- Legal Procedures Desktop -->
			<?php include (STYLESHEETPATH . '/_/inc/motoring-law-page/legal-precedures-desktop.php'); ?>
			<!--Legal Procedures end  -->
			<?php } ?>
			<?php } ?>
			
		</article>
						
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/motoring-law-page/sidebar.php'); ?>
	</aside>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<!-- Social Share buttons -->
<?php include (STYLESHEETPATH . '/_/inc/global/share-btns.php'); ?>
<!--Social Share buttons   -->

<?php get_footer(); ?>
