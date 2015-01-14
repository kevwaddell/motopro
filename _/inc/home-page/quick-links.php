<?php 
$presentation_download = get_field('global_presentation_download', 'options');
$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);
 ?>

<div class="quick-links">
	
	<a href="<?php echo get_permalink($news_page->ID); ?>" id="call-2-action-home" style="margin-top:30px;" class="c2a-link-btn icon-btn col-blue" title="Latest news from <?php bloginfo('name'); ?>"><i class="fa fa-rss fa-lg animated"></i>Latest news from <?php bloginfo('name'); ?></a>
	
	<?php if ($presentation_download) { ?>
	<a href="<?php echo $presentation_download; ?>" id="call-2-action-home" style="margin-top:30px;" target="_blank" class="c2a-link-btn icon-btn col-orange" title="Download our Presentation"><i class="fa fa-download fa-lg animated"></i>Download our Presentation</a>
	<?php } ?>

</div>