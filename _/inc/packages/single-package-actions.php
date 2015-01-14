<?php
$brochure_download = get_field('brochure_download');
$c2a_contact = get_field('global_c2a_conatct', 'options');

if (!$c2a_contact) {
$c2a_contact = "Call us today for free advice";
}
//echo '<pre>';print_r($brochure_download);echo '</pre>';
 ?>

<div class="quick-links">

		<a href="<?php echo get_permalink($contact_page->ID); ?>?service=<?php echo urldecode($parent->post_title); ?>&package=<?php echo $package_name; ?>" class="c2a-link-btn icon-btn col-red"><i class="fa fa-comments fa-lg"></i><?php echo $c2a_contact; ?></a>
		
	<?php if (!empty($brochure_download)) { ?>
		<a href="<?php echo $brochure_download; ?>" target="_blank" style="margin-top:30px;" class="c2a-link-btn icon-btn col-<?php echo $color; ?>"><i class="fa fa-download fa-lg"></i>Download our package Brochure</a>
	<?php } ?>	
	
</div>