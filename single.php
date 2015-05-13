<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
$date = get_the_date('l - jS F - Y');	
$gallery_imgs = get_field('gallery_imgs');	
$show_author = get_field('show_author');
$show_feat_img = get_field('show_feat_img');
if ($show_feat_img && has_post_thumbnail()) {
$img_atts = array('class'	=> "img-responsive");	
$feat_img_options = get_field('feat_img_options');
}
?>		
<div class="container">
	
<div class="row">
		
	<div class="col-md-8 col-md-push-4">

		<article <?php post_class(); ?>>
			
			<?php if ($feat_img_options == 'wide' && has_post_thumbnail()) { ?>
			
			<div class="feat-img-wide">
				
				<?php the_post_thumbnail( 'feat-img-wide', $img_atts ); ?>
				
			</div>
			
			<?php }  ?>
		
			<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar fa-lg"></i> <?php echo $date; ?></time>

			
			<h1 style="margin-top: 0px;"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
							
			<?php if ($show_author) { ?>
			<p class="author">Posted by: <?php the_author(); ?></p>
			<?php } ?>
			
		</article>

	</div>
	
	<div class="col-md-4 col-md-pull-8">
		
	<?php get_sidebar('single'); ?>
	
	</div>
		
</div>

</div>
<!-- Container end  -->
	
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
