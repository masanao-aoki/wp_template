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
		<div class="tablenav"><?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
	$paginate_format = '';
	$paginate_base = add_query_arg('paged', '%#%');
} else {
	$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/', 'paged');;
	$paginate_base .= '%_%';
}
echo paginate_links( array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 5,
	'current' => ($paged ? $paged : 1),
)); ?></div>
		</div>
	</main>
<?php get_footer(); ?>
