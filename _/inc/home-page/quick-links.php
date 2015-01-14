<?php 
$contact_page = get_page_by_title("Request a Callback");
$c2a_contact = get_field('global_c2a_conatct', 'options');
$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);

if (!$c2a_contact) {
$c2a_contact = "Call us today for Free Advice";
}
 ?>

<div id="quick-links">
		
	<a href="<?php echo get_permalink($contact_page->ID); ?>" id="call-2-action-home" class="c2a-link-btn icon-btn col-red <?php echo (!wp_is_mobile()) ? 'animated bounceIn':'animated pulse' ; ?>" title="Call us today for Free Advice"><i class="fa fa-comments fa-lg animated"></i><?php echo $c2a_contact; ?></a>
	
	<a href="<?php echo get_permalink($news_page->ID); ?>" id="call-2-action-home" style="margin-top:30px;" class="c2a-link-btn icon-btn col-grey" title="Latest news from <?php bloginfo('name'); ?>"><i class="fa fa-rss fa-lg animated"></i>Latest news from <?php bloginfo('name'); ?></a>
	
</div>