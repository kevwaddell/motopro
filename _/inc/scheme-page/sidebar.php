<?php  
$sb_box_title = get_field('box_title');
$sb_list = get_field('inc_list');
$sb_price = get_field('sb_price');
$monthly_price = get_field('monthly_cost');
?>

<div class="fee-info-box">
	<h3><?php echo $sb_box_title; ?></h3>
	<ul class="list-unstyled">
		<?php foreach ($sb_list as $item) { ?>
		<li><div class="icon"><div class="icon-inner"></div></div><?php echo $item['list_item']; ?></li>
		<?php } ?>
	</ul>
	<div class="fee-price" style="margin-bottom: 0px;">
		
		<span>Scheme Fee</span>
		<p>&pound;<?php echo $sb_price; ?><small class="caps">Per Annum</small></p>
		<span class="small-price">Less than <strong>&pound;<?php echo $monthly_price; ?></strong> Per Month</span>

	</div>
</div>
