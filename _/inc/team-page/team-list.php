<?php if (!empty($team)) { ?>
	<?php foreach ($team as $tm) { ?>
	<article class="profile-box">
		
		<?php if ($tm['tm_img']) { ?>
		<figure class="profile-img hidden-xs">
			<img src="<?php echo $tm['tm_img']['sizes']['thumbnail']; ?>" width="160" height="160">
		</figure>
		<?php } ?>
		
		<header class="pb-header">
			<h4><?php echo $tm['tm_name']; ?></h4>
			<strong><?php echo $tm['tm_position']; ?></strong>
			<a href="mailto:<?php echo $tm['tm_email']; ?>" title="View: <?php echo $child->post_title; ?>"><i class="fa fa-envelope"></i> <?php echo $tm['tm_email']; ?></a>
		</header>
		<div class="pb-entry">
			<?php echo $tm['tm_biog']; ?>
		</div>
	</article>
	<?php } ?>
<?php } ?>
