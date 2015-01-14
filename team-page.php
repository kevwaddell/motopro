<?php 
/*
Template Name: Team page template
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

	<div class="row">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php 
$contact_page = get_page_by_title('Request a Callback');
$classes = array('mag-bot-30');
$sb_links = get_field('sb_links');
$team = get_field('mp_team');
//echo '<pre>';print_r($team);echo '</pre>';
 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/child-vars.php'); ?>

	<div class="col-md-5 col-lg-4">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
				
	</div>
	
	<div class="col-md-7 col-lg-8">
	
	<?php include (STYLESHEETPATH . '/_/inc/team-page/team-list.php'); ?>
			
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
	<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/team-page/quick-links.php'); ?>
		
</div>
<!-- Container end  -->

<?php get_footer(); ?>
