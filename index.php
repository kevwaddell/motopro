<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<?php include (STYLESHEETPATH . '/_/inc/news/posts-vars.php'); ?>

<!-- Container  -->
<div class="container">

<div class="row">

	<div class="col-md-4 col-lg-4">
	
	<article <?php post_class(); ?>>
		<h1><?php echo $news_page->post_title; ?></h1>
		<?php echo $news_page_content ; ?>
		
		<a class="link-btn-sml icon-btn" title="Join our mailing list" href="<?php echo get_permalink($newsletter_pg->ID); ?>">
			<i class="fa fa-file-text fa-lg"></i>Sign up now 
		</a>		

		<a href="<?php bloginfo('rss2_url'); ?>" class="link-btn-sml icon-btn" title="Subscribe to our news feed" target="_blank">
		<i class="fa fa-rss fa-lg icon"></i> MotoPro news feed
		</a>
	</article>
		
	<?php get_sidebar(); ?>
	</div>
	
	<div class="col-md-8 col-lg-8">
		
	<?php //echo '<pre>';print_r($wp_query);echo '</pre>'; ?>

<?php if ( have_posts() ): ?>	

	<h3 class="icon-header hidden-xs hidden-sm"><i class="fa fa-newspaper-o fa-lg"></i> Latest News</h3>
	
	<section class="posts-list">
	
	<div class="page-num hidden-xs hidden-sm">
	<?php wp_pagenavi(); ?>
	</div>
	
	<?php while ( have_posts() ) : the_post(); 
	$date = get_the_date('l - jS F - Y');
	?>		
		<?php if (has_post_thumbnail()) { 
		$img_atts = array('class'	=> "img-responsive");	
		?>
					
		<?php include (STYLESHEETPATH . '/_/inc/news/post-list-item-thumb.php'); ?>	
	
		<?php } else { ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/news/post-list-item.php'); ?>
		
		<?php } ?>
		
		<?php endwhile; ?>
		
		<div class="page-links">
			<?php wp_pagenavi(); ?>
		</div>	
			
	</section>	
	
	<?php else: ?>
		<div class="well">
			<h3>Sorry</h3>
			<p>No <?php bloginfo('name'); ?> News at the moment.<br>
			Please come back soon.
			</p>
		</div>
	<?php endif; ?>

	</div>

</div>

</div>
<!-- Container end  -->

<?php get_footer(); ?>
