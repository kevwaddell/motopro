<?php 
$contact_page = get_page_by_title("Request a Callback");
 ?>

<div id="quick-links mag-bot-0">
		
	<a href="<?php echo get_permalink($contact_page->ID); ?>#callback-request" class="link-btn icon-btn col-red" title="<?php echo $contact_page->post_title; ?>"><i class="fa fa-phone fa-lg"></i><?php echo $contact_page->post_title; ?></a>
	
</div>