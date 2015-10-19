<?php
/**
 * Template Name: Page contact
 */
?>
<?php get_header(); ?>
	<section class="container">
		<div class="page">
			<div class="content">
				<article class="col-md-8">
					<div class="content_box">
					
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('article-contact'); ?>>
						<div class="post-date-ribbon">
							<div class="corner"></div>
							Επικοινωνία
						</div>
						<header>
						
						</header>
						<div class="clearfix"></div>
						<section class="">
							<div class="media">
									<?php if(has_post_thumbnail()): ?> <?php the_post_thumbnail('related', 'title='); endif;?>
								<div class="media-body"><?php the_content(); ?></div>
							</div>
						</section>
						<div class="clearfix"></div>
						<div class="success-message hidden">
							<i class="fa fa-4x fa-envelope-o"></i>
							<h2>Eυχαριστούμε για το μήνυμά σας!</h2>
						</div>
						</article>
						<?php endwhile;?>
		</div>
	</article>
	<aside class="col-md-4">
		<?php get_template_part('sidebar');?>
	</aside>
	</div><!-- end of content -->
	</div><!-- end of page -->
	</section><!-- end of section -->
<?php get_footer();?> 