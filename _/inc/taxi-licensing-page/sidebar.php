<div class="fee-info-box">
	<h3>Fee Information</h3>
	<strong>Fixed fees will include:</strong>
	<ul class="list-unstyled">
		<li><div class="icon"><div class="icon-inner"></div></div>Appeal to Committee/Magistrates Court/Crown Court</li>
		<li><div class="icon"><div class="icon-inner"></div></div>Advice on appeal</li>
		<li><div class="icon"><div class="icon-inner"></div></div>Drafting appeal notice</li>
		<li><div class="icon"><div class="icon-inner"></div></div>Case preparation and representation at Committee or Court</li>
	</ul>
	<div class="fee-price">
		<span>Fixed Fee</span>
		<p>&pound;500 + VAT</p>
	</div>
	<div class="extra-txt">
	<p>For existing Motopro clients who’s case fails at any level of appeal and who wish to appeal the decision further, a discounted fixed fee of £300 + VAT will be payable.</p>
	<p>Disbursements will not be included.  You will be responsible for these fees.</p>
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
