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
			<div class="media-left">
				<?php if(has_post_thumbnail()): ?> <?php the_post_thumbnail('related', 'title='); endif;?>
			</div>
			<div class="media-body"><?php the_excerpt(); ?></div>
		</div>
	</section>
	<div class="clearfix"></div>
	<div class="readmore">
		<a href="<?php the_permalink() ?>" class="btn btn-info"><?php _e('Read More'); ?></a>
	</div>
</article>