<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
<body>
	<div class="header">
		<header class="container">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.jpg" alt="<?php bloginfo( 'name' ); ?>"></a>
			</h1>
		</header>
		<div class="navigation">
			<?php get_template_part('nav');?>
		</div>
	</div>