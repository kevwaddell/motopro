<div class="sidebar single col-md-4">

	<?php if (!empty($children)) { ?>
		<ul class="list-unstyled btn-list">
		<?php foreach ($children as $child) { ?>
			<li><a href="<?php echo get_permalink($child->ID); ?>" title="View: <?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
		<?php } ?>
		</ul>
	<?php } ?>

</div>
