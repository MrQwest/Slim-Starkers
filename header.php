<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Meta Tags & Browser Stuff -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Make the HTML5 elements work in IE. -->
    <!--[if IE]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The mountain of stuff WP puts in -->
    <?php wp_head(); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/less.less" type="text/css" />
    <script src="<?php bloginfo('template_url'); ?>/js/less-1.0.41.min.js"></script>

    <!-- JavaScript -->
    <!-- <script src="http://code.jquery.com/jquery-1.5.1.min.js"></script> -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

    <!-- Firebug Lite for IE -->
    <!--[if IE]>
        <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
    <![endif]-->
    
</head>
<body <?php body_class(); ?>>
	
	<div class="wrapper">
	    		
	<header>
	    <?php if (is_front_page()) { ?>
	        <h1><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    		<h2><?php bloginfo('description'); ?></h2>
	    <?php } else { ?>
	        <h2><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
    		<h3><?php bloginfo('description'); ?></h3>
	    <?php } ?>
		<nav>
			<ul>
				<?php wp_list_pages('title_li=' ); ?>
			</ul>
		</nav>
	</header>
	