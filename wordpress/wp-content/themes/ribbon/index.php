<?php get_header(); ?>
	<section class="container">
		<div class="page">
			<div class="content">
				<article class="col-md-8">
					<div class="content_box">
		<?php if (have_posts()) : ?>
		<?php echo do_shortcode('[ajax_load_more post_type="post" transition="fade" button_label="Περισσότερα..." container_type="div"]');?>
		
		<?php endif; ?>
	</div>
	</article>
	<aside class="col-md-4">
		<?php get_template_part('sidebar');?>
	</aside>
	</div><!-- end of content -->
	</div><!-- end of page -->
	</section><!-- end of section -->
<?php get_footer();?>