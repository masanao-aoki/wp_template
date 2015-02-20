<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage custom
 * @since custom β0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta description="<?php bloginfo('description'); ?>"/>
<meta keywords="<?php bloginfo('keywords'); ?>"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slick/slick.css">
<!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
</head>

<body <?php body_class(); ?>>

	<header role="banner">
		<div class="inner">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Eorzea Collection</a></h1>
			<p>エオコレ</p>
		</div>
	</header>
	<?php include( TEMPLATEPATH . '/gnav.php' ); ?>
