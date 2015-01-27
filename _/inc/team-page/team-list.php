<?php if (!empty($team)) { ?>
	<?php foreach ($team as $tm) { 
	$social_links = $tm['social_links'];
	?>
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
		
		<?php if (count($social_links > 0)) { ?>
		<div class="social-links">
			
			<?php foreach ($social_links as $social_link) { ?>
			<a href="<?php echo $social_link['social_url'] ; ?>" target="_blank"><i class="fa <?php echo $social_link['social_icon'] ; ?> fa-2x"></i></a>	
			<?php } ?>

		</div>
		<?php } ?>
		
		<div class="pb-entry">
			<?php echo $tm['tm_biog']; ?>
		</div>
		
	</article>
	<?php } ?>
<?php } ?>
