<?php  
$sb_box_title = get_field('box_title');
$sb_list = get_field('inc_list');
$sb_price = get_field('sb_price');
$monthly_price = get_field('monthly_cost');
$form = get_field('sb_form');
//echo '<pre>';print_r($form);echo '</pre>';
?>

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
	<?php if ($form) { ?>
	<a href="#sign-up-modal" class="link-btn icon-btn" data-toggle="modal" title="Sign up"><i class="fa fa-check fa-lg"></i>Sign up Today</a>
	<?php }  ?>
</div>

<?php if ($form) { ?>
<div id="sign-up-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php the_title(); ?> Sign up</h4>
      </div>
      <div class="modal-body">
		<?php gravity_form($form->id, false, true, false, null, true); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }  ?>