<?php 
$form = get_field('form');	

?>

<aside class="sidebar-actions sidebar">
	
	<?php if ($form) { ?>
	<div class="form-box">
	<h3>Request a call back</h3>
	
	<?php gravity_form($form->id, false, true, false, array('motoring-offence' => $post->post_title), true); ?>
		
	</div>
	<?php } ?>
		
	<button id="sidenav-btn" class="visible-xs visible-sm"><i class="fa fa-bars fa-lg"></i> <?php echo $parent_page->post_title; ?></button>

	<?php if (!empty($children)) { ?>
		<ul class="list-unstyled btn-list btns-closed">
		<?php foreach ($children as $child) { ?>
			<li<?php echo ($child->ID == get_the_ID()) ? ' class="active-page"':'' ?>><a href="<?php echo get_permalink($child->ID); ?>" title="View: <?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
		<?php } ?>
		</ul>
	<?php } ?>
	
</aside>
