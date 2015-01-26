<?php 
/*
Template Name: Motoring Offences page NEW template
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
$classes = array('mag-bot-40');
$brochure_link = get_field('brochure_link');
$parent_page = get_page($post->post_parent);

//echo '<pre>';print_r($faqs);echo '</pre>';
$faqs_args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'mp_faq'
);
$faqs = get_posts($faqs_args);
$rel_faqs = array();
$rel_faqs_counter = 0;

if ($faqs) {

	foreach ($faqs as $f) {
	$q = get_field('faq_question', $f->ID);
	$a = get_field('faq_answer', $f->ID);
	$related = get_field('related', $f->ID);
	
		foreach ($related as $r) {
			
			if ($r == $post->ID) {
			array_push($rel_faqs, array('q' => $q, 'a' => $a));	
			}
		}
		
	}
	
}

//echo '<pre>';print_r($rel_faqs);echo '</pre>';

 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/single-child-vars.php'); ?>

	<div class="col-md-8">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
			
			<!-- Quick Links -->
			<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/quick-links.php'); ?>
			<!--Quick Links end  -->
		</article>
		
		
		<?php if (!empty($rel_faqs)) { 
		if (wp_is_mobile()) {
		$event = 'tap';	
		} else {
		$event = 'click';		
		}
		?>
		<section id="faq-box-wrap" class="faq-box">
			<h3>FAQ's</h3>
			<?php if (wp_is_mobile()) { ?>
			<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/faqs-mobile.php'); ?>
			<?php } else { ?>
			<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/faqs-desktop.php'); ?>
			<?php } ?>
		</section>
		
		<?php }  ?>
				
	</div>
	
	<div class="col-md-4">
	
	<?php include (STYLESHEETPATH . '/_/inc/motoring-offences/single-sidebar.php'); ?>
			
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<!-- Social Share buttons -->
<?php include (STYLESHEETPATH . '/_/inc/global/share-btns.php'); ?>
<!--Social Share buttons   -->

<?php get_footer(); ?>
