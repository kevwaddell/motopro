<?php 
$contact_page = get_page_by_title("Request a Callback");
 ?>

<section id="quick-links mag-bot-0">
		<a href="<?php echo get_permalink($contact_page->ID); ?>?service=<?php echo urldecode($post->post_title); ?>#callback-request" class="link-btn icon-btn col-red" title="<?php echo $contact_page->post_title; ?>"><i class="fa fa-phone fa-lg"></i><?php echo $contact_page->post_title; ?></a>
</section>