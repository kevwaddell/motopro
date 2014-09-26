<?php 
/*
Template Name: Legal Assistance Scheme page template
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

<?php 
$ds_services = get_field('ds_services');

 ?>

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php if (!empty($ds_services)) { 
			$box_title = get_field('ds_box_title');	
			//echo '<pre>';print_r($ds_services);echo '</pre>';
			?>
			
			<section class="discounts-box">
				<h3><?php echo $box_title; ?></h3>
				
				<?php foreach ($ds_services as $service) { ?>
					<div class="db-service">
						<?php if ($service['service_logo']) { 
						
						//echo '<pre>';print_r($service['service_logo']);echo '</pre>';	
						?>
						<img src="<?php echo $service['service_logo']['sizes']['medium']; ?>" width="100" class="fleft" alt="<?php echo ( empty($service['service_logo']['alt'])) ? '': $service['service_logo']['alt']; ?>">
						<?php } ?>
						<span class="service-title"><?php echo $service['service_title']; ?></span>
						<p><?php echo $service['service_txt']; ?></p>
					</div>
				<?php } ?>
			</section>
			
			<?php } ?>
			
		</article>
		
				
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/scheme-page/sidebar.php'); ?>
	</aside>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
