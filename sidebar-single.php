<aside class="sidebar single">
	
	<?php 
	global $show_feat_img;
	global $feat_img_options;
	global $img_atts;
	//echo '<pre>';print_r($feat_img_options);echo '</pre>';
	?>
	
	<?php if ($feat_img_options == 'sidebar' && has_post_thumbnail()) { 
	$thumb_id = get_post_thumbnail_id($post->ID);
	$thumb_args = array(
	'p' => $thumb_id,
	'posts_per_page' => 1,
	'post_type' => 'attachment',
	'include'	=> $thumb_id
	);
	$thumb_image = get_posts($thumb_args);

	//echo '<pre>';print_r($thumb_image);echo '</pre>';
	if ($thumb_image[0]->post_excerpt) {
	$thumb_caption = $thumb_image[0]->post_excerpt;	
	}
	if ($thumb_image[0]->post_content) {
	$thumb_caption = $thumb_image[0]->post_content;	
	}	
	?>
			
	<div class="feat-img hidden-xs hidden-sm">
		
		<?php the_post_thumbnail( 'feat-img', $img_atts ); ?>
		
		<?php if ($thumb_caption) { ?>
		<figcaption class="feat-img-caption"><?php echo $thumb_caption; ?></figcaption>
		<?php } ?>
	</div>
	
	<?php }  ?>

	
	<?php 
	$add_form = get_field('add_form');
	if ($add_form) {
	$form = get_field('form');
	 ?>
	<div class="form-box">
		<h3>Request a call back</h3>
		
		<?php gravity_form($form->id, false, true, false, null, true); ?>
			
	</div>
	<?php } ?>
	
	<?php 
	$post_categories = get_categories();
	//echo '<pre>';print_r($post_categories);echo '</pre>';
	
	if ($post_categories) { ?>
	
	<ul class="list-unstyled mag-bot-20 btn-list">
	
	<?php foreach ($post_categories as $cat) { ?>
	  <li><a href="<?php echo get_category_link($cat->term_id); ?>" title="View: <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>
	<?php } ?>
	
	</ul>
	
	<?php } ?>
	
	<div id="search-form">
		<?php get_search_form(); ?>
	</div>
	
	<?php 
	$gallery_imgs = get_field('gallery_imgs');
	
	if ($gallery_imgs) { 
	//echo '<pre>';print_r($gallery_imgs);echo '</pre>';	
		
	?>
	<div class="sidebar-block">
		
		<h3>Image Gallery</h3>
		<ul class="list-unstyled img-links clearfix">
		<?php if (has_post_thumbnail()) { ?>
		<li class="visible-xs visible-sm">
			<a href="<?php echo $large_img[0]; ?>" rel="fancybox" class="zoomable">
				<img src="<?php echo $thumb_img[0]; ?>" class="img-responsive" width="<?php echo $thumb_img[1]; ?>" height="<?php echo $thumb_img[2]; ?>">
			</a>
		</li>
		<?php }  ?>
	<?php foreach( $gallery_imgs as $gallery_img ): 
			
			$alt = $gallery_img['title'];
			
			if ($gallery_img['caption']) {
			$alt = $gallery_img['caption'];
			}
			
			if ($gallery_img['alt']) {
			$alt = $gallery_img['alt'];
			}
			
			if ($gallery_img['description']) {
			$alt = $gallery_img['description'];
			}	
			?>
			<li>
				<a href="<?php echo $gallery_img['sizes']['medium']; ?>" rel="fancybox" class="zoomable">
					<img src="<?php echo $gallery_img['sizes']['gallery-img']; ?>" class="img-responsive" width="<?php echo $gallery_img['sizes']['gallery-img-width']; ?>" height="<?php echo $gallery_img['sizes']['gallery-img-height']; ?>"<?php echo ($alt) ? ' alt="'.$alt.'"': ''; ?>>
				</a>
			</li>
	<?php endforeach; ?>
		</ul>
	</div>
	
	<?php } ?>
	
</aside>