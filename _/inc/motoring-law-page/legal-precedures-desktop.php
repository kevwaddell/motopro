	<h3 class="icon-header text-center"><i class="fa fa-folder-open fa-lg"></i>Legal Procedures</h3>
	<?php foreach ($legal_procedures as $legal_procedure) { ?>
				
		<h4><?php echo $legal_procedure['ml_procedure_title']; ?></h4>
				
		<?php echo $legal_procedure['ml_procedure_content']; ?>
		
		<hr>
		
	<?php } ?>