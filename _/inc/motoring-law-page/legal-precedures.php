<div id="accordion-wrap">
	
	<?php foreach ($legal_procedures as $legal_procedure) { 
	$legal_procedure_target = sanitize_title($legal_procedure['ml_procedure_title']);
	?>
		
		<div class="panel">
				
			<button data-toggle="collapse" onclick="ga('send', 'event','tab', 'tap', '<?php echo $post->post_title; ?> - <?php echo $legal_procedure['ml_procedure_title']; ?>')" data-target="#collapse-panel-<?php echo $legal_procedure_target; ?>" data-parent="#accordion-wrap" class="collapse-btn collapsed"><?php echo $legal_procedure['ml_procedure_title']; ?></button>
				
			<div id="collapse-panel-<?php echo $legal_procedure_target; ?>" class="collapse-panel collapse">
				<?php echo $legal_procedure['ml_procedure_content']; ?>
			</div>
		
		</div>

	<?php } ?>
	
</div>