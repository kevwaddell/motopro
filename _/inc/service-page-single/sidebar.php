<?php 
$add_form = get_field('form_activated');

//echo '<pre>';print_r($form);echo '</pre>';
?>

<?php if ($add_form) { 
$form = get_field('form');	
//echo '<pre>';print_r($form);echo '</pre>';
?>
<div class="form-box">
	<h3>Request a call back</h3>
	
	<?php gravity_form($form->id, false, true, false, null, true); ?>
		
</div>
<?php } ?>