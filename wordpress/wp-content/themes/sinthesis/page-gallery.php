<?php
/**
 * Template Name:  Page Gallery
 */
?>

<?php get_header(); ?>
	<section class="container">
		<div class="page">
			<div class="content">
				<article class="col-md-12">
			<h3>	<?php the_title();?></h3>
		
		<?php echo do_shortcode("[huge_it_videogallery id='1']"); ?>
		
	
	</article>
	
	</div><!-- end of content -->
	</div><!-- end of page -->
	</section><!-- end of section -->
<?php get_footer();?>