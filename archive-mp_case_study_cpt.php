<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php 
$case_studies_pg = get_page_by_title("Case studies");
$case_studies_pg_content = $case_studies_pg->post_content;
$content =  apply_filters( 'the_content', $case_studies_pg_content );

$contact_page = get_page_by_title('Request a Callback');
$sb_links = get_field('sb_links');
$found_posts = $wp_query->found_posts;
$posts_per_page = get_query_var("posts_per_page");

//echo '<pre>';print_r($posts_per_page);echo '</pre>';
 ?>	

		<article <?php post_class(); ?>>
			
			<?php if (!empty($case_studies_pg_content)) { ?>
			<h1 class="text-center"><?php echo get_the_title($case_studies_pg->ID); ?></h1>
			
			<div class="entry-txt with-borders" style="margin-bottom: 40px;">
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
							<?php echo $content; ?>
						</div>
				</div>
			</div>
			<?php } ?>
			
			<section id="case-studies-section">
				<?php if ( have_posts() ): ?>
				
				<h2>Case Summaries</h2>
				
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="well">
					<h3><?php the_title(); ?></h3>
					<div class="case-study-txt">
						<div class="case-study-txt-inner">
							<?php the_content(); ?>
						</div>
					</div>
					<button class="view-details-btn btn btn-default btn-block">View details</button>
				</div>
				<?php endwhile; ?>
				
				<?php if ($found_posts > $posts_per_page) { ?>
				<div class="page-links">
				<?php wp_pagenavi(); ?>
				</div>	
				<?php }  ?>
				
				<?php else: ?>
				<div class="well text-center">
					<h3>Sorry</h3>
					<p class="mag-bot-0">There is no <?php bloginfo('name'); ?> feedback at the moment.<br>
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
