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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>

<header role="banner">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Nanaの7乗!</a></h1>
	<p>エオルゼアで7乗楽しむ為に奮闘中！</p>
	<nav role="navigation">
		<ul>
			<li><a>about</a></li>
			<li><a>profile</a></li>
		</ul>
	</nav>
	<button data-role="search-switch">検索</button>
	<div data-role="search-box">
		<?php get_search_form(); ?>
	</div>
</header>

	<div id="main" class="site-main">