<?php 
$contact_page = get_page_by_title("Request a Callback");
$c2a_contact = get_field('global_c2a_conatct', 'options');

if (!$c2a_contact) {
$c2a_contact = "Call us today for Free Advice";
}
 ?>

<div id="quick-links" class="with-mag-top" style="margin-bottom: 0px;">
		
	<a href="<?php echo get_permalink($contact_page->ID); ?>" class="c2a-link-btn animated icon-btn col-red" title="<?php echo $c2a_contact; ?>"><i class="fa fa-comments fa-lg"></i><?php echo $c2a_contact; ?></a>
	
</div>
