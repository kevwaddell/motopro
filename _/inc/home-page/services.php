<?php 
$services_page = get_page_by_title('Services');
$services_args = array(
'sort_column' => 'menu_order',
'parent' => $services_page->ID,
'post_type' => 'page'
);
$services = get_pages($services_args);
//echo '<pre>';print_r($packages);echo '</pre>';
 ?>
<section id="home-services" class="home-panel">

	<h3 class="text-center"><span>Our <?php echo $services_page->post_title; ?></span></h3>
	
	<div class="row">
	
		<?php foreach ($services as $service) { ?>
		
		<div class="col-sm-6">
			<a href="<?php echo get_permalink($service->ID); ?>" title="<?php echo $service->post_title; ?>">
				<?php if (has_post_thumbnail($service->ID)) { 
				$img_atts = array('class'	=> "img-responsive");
				?>
				<?php echo get_the_post_thumbnail($service->ID, 'service-img', $img_atts ); ?>
				
				<?php }  ?>
				<span class="title"><?php echo $service->post_title; ?></span>
			</a>	
		</div>
		
		<?php } ?>
	
	
	</div>

</section>