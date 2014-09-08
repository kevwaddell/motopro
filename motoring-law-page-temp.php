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

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
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

<?php get_footer(); ?>
