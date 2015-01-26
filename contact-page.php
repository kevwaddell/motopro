<?php 
/*
Template Name: Contact us page template
*/
?>


<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$form = get_field('form');
$office_tel = get_field('office_tel');
$out_of_hours = get_field('ooh_number');
$fax = get_field('fax');
$email = get_field('contact_email', 'option');
$location = get_field('location');
$address = get_field('address');
$map_marker = get_stylesheet_directory_uri()."/_/img/map-marker.png";
//echo '<pre>';print_r($form);echo '</pre>';
 ?>	
<?php if ($location) { ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<?php } ?>
<div class="container"> 

	<div class="intro">
		
	<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
	
	<?php the_content() ; ?>
	</div>
	
	<div class="row">
	
		<div class="col-md-8 col-md-push-4 col-lg-8 col-lg-push-4">
			
			<div class="contact-form">
			<?php if ($form) { ?>
			<h3 class="icon-header" style="margin-bottom: 20px; margin-right: 0px;"><?php echo $form->title; ?> <i class="fa fa-cog fa-lg"></i></h3>
			<?php gravity_form($form->id, false, true, false, null, true); ?>
			
			<?php }  ?>
			</div>
			
		</div>
		
		<aside class="sidebar contact-sb col-md-4 col-md-pull-8 col-lg-4 col-lg-pull-8">
			
			<?php if ($location) { ?>

			<?php include (STYLESHEETPATH . '/_/inc/contact/small-map.php'); ?>

			<?php } ?>
	
			<button class="icon-header dropdown-head" data-toggle="collapse" data-target="#address"><i class="icon fa fa-map-marker fa-lg"></i> Address </button>
			<div id="address" class="sidebar-block-inner collapse in">
				<h4 class="address-head"><?php bloginfo('name'); ?></h4>
				<?php echo $address; ?>
			</div>
			
			<button class="icon-header dropdown-head hidden-xs collapsed" data-toggle="collapse" data-target="#control"><i class="icon fa fa-car fa-lg"></i> Route finder</button>
			<div id="control" class="sidebar-block-inner hidden-xs collapse">
				
				<!-- <form action="http://maps.google.com/maps/" method="get" target="_blank"> -->
				<form action="http://maps.google.com/maps" method="get" target="_blank" class="route-finder">
					<div class="form-group">
					<label for="saddr">Enter Your Post code:</label>
					<input type="hidden" name="daddr" value="NE29 7ST">
					<input type="text" class="form-control" name="saddr" maxlength="9" id="start">
					</div>
					<p class="submit"><input type="submit" class="btn btn-default btn-block" value="Get directions"></p>
					
				</form>
				
			</div>
			
			<ul class="contact-list list-unstyled">
				
				<?php if (isset($office_tel)) { ?>
				<li><i class="fa fa-phone fa-lg"></i> Freephone: <?php echo $office_tel; ?></li>
				<?php } ?>
				
				<?php if (isset($out_of_hours)) { ?>
				<li><i class="fa fa-mobile fa-lg"></i> Out of hours: <?php echo $out_of_hours; ?></li>
				<?php } ?>
				
				<?php if (isset($fax)) { ?>
				<li><i class="fa fa-print fa-lg"></i> Fax: <?php echo $fax; ?></li>
				<?php } ?>
				
				<?php if (isset($email)) { ?>
				<li><a href="mailto:<?php echo $email; ?>" title="Email TLW"><i class="fa fa-envelope fa-lg"></i> <?php echo $email; ?></a></li>
				<?php } ?>
				
			</ul>
	
		</aside>
	
	</div>	
	
</div>
	
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
