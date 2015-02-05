<?php get_header(); ?>
	<main role="main">
		<div class="inner">
		<?php if(have_posts()):while(have_posts()):the_post();
		$thum_img1 = wp_get_attachment_image_src(post_custom('thum_img1'),'medium' );
		$thum_img2 = wp_get_attachment_image_src(post_custom('thum_img2'),'medium' );
		?>

		<article>
			<a href="<?php the_permalink(); ?>" onClick="ga('send', 'event', 'Link', 'click', '<?php the_title(); ?>')">
			<p data-role="post-data"><?php echo get_the_date(); ?></p>
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
				<ul data-role="article-thum">
					<?php if(post_custom("thum_img1")): ?><li><img src='<?php echo $thum_img1[0]; ?>'></li><?php endif ?>
					<?php if(post_custom("thum_img2")): ?><li><img src='<?php echo $thum_img2[0]; ?>'></li><?php endif ?>
				</ul>
			</a>
		</article>
		<?php endwhile;endif; ?>
		<?php
				if ( $wp_query -> max_num_pages > 1 ) : ?>
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; PREV'); ?></div>
						<div class="alignright"><?php previous_posts_link('NEXT &raquo;'); ?></div>
					</div>
				<?php
				endif;
				?>
		<nav id="nav-below">
			<ul>
				<li class="previous_page"><?php previous_posts_link('prev'); ?></li>
				<li class="next_page"><?php next_posts_link('next'); ?></li>
			</ul>
		</nav>
		</div>
	</main>
<?php get_footer(); ?>
