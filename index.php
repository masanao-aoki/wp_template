<?php get_header(); ?>
	<main role="main">
		<?php if(have_posts()):while(have_posts()):the_post();
		$url = post_custom('url');
		$details = post_custom('details');
		$setsumei = post_custom('setsumei');
		$main_img = wp_get_attachment_image_src(post_custom('main_img'),'medium' );
		$main_img_cap = post_custom('main_img_cap');
		$thum_img1 = wp_get_attachment_image_src(post_custom('thum_img1'),'medium' );
		$thum_img1_cap = post_custom('thum_img1_cap');
		$thum_img2 = wp_get_attachment_image_src(post_custom('thum_img2'),'medium' );
		$thum_img2_cap = post_custom('thum_img2_cap');
		$thum_img3 = wp_get_attachment_image_src(post_custom('thum_img3'),'medium' );
		$thum_img3_cap = post_custom('thum_img3_cap');
		$thum_img4 = wp_get_attachment_image_src(post_custom('thum_img4'),'medium' );
		$thum_img4_cap = post_custom('thum_img4_cap');
		$thum_img5 = wp_get_attachment_image_src(post_custom('thum_img5'),'medium' );
		$thum_img5_cap = post_custom('thum_img5_cap');
		?>

		<article>
			<header>
				<h2><?php if($url): ?><a href="<?php echo $url; ?>" target="_blank" onClick="ga('send', 'event', 'Link', 'click', '<?php the_title(); ?>');"><?php endif ?><?php the_title(); ?><?php if($url): ?></a><?php endif ?></h2>
			<ul data-role="color">
				<?php
				 $cats = get_the_category();
				 foreach ($cats as $cat) {
			 		if( $cat->parent == 17 ) {
			 		echo '<li><a href="' . get_category_link($cat->cat_ID) . '" onClick="ga(\'send\', \'event\', \'color\', \'click\', '.$cat->cat_name.');">'.$cat->cat_name."</a></li>";
			  		}
				 }
				?>
			</ul>
			<ul data-role="type">
				<?php
				 $cats = get_the_category();
				 foreach ($cats as $cat) {
			 		if( $cat->parent == 18 ) {
			 		echo '<li><a href="' . get_category_link($cat->cat_ID) . '" onClick="ga(\'send\', \'event\', \'type\', \'click\', '.$cat->cat_name.');">'.$cat->cat_name."</a></li>";
			  		}
				 }
				?>
			</ul>
			<?php the_tags('<ul data-role="tag"><li>','</li><li>','</li></ul>'); ?>
			</header>
			<?php echo do_shortcode( '[cft format=0]' ); ?>
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
	</main>
<?php get_footer(); ?>
