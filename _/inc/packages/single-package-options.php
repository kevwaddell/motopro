<section class="sgl-package-options col-<?php echo $color; ?>">
	
	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
		
			<h3>Package options</h3>
		
			<ul class="list-unstyled">
				
				<?php foreach ($package_options as $option) { 
				//echo '<pre>';print_r($option);echo '</pre>';	
					
				?>
				
				<li><div class="icon"><div class="icon-inner"></div></div><?php echo $option[package_option]->post_title; ?></li>
				
				<?php } ?>
			
			</ul>
			
			<?php if ($location_note) { ?>
			<small><?php echo $location_note; ?></small>
			<?php } ?>
			
			<?php if ($fee_guilty || $fee_not_guilty) { ?>
		
			<div class="fee-box">
			
				<?php if ($fee_guilty) { ?>
				<p>Guilty Plea / Appeal Sentence: <span class="price">&pound;<?php echo $fee_guilty; ?></span></p>
				<?php }  ?>
				
				<?php if ($fee_guilty&&$fee_not_guilty) { ?>
				<span class="rule"></span>
				<?php }  ?>
				
				<?php if ($fee_not_guilty) { ?>
				<p>Not Guilty Plea / Appeal Conviction: <span class="price">&pound;<?php echo $fee_not_guilty; ?></span></p>
				<?php }  ?>
			
			</div>
	
			<?php } ?>
		
		</div>
	
	</div>

</section>

