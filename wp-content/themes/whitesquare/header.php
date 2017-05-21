<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="header">
		<header>
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="120px" alt="<?php echo __('Whitesquare logo', 'whitesquare'); ?>"></a>
			<!-- <?php get_search_form(); ?> -->
		</header>
	</div>
	<nav class="main-navigation">
		<?php shailan_dropdown_menu(); ?>


		<!-- <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?> -->
	</nav>
