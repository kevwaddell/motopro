<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php 
$feedback_pg = get_page_by_title("Feedback");	
$feedback_pg_content = $feedback_pg->post_content;
$content =  apply_filters( 'the_content', $feedback_pg_content );

$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
$found_posts = $wp_query->found_posts;
$posts_per_page = get_query_var("posts_per_page");
 ?>	

		<article <?php post_class(); ?>>
			<h1 class="text-center">Client <?php echo get_the_title($feedback_pg->ID); ?></h1>
			
			<?php if (!empty($feedback_pg_content)) { ?>
			<div class="entry-txt with-borders" style="margin-bottom: 40px;">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
							<?php echo $content; ?>
						</div>
				</div>
			</div>
			<?php } ?>
			
			<section id="feedback-section">
				
				<h2>What our Clients say</h2>
				
				<?php if ( have_posts() ): ?>
					
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="well">
						<?php the_content(); ?>
					</div>
					
				<?php endwhile; ?>
				
				<?php if ($found_posts > $posts_per_page) { ?>
				<div class="page-links">
				<?php wp_pagenavi(); ?>
				</div>
				<?php } ?>
				
				<?php else: ?>
				<div class="well text-center">
					<h3>Sorry</h3>
					<p>There is no <?php bloginfo('name'); ?> client feedback at the moment.<br>
					Please come back soon.
					</p>
				</div>
				<?php endif; ?>
			</section>

		</article>
		
		<div class="side-action-btns">
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
		</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
