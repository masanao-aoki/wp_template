<?php get_header(); ?>
	<main role="main">
		<div class="inner">
		<?php if(have_posts()):while(have_posts()):the_post();
		$thum_img1 = wp_get_attachment_image_src(post_custom('thum_img1'),'medium' );
		$thum_img2 = wp_get_attachment_image_src(post_custom('thum_img2'),'medium' );
		?>

		<article>
			<p data-role="post-data"><?php echo get_the_date(); ?></p>
			<header>
				<h2><a href="<?php the_permalink(); ?>" onClick="ga('send', 'event', 'Link', 'click', '<?php the_title(); ?>')"><?php the_title(); ?></a></h2>
				<ul>
				<?php
				 $cats = get_the_category();
				 foreach ($cats as $cat) {
			 		echo '<li><a href="' . get_category_link($cat->cat_ID) . '" onClick="ga(\'send\', \'event\', \'type\', \'click\, '.$cat->cat_name.');">[&nbsp;'.$cat->cat_name."&nbsp;]</a></li>";
				 }
				?>
				</ul>
			</header>
				<ul data-role="article-thum">
					<?php if(post_custom("thum_img1")): ?><li><img src='<?php echo $thum_img1[0]; ?>'></li><?php endif ?>
					<?php if(post_custom("thum_img2")): ?><li><img src='<?php echo $thum_img2[0]; ?>'></li><?php endif ?>
				</ul>
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
