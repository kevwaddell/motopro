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
$brochure_link = get_field('brochure_link');
$team = get_field('mp_team');
//echo '<pre>';print_r($team);echo '</pre>';
 ?>	

<?php include (STYLESHEETPATH . '/_/inc/pages/child-vars.php'); ?>

	<div class="col-md-5 col-lg-4">
	
		<article <?php post_class($classes); ?>>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
		<div class="side-action-btns hidden-xs hidden-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { 
			$brochure_download = get_field('global_brochure_download', 'option');	
			//echo '<pre>';print_r($brochure_download);echo '</pre>';
			?>
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>


		</div>
		
	</div>
	
	<div class="col-md-7 col-lg-8">
	
		<?php if (!empty($team)) { ?>
			<?php foreach ($team as $tm) { ?>
			<article class="profile-box">
				
				<?php if ($tm['tm_img']) { ?>
				<figure class="profile-img hidden-xs">
					<img src="<?php echo $tm['tm_img']['sizes']['thumbnail']; ?>" width="160" height="160">
				</figure>
				<?php } ?>
				
				<header class="pb-header">
					<h4><?php echo $tm['tm_name']; ?></h4>
					<strong><?php echo $tm['tm_position']; ?></strong>
					<a href="mailto:<?php echo $tm['tm_email']; ?>" title="View: <?php echo $child->post_title; ?>"><i class="fa fa-envelope"></i> <?php echo $tm['tm_email']; ?></a>
				</header>
				<div class="pb-entry">
					<?php echo $tm['tm_biog']; ?>
				</div>
			</article>
			<?php } ?>
		<?php } ?>
		
		<div class="action-btns visible-xs visible-sm">
		
			<?php if (!empty($sb_links)) { ?>
				
			<?php foreach ($sb_links as $link) { ?>
			<a href="<?php echo get_permalink($link[page]->ID); ?><?php echo ($link[page]->ID == $contact_page->ID) ? '#callback-request':''; ?>" class="link-btn icon-btn<?php echo ($link[page]->ID == $contact_page->ID) ? ' col-red':''; ?>"><?php if (!empty($link[icon])) { ?><i class="fa <?php echo $link[icon]; ?> fa-lg"></i><?php } ?><?php echo $link[page]->post_title; ?></a>
			<?php } ?>
				
			<?php }  ?>
			
			<?php if ($brochure_link) { 
			$brochure_download = get_field('global_brochure_download', 'option');	
			//echo '<pre>';print_r($brochure_download);echo '</pre>';
			?>
			<a href="<?php echo $brochure_download; ?>" target="_blank" class="link-btn icon-btn"><i class="fa fa-download fa-lg"></i>Download our Brochure</a>
			<?php }  ?>

		</div>
	
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

	</div>
	
</div>
<!-- Container end  -->

<?php get_footer(); ?>
