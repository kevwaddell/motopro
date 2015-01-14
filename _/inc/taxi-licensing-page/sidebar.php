<?php  
$sb_box_title = get_field('box_title');
$sb_list = get_field('inc_list');
$sb_price = get_field('sb_price');
$sb_extra_txt = get_field('sb_extra_text');
$form = get_field('sb_form');
?>

<?php if ($form) { ?>
<div class="form-box">
	<h3>Request a call back</h3>
	
	<?php gravity_form($form->id, false, true, false, null, true); ?>
		
</div>
<?php } ?>

<div class="fee-info-box">
	<h3><?php echo $sb_box_title; ?></h3>
	<strong class="block" style="margin-bottom:10px;">Fixed fees will include:</strong>
	<ul class="list-unstyled">
		<?php foreach ($sb_list as $item) { ?>
		<li><div class="icon"><div class="icon-inner"></div></div><?php echo $item['list_item']; ?></li>
		<?php } ?>
	</ul>
	<div class="fee-price">
		<span>Fixed Fee</span>
		<p style="margin-bottom: 0px;">&pound;<?php echo $sb_price; ?> <small class="caps">+ VAT</small></p>
	</div>
	
	<div class="extra-info info-closed">
		<button id="extra-info-btn" class="btn icon-btn">Extra Information</button>
		<div class="extra-info-txt">
			<?php echo $sb_extra_txt; ?>
		</div>
	</div>
</div>
