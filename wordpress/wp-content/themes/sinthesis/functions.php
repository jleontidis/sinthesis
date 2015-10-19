<?php
function sinthesis_setup()
{
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'featured', 150, 150, true ); //featured
	add_image_size( 'related', 200, 125, true ); //related
	
	add_theme_support('menus');
	
	register_nav_menus(array(
'header' => __('Primary Menu'),
'footer' => __('Footer Menu'),
));
	
	add_theme_support( 'post-formats', array(
			'page'
	) );
}

add_action('after_setup_theme','sinthesis_setup');

function sinthesis_widgets_init()
{
	register_sidebar(array(
		'name' => __('Sidebar Widgets'),
		'id'   => 'sidebar',
		'descriptions' => __('Sidebar Widget Area'),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>'
	));
	
	register_sidebar(array(
	'name' => __('Header Widgets'),
	'id'   => 'header',
	'descriptions' => __('Header Widget Area'),
	'before_widget' => '<div class="widget %2$s">',
	'after_widget' => '</div>'
			));
}

add_action('widgets_init', 'sinthesis_widgets_init');

function sinthesis_scripts_styles()
{
	wp_enqueue_style('vendor-css',get_template_directory_uri().'/css/vendor.min.css',array(),null);
	wp_enqueue_style('sinthesis',get_stylesheet_uri(),array(),null);
	wp_enqueue_style('custom-css',get_template_directory_uri().'/css/custom.min.css',array(),null);
	
	wp_enqueue_script('vendor-js',get_template_directory_uri()."/js/vendor.min.js",array(),null,false);
	wp_enqueue_script('scripts-sinthesis',get_template_directory_uri()."/js/scripts.min.js",array(),null,true);
	
	
}
add_action('wp_enqueue_scripts', 'sinthesis_scripts_styles');

/*-----------------------------------------------------------------------------------*/
/* Breadcrumb
 /*-----------------------------------------------------------------------------------*/
function the_breadcrumb() {
	echo '<a href="';
	echo home_url();
	echo '" rel="nofollow">Home';
	echo "</a>";
	if (is_category() || is_single()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		the_category(' &bull; ');
		if (is_single()) {
			echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
			the_title();
		}
	} elseif (is_page()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		echo the_title();
	} elseif (is_search()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}

/*-----------------------------------------------------------------------------------*/
/*	Register Footer widgets
 /*-----------------------------------------------------------------------------------*/
if (function_exists('register_sidebar')) {
	$sidebars = array(1, 2, 3);
	foreach($sidebars as $number) {
		register_sidebar(array(
				'name' => 'Footer ' . $number,
				'id' => 'footer-' . $number,
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>'
		));
	}
}
function widgetized_footer() {
	?>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
			<?php endif; ?>
		</div>
	<?php
	}
	
	/*-----------------------------------------------------------------------------------*/
	/*	excerpt
	 /*-----------------------------------------------------------------------------------*/
	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt);
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
	}
	