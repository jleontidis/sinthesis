<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-date-ribbon">
		<div class="corner"></div>
		<?php the_time('d M Y'); ?>
	</div>
	<header>
		<div class="breadcrumb">
			<?php the_breadcrumb();?>
		</div>
		<h1 class="page-title">
			<?php the_title();?>
		</h1>
		<div class="post-info">
			<div class="author_mt hp_meta">
				<span class="mt_icon"> </span>
				 <?php the_author_posts_link(); ?>
			</div>
		</div>
	</header>
	<div class="clearfix"></div>
	<section class="page-body">
		<div class="media">
			<div class="media-left">
				<?php if(has_post_thumbnail()): ?> <?php the_post_thumbnail('related', 'title='); endif;?>
			</div>
			<div class="media-body"><?php the_content(); ?></div>
		</div>
	</section>
	<div class="clearfix"></div>
</article>