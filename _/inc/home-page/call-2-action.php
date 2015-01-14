<?php 
$contact_page = get_page_by_title("Request a Callback");
$c2a_contact = get_field('global_c2a_contact', 'options');

if (!$c2a_contact) {
$c2a_contact = "Call us today for Free Advice";
}
?>
 
<div class="quick-links home-page-c2a">
		
	<a href="<?php echo get_permalink($contact_page->ID); ?>" id="call-2-action-home" class="c2a-link-btn icon-btn col-red <?php echo (!wp_is_mobile()) ? 'animated bounceIn':'animated pulse' ; ?>" title="Call us today for Free Advice"><i class="fa fa-comments fa-lg animated"></i><?php echo $c2a_contact; ?></a>
	

</div>