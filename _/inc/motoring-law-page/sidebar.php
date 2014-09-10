<?php 
$packages_pg = get_page_by_title("Packages");
$packages_pg_content = $packages_pg->post_content;
$packages_txt = get_field('package_text');
$packages = get_pages('sort_column=menu_order&child_of='.$packages_pg->ID);

//echo '<pre>';print_r($packages_pg);echo '</pre>';
?>
<div class="fee-info-box">
	<h3>Our <?php echo $packages_pg->post_title; ?></h3>
	
	<?php if ($packages_txt) { ?>
	<?php echo $packages_txt; ?>
	<?php } ?>
	
	<?php if ($packages) { ?>
	<ul class="packages list-unstyled">
		<?php foreach ($packages as $package) { 
		$color = get_field('colour', $package->ID);
		$package_name = get_field('package_name', $package->ID);	
		?>
		<li>
			<a href="<?php echo get_permalink($package->ID); ?>" title="<?php echo $package->post_title; ?>" class="col-<?php echo $color; ?>">
				<span class="link-icon"><span class="icon-inner"></span></span>
				<span class="tag"><?php bloginfo('name'); ?></span><span class="name"><?php echo $package_name; ?></span>
			</a>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
</div>

<div class="side-action-btns">		
<?php 
$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');

if (!empty($sb_links)) { ?>
		
	<?php foreach ($sb_links as $link) { ?>
	<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
	<?php } ?>
		
	<?php }  ?>
	
	<?php if ($brochure_link) { 
	$brochure_download = get_field('global_brochure_download', 'option');	
	?>
	<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
	<?php }  ?>
</div>
