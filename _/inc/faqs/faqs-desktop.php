<section id="faq-panels-wrap" class="faq-panels">
		
<?php if (!empty($related_qs_none)) { ?>
	<div class="faq-panel">
		<h3 class="icon-header"><i class="fa fa-question-circle fa-lg"></i> General Questions</h3>
		
		<?php foreach ($faqs as $faq) { 
		$question = get_field('faq_question', $faq->ID);
		$answer = get_field('faq_answer', $faq->ID);
		$related = get_field('related', $faq->ID);
		//echo '<pre>';print_r($related);echo '</pre>';
		?>
		
		<?php if (in_array($faq->ID, $related_qs_none)) { ?>
		<p class="question"><i class="fa fa-comment"></i> <?php echo $question; ?></p>
		<div class="answer"><?php echo $answer; ?></div>
		
	 	<?php } ?> 
	 	
		<?php } ?>
		
		</div>
<?php } ?>

<?php if (!empty($related_qs)) { ?>

	<?php foreach ($related_qs as $key => $val) { 
	//echo '<pre>';print_r($key);echo '</pre>';
	$rel_page = get_page($val[0]['id']);
	//echo '<pre>';print_r($val[0]['id']);echo '</pre>';
	?>	
		<div class="faq-panel">
		
			<h3 class="icon-header"><i class="fa fa-question-circle fa-lg"></i><?php echo $rel_page->post_title; ?> Questions</h3>
		<?php foreach ($val as $item) { ?>
			<p class="question"><i class="fa fa-comment"></i> <?php echo $item[q]; ?></p>
			<div class="answer"><?php echo $item[a]; ?></div>
		<?php } ?>
		
		</div>		
			 
	<?php } ?>
	
<?php } ?>

</section>
