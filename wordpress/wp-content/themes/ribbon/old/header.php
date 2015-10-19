<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head();?>
	</head>
	<body  id ="blog" <?php body_class('main'); ?>>
		<header class="main-header">
			<div class="container">
				<div id="header">
					<h1 id="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.jpg" alt="<?php bloginfo( 'name' ); ?>"></a>
					</h1><!-- END #logo -->
				 <div class="widget-header">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Banner') ) : ?>
					<?php endif; ?>
	            </div>     
				</div><!-- #header -->
				<div class="secondary-navigation">
				<nav id="navigation" >
					<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'menu', 'container' => '' ) ); ?>
					<?php } else { ?>
						<ul class="menu">
							<?php wp_list_categories('title_li='); ?>
						</ul>
					<?php } ?>
				</nav>
				</div>
			</div>
		</header>
		<div class="main-container">