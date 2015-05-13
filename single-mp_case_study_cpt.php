<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php 
$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
 ?>	

		<article <?php post_class(); ?>>
			<h1 class="text-center"><?php the_title(); ?></h1>
			
			<div class="entry-txt with-borders" style="margin-bottom: 40px;">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
							<?php the_content(); ?>
							
						</div>
				</div>
			</div>

		</article>
		
		<!-- Quick Links -->
		<?php include (STYLESHEETPATH . '/_/inc/global/quick-links.php'); ?>
		<!--Quick Links end  -->
		
		<div class="side-action-btns">
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
		</div>
	
		
<?php endwhile; ?>
<?php endif; ?>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
