<?php 
$premium_fees_pg = get_page_by_title('Premium Legal Service');
$standard_fees_pg = get_page_by_title('Standard Legal Service');
$packages_txt = get_field('package_text');
$form = get_field('sb_form');

$include = array($premium_fees_pg->ID, $standard_fees_pg->ID);
$fees_args = array (
'sort_column'	=> 	'menu_order',
'include'	=> $include
);
$fees = get_pages($fees_args);

//echo '<pre>';print_r($form);echo '</pre>';
?>

<?php if ($form) { ?>
<div class="form-box">
	<h3>Request a call back</h3>
	
	<?php gravity_form($form->id, false, true, false, null, true); ?>
		
</div>
<?php } ?>

<div class="fee-info-box">
	<h3>Our Fees</h3>
	
	<?php if ($packages_txt) { ?>
	<?php echo $packages_txt; ?>
	<?php } ?>
	
	<?php if ($fees) { ?>
	<ul class="packages list-unstyled">
		<?php foreach ($fees as $fee) { 
		$service_title = get_field('service_title', $fee->ID);		
		?>
		<li>
			<a href="<?php echo get_permalink($fee->ID); ?>" title="<?php bloginfo('name'); ?> <?php echo $fee->post_title; ?>" class="col-grey">
				<span class="link-icon"><span class="icon-inner"></span></span>
				<span class="tag"><?php bloginfo('name'); ?></span><span class="name"><?php echo $service_title; ?></span>
			</a>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
</div>