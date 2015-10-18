<?php get_header(); ?>
	<section class="container">
		<div class="page">
			<div class="content">
				<article class="col-md-8">
					<div class="content_box">
			<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
		<?php endwhile; ?>
        <?php else: ?>
        <article class="post">
            <h2>Δεν βρέθηκαν αποτελέσματα!</h2>
    	</article>
        <?php endif; ?>
	</div>
	</article>
	<aside class="col-md-4">
	<div class="widgets">
		<?php get_template_part('sidebar');?>
	</div>
	</aside>
	</div><!-- end of content -->
	</div><!-- end of page -->
	</section><!-- end of section -->
<?php get_footer();?>