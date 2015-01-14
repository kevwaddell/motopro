<?php 
$packages_page = get_page_by_title('Premium Legal Service');
$fees_page = get_page_by_title('Standard Legal Service');
$include = array($packages_page->ID,$fees_page->ID);
$fees_args = array(
'sort_column' => 'menu_order',
'include' => $include,
'post_type' => 'page'
);
$fees = get_pages($fees_args);
//echo '<pre>';print_r($packages);echo '</pre>';
 ?>
<section id="fees-panel" class="home-panel">

	<h3 class="text-center"><span>Our Fees</span></h3>
	
	<div class="fee-links">
		<div class="row">
		
			<?php foreach ($fees as $fee) { 
			$service_title = get_field('service_title', $fee->ID);		
			?>
			<div class="col-sm-6">
				<a href="<?php echo get_permalink($fee->ID); ?>" title="<?php echo $fee->post_title; ?>" class="col-grey">
					<span class="icon"><span class="icon-inner"></span></span>
					<span class="title"><?php bloginfo('name'); ?><span><?php echo $service_title; ?></span></span>
				</a>	
			</div>
			
			<?php } ?>
		
		</div>
	</div>
	
</section>