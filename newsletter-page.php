<?php 
/*
Template Name: Newsletter sign up template
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
$form = get_field('form');
$sb_links = get_field('sb_links');
$brochure_link = get_field('brochure_link');	
?>	

		<article <?php post_class(); ?>>
			
			<div class="entry-txt with-borders" style="margin-bottom: 40px;">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
							<h1 class="text-center"><?php the_title(); ?></h1>
										
							<?php the_content(); ?>
							
							<?php if ($form) { ?>
			
							<?php gravity_form($form->id, false, false, false, null, true); ?>
			
							<?php }  ?>

						</div>
				</div>
			</div>
	
		</article>
		
		<div class="side-action-btns">
				<?php if (!empty($sb_links)) { ?>
					
				<?php foreach ($sb_links as $link) { ?>
				<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
				<?php } ?>
					
				<?php }  ?>
				
				<?php if ($brochure_link) { 
				$brochure_download = get_field('global_brochure_download', 'option');	
				?>
				<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
				<?php }  ?>

				
		</div>

<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
