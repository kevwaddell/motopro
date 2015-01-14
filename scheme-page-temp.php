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
			
			<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
		</article>
		
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/scheme-page/quick-links.php'); ?>
		<!--Quick Links end  -->
		
		<?php if (!empty($ds_services)) { 
		$box_title = get_field('ds_box_title');	
		//echo '<pre>';print_r($ds_services);echo '</pre>';
		?>
		
		<section class="discounts-box<?php echo (wp_is_mobile()) ? ' mobile-box':''; ?>">
			<h3><span><?php echo $box_title; ?></span></h3>
			<div class="discounts-box-wrap">
			<?php foreach ($ds_services as $service) { ?>
				<div class="db-service">
					<?php if ($service['service_logo']) { 
					
					//echo '<pre>';print_r($service['service_logo']);echo '</pre>';	
					?>
					<img src="<?php echo $service['service_logo']['sizes']['medium']; ?>" width="100" class="fleft" alt="<?php echo ( empty($service['service_logo']['alt'])) ? '': $service['service_logo']['alt']; ?>">
					<?php } ?>
					<span class="service-discount"><?php echo $service['service_discount']; ?></span>
					<span class="service-title"><?php echo $service['service_title']; ?></span>
					<p><?php echo $service['service_txt']; ?></p>
				</div>
			<?php } ?>
			</div>
		</section>
		
		<?php } ?>

				
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/scheme-page/sidebar.php'); ?>
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
