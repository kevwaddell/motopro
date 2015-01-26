<?php foreach ($rel_faqs as $faq) { ?>
<div class="faq-group">
 	<p class="question"><i class="fa fa-comment"></i><?php echo $faq[q]; ?></p>
	<p class="answer"><?php echo $faq[a]; ?></p>
</div>
<?php } ?>