<?php  
$sb_box_title = get_field('box_title');
$sb_list = get_field('inc_list');
$sb_price = get_field('sb_price');
$monthly_price = get_field('monthly_cost');
$form = get_field('sb_form');
//echo '<pre>';print_r($form);echo '</pre>';
?>

<?php if ($form) { ?>
<div class="form-box">
	<h3>Sign up today</h3>
	
	<?php gravity_form($form->id, false, true, false, null, true); ?>
		
</div>
<?php } ?>

<div class="fee-info-box">
	<h3><?php echo $sb_box_title; ?></h3>
	<ul class="list-unstyled">
		<?php foreach ($sb_list as $item) { ?>
		<li><div class="icon"><div class="icon-inner"></div></div><?php echo $item['list_item']; ?></li>
		<?php } ?>
	</ul>
	<div class="fee-price">
		
		<span>Scheme Fee</span>
		<p>&pound;<?php echo $sb_price; ?><small class="caps">Per Annum</small></p>
		<span class="small-price">Or <strong>&pound;<?php echo $monthly_price; ?></strong> Per Quarter</span>

	</div>
</div>