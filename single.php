<?php get_header(); ?>
	<ol data-role="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>">TOP</a></li>
		<li><?php the_title(''); ?></li>
	</ol>
	<main role="main">
		<div class="inner">
		<?php if(have_posts()):while(have_posts()):the_post();
			$job = post_custom('job');
			$comment = post_custom('comment');
			$head = post_custom('head');
			$body = post_custom('body');
			$hand = post_custom('hand');
			$belt = post_custom('belt');
			$legs = post_custom('legs');
			$foot = post_custom('foot');
			$thum_img1 = wp_get_attachment_image_src(post_custom('thum_img1'),'large' );
			$thum_img2 = wp_get_attachment_image_src(post_custom('thum_img2'),'large' );
		?>

		<article>
			<p data-role="post-data"><?php echo get_the_date(); ?></p>
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
				<ul>
					<?php if(post_custom("thum_img1")): ?><li><img src='<?php echo $thum_img1[0]; ?>'></li><?php endif ?>
					<?php if(post_custom("thum_img2")): ?><li><img src='<?php echo $thum_img2[0]; ?>'></li><?php endif ?>
				</ul>
				<p><?php echo $job; ?></p>
		</article>
		<?php endwhile;endif; ?>
		<nav id="nav-below">
			<ul>
				<li class="previous_page"><?php previous_posts_link('prev'); ?></li>
				<li class="next_page"><?php next_posts_link('next'); ?></li>
			</ul>
		</nav>
		</div>
	</main>
<?php get_footer(); ?>