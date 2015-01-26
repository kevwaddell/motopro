<?php foreach ($rel_faqs as $faq) { 
$rel_faqs_counter++;	
?>
<div class="faq-panel panel">
 	<button data-toggle="collapse" onclick="ga('send', 'event','tab', '<?php echo $event; ?>', '<?php echo $post->post_title; ?> - <?php echo $faq[q]; ?>')" data-target="#panel-<?php echo $rel_faqs_counter; ?>" data-parent="#faq-box-wrap" class="faq-btn collapsed"><?php echo $faq[q]; ?></button>
	 <div id="panel-<?php echo $rel_faqs_counter; ?>" class="collapse">
	 	<p><?php echo $faq[a]; ?></p>
	 </div>
</div>
<?php } ?>