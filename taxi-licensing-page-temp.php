<?php 
/*
Template Name: Taxi Licensing page template
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php //include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php if (has_post_thumbnail()) { ?>
<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-sml.php'); ?>
<?php }  ?>

<!-- Container  -->
<div class="container">

	<div class="row">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

	<div class="col-md-8">
	
		<article <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
		<div class="fee-info-box visible-xs visible-sm" style="margin-top: 30px;">
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
				
	</div>
	
	<aside class="sidebar single col-md-4">
		<?php include (STYLESHEETPATH . '/_/inc/taxi-licensing-page/sidebar.php'); ?>
	</aside>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
			
	<!-- Quick Links -->
	<?php include (STYLESHEETPATH . '/_/inc/taxi-licensing-page/quick-links.php'); ?>
	<!--Quick Links end  -->
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
