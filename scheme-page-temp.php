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
$contact_page = get_page_by_title("Request a Callback");
 ?>

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>			
		</article>
		
		<?php if (!empty($ds_services)) { 
		$box_title = get_field('ds_box_title');	
		//echo '<pre>';print_r($ds_services);echo '</pre>';
		?>
		
		<section class="discounts-box">
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
	
	<?php
$brochure_download = get_field('brochure_download');
//echo '<pre>';print_r($brochure_download);echo '</pre>';
 ?>

<div class="actions">

	<?php if (empty($brochure_download)) { ?>
		
		<a href="<?php echo get_permalink($contact_page->ID); ?>?service=<?php echo urldecode($post->post_title); ?>&package=<?php echo $package_name; ?>#callback-request" class="link-btn icon-btn col-red"><i class="fa fa-phone fa-lg"></i>Request a Callback</a>
		
	<?php } else { ?>
	
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_permalink($contact_page->ID); ?>?service=<?php echo urldecode($post->post_title); ?>&package=<?php echo $package_name; ?>#callback-request" class="link-btn icon-btn col-red"><i class="fa fa-phone fa-lg"></i>Request a Callback</a>
		</div>
		
		<div class="col-md-6">
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
		</div>
	</div>
	
	<?php } ?>
	
	
</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
