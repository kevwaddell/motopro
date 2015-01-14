<?php 
/*
Template Name: Thank page template
*/
 ?>

<?php get_header(); ?>

<!-- Banner small  -->
<?php include (STYLESHEETPATH . '/_/inc/global/banner-strip.php'); ?>

<!-- Container  -->
<div class="container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 	?>	

<?php 

if (isset($_GET['first-name'])) {
$name = $_GET['first-name'];	
}

if (isset($_GET['full-name'])) {
$split = split(" ", $_GET['full-name']);
$name = $split[0];	
}	
	
$thank_you_title = get_field('title');

 ?>	
	
		<article <?php post_class(); ?>>
			<div class="entry-txt with-borders" style="margin-bottom: 40px;">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-center">

						<h2><?php echo $thank_you_title; ?> <?php echo $name; ?>.</h2>
						
						<?php the_content(); ?>
		
						<a href="<?php echo get_permalink($post->post_parent) ; ?>" class="link-btn" style="padding-left:10px; width: 300px; margin:auto;" id="reload-form">Continue</a>
					</div>
				</div>
			</div>
			
		</article>
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- Container end  -->

<?php get_footer(); ?>