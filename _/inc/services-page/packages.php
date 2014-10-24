<?php 
$packages_page = get_page_by_title('Packages');
$packages_args = array(
'sort_column' => 'menu_order',
'parent' => $packages_page->ID,
'post_type' => 'page'
);
$packages = get_pages($packages_args);
$brochure_download = get_field('global_brochure_download', 'option');
//echo '<pre>';print_r($packages);echo '</pre>';
 ?>
<section id="home-packages" class="home-panel">

	<h3 class="text-center"><span>Our <?php echo $packages_page->post_title; ?></span></h3>
	
	<div class="package-links"<?php echo (empty($brochure_download)) ? ' style="margin-bottom: 0px"' : ''; ?>>
		<div class="row">
		
			<?php foreach ($packages as $package) { 
			$name = get_field('package_name', $package->ID);
			$color = get_field('colour', $package->ID);
			?>
			
			<div class="col-md-4">
				<a href="<?php echo get_permalink($package->ID); ?>" title="<?php echo $package->post_title; ?>" class="col-<?php echo $color; ?>">
					<span class="icon"><span class="icon-inner"></span></span>
					<span class="title"><?php bloginfo('name'); ?><span><?php echo $name; ?></span></span>
					<span class="link"><span class="hidden-xs hidden-sm">Package details</span><i class="fa fa-angle-right"></i></span>
				</a>	
			</div>
			
			<?php } ?>
		
		
		</div>
	</div>
	
	<?php if (!empty($brochure_download)) { ?>
		
		<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn col-red"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>

	<?php } ?>
	
</section>