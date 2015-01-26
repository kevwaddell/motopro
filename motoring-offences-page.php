<?php 
/*
Template Name: Motoring Offences list page template
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
$contact_page = get_page_by_title('Request a Callback');
$classes = array('mag-bot-30');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');
 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/child-vars.php'); ?>

	<div class="col-md-8">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
			
			<!-- Quick Links -->
			<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/quick-links.php'); ?>
			<!--Quick Links end  -->
			
		</article>
		
	</div>
	
	<!-- Sidebar -->
	<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/sidebar.php'); ?>
	<!--Sidebar end  -->
			
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<!-- Social Share buttons -->
<?php include (STYLESHEETPATH . '/_/inc/global/share-btns.php'); ?>
<!--Social Share buttons   -->

<?php get_footer(); ?>
