<table class="package-table hidden-xs" width="100%">
	<colgroup>
		<col class="procedures"></col>
		<col class="fees col-grey"></col>
	</colgroup>
	<thead>
		<tr>
			<th class="procedures-header">Legal Procedures</th>
			<th class="fees-header col-red"><div class="icon"><div class="icon-inner"></div></div><?php bloginfo('name'); ?><span>Fees</span></th>
		</tr>
	</thead>
	<tbody>
	
	<?php foreach ($procedures as $procedure) { 
	//echo '<pre>';print_r($package_option);echo '</pre>';
	?>
		<tr>
			<td class="procedure"><?php echo $procedure['lp_name']; ?></td>
			<td class="fee">&pound;<?php echo $procedure['lp_fee']; ?></td>			
		</tr>
	<?php } ?>
	
	</tbody>
</table>
