<div class="package-list visible-xs">

	<h3>Package Options</h3>
	
	<?php foreach ($packages as $package) { 
	$name = get_field('package_name', $package->ID);
	$color = get_field('colour', $package->ID);
	$package_options = get_field('package_options', $package->ID);
	$fee_guilty = get_field('fee_guilty', $package->ID);
	$fee_not_guilty = get_field('fee_not_guilty', $package->ID);
	?>
	<div class="package-list-item col-<?php echo $color; ?>">
	
		<h4><div class="icon"><div class="icon-inner"></div></div><?php bloginfo('name'); ?><span> <?php echo $name; ?></h4>
		
		<ul class="list-unstyled">
			<?php foreach ($package_options as $option) { ?>
			<li><div class="icon"><div class="icon-inner"></div></div><?php echo $option[package_option]->post_title; ?></li>
			<?php } ?>
		</ul>
		
		<div class="fee-box">
			
			<?php if ($fee_guilty) { ?>
			<p>Guilty Plea / Appeal Sentence: <span class="price">&pound;<?php echo $fee_guilty; ?></span></p>
			<?php }  ?>
			
			<span class="rule"></span>
			
			<?php if ($fee_not_guilty) { ?>
			<p>Not Guilty Plea / Appeal Conviction: <span class="price">&pound;<?php echo $fee_not_guilty; ?></span></p>
			<?php }  ?>
			
		</div>
		
		<a href="<?php echo get_permalink($package->ID); ?>" title="View <?php echo $package->post_title; ?> Package">Package Details <i class="fa fa-angle-right"></i></a>
	
	</div>
	<?php } ?>
	
	<div class="message">
		<small><?php echo $location_note; ?></small>
	</div>
	
			
	<?php if ($extra_note) { ?>
	<div class="extra-note"><?php echo $extra_note; ?></div>
	<?php }  ?>

</div>