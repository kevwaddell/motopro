<?php  
$sb_box_title = get_field('box_title');
$sb_list = get_field('inc_list');
$sb_price = get_field('sb_price');
$sb_extra_txt = get_field('sb_extra_text');
?>

<div class="fee-info-box">
	<h3><?php echo $sb_box_title; ?></h3>
	<strong>Fixed fees will include:</strong>
	<ul class="list-unstyled">
		<?php foreach ($sb_list as $item) { ?>
		<li><div class="icon"><div class="icon-inner"></div></div><?php echo $item['list_item']; ?></li>
		<?php } ?>
	</ul>
	<div class="fee-price">
		<span>Fixed Fee</span>
		<p>&pound;<?php echo $sb_price; ?> + VAT</p>
	</div>
	<div class="extra-txt">
	<?php echo $sb_extra_txt; ?>
	</div>
</div>

<div class="side-action-btns">		
<?php 
$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');
$service = urlencode($post->post_title);
//echo '<pre>';print_r($service);echo '</pre>';

if (!empty($sb_links)) { ?>
		
	<?php foreach ($sb_links as $link) { ?>
	<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '?service='.$service.'#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
	<?php } ?>
		
	<?php }  ?>
	
	<?php if ($brochure_link) { 
	$brochure_download = get_field('global_brochure_download', 'option');	
	?>
	<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
	<?php }  ?>
</div>
