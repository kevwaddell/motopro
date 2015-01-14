<?php 
$contact_page = get_page_by_title("Request a Callback");
$c2a_contact = get_field('global_c2a_conatct', 'options');

if (!$c2a_contact) {
$c2a_contact = "Call us today for Free Advice";
}

//echo '<pre>';print_r($post);echo '</pre>';

if ($post->post_name == 'motopro-premium-legal-service') {
$brochure_download = get_field('global_brochure_download', 'options');	
}

//echo '<pre>';print_r($brochure_download);echo '</pre>';
 ?>

<section class="quick-links">
	
	<a href="<?php echo get_permalink($contact_page->ID); ?>?service=<?php echo urldecode($post->post_title); ?>" class="c2a-link-btn animated icon-btn col-red" title="<?php echo $c2a_contact; ?>"><i class="fa fa-comments fa-lg"></i><?php echo $c2a_contact; ?></a>
	
	<?php if ($brochure_download) { ?>
	<a href="<?php echo $brochure_download; ?>" target="_blank" style="margin-top:30px;" class="c2a-link-btn animated icon-btn col-grey"><i class="fa fa-download fa-lg"></i>Download our packages Brochure</a>		
	<?php } ?>

</section>