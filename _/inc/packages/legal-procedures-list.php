<div class="package-list visible-xs">

	<h3>MotoPro Fees</h3>
	
	<div class="list-header">Legal Procedures</div>
	
	<?php foreach ($procedures as $procedure) { ?>
	<div class="package-list-item col-grey">
	
		<h4><?php echo $procedure['lp_name']; ?></h4>
		
		<div class="fee">&pound;<?php echo $procedure['lp_fee']; ?></div>	
		
	</div>
	<?php } ?>

</div>