<?php get_header(); ?>
<section class="container">
		<div class="page">
			<div class="content">
				<article class="col-md-8">
					<div class="content_box">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-date-ribbon">
							<div class="corner"></div>
							<?php the_time('d M Y'); ?>
						</div>
						<header>
							<h2 class="title">
								<?php the_title();?>
							</h2>
							<div class="post-info">
								<div class="author_mt hp_meta">
									<span class="mt_icon"> </span>
									 <?php the_author_posts_link(); ?>
								</div>
								<div class="cat_mt hp_meta">
									<span class="mt_icon"> </span>
									<?php  the_category(', '); ?>
								</div>
								<div class="comment_mt hp_meta">
									<span class="mt_icon"> </span> <a href="#"> 0 Comments</a>
								</div>
							</div>
						</header>
						<div class="clearfix"></div>
						<section>
							<div class="media">
									
								<div class="media-body"><?php the_content(); ?></div>
							</div>
						</section>
						<div class="clearfix"></div>
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
<?php get_footer(); ?>