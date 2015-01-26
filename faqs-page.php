<?php 
/*
Template Name: FAQ's page template
*/
?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php 
$contact_page = get_page_by_title('Request a Callback');
$faqs_args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'mp_faq'
);
$faqs = get_posts($faqs_args);
//echo '<pre>';print_r($faqs);echo '</pre>';
$related_qs = array();
$related_qs_none = array();

if ($faqs) {

	foreach ($faqs as $f) {
	$q = get_field('faq_question', $f->ID);
	$a = get_field('faq_answer', $f->ID);
	$related = get_field('related', $f->ID);
	//echo '<pre>';print_r($related);echo '</pre>';
	
		if (!empty($related)) {
		
			foreach ($related as $r) {
				$pg = get_post($r);
				//$related_qs[$r] = array($q, $a);
				//echo '<pre>';print_r($pg);echo '</pre>';
				
				if (!array_key_exists($pg->menu_order, $related_qs)) {
					$related_qs[$pg->menu_order] = array(array('q' => $q, 'a' => $a, 'id' => $r));
				} else {
					array_push($related_qs[$pg->menu_order], array('q' => $q, 'a' => $a, 'id' => $r));
				}
			
			}
			
		} else {
			array_push($related_qs_none, $f->ID);
		}
		
	}
}

ksort($related_qs);


//echo '<pre>';print_r($related_qs);echo '</pre>';
 ?>	

	<article <?php post_class(); ?>>
		<h2 class="text-center"><?php the_title(); ?></h2>
		
		<div class="entry-txt with-borders">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/slogan.php'); ?>
			
				</div>
			</div>
			
		</div>
			
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/faqs/quick-links.php'); ?>
		<!--Quick Links end  -->

	</article>
	
	<section class="faqs-section">
		
		<?php if (wp_is_mobile()) { ?>
		<!-- Legal Procedures Mobile -->
		<?php include (STYLESHEETPATH . '/_/inc/faqs/faqs-mobile.php'); ?>
		<!--Legal Procedures end  -->
		<?php } else { ?>
		<!-- Legal Procedures Desktop -->
		<?php include (STYLESHEETPATH . '/_/inc/faqs/faqs-desktop.php'); ?>
		<!--Legal Procedures end  -->
		<?php } ?>
	
	</section>
		
<?php endwhile; ?>
<?php endif; ?>
	
</div>
<!-- Container end  -->

<!-- Social Share buttons -->
<?php include (STYLESHEETPATH . '/_/inc/global/share-btns.php'); ?>
<!--Social Share buttons   -->

<?php get_footer(); ?>
