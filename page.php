<?php get_header(); ?>
<ol data-role="breadcrumb">
	<li><a href="<?php bloginfo('url'); ?>">TOP</a></li>
	<li><?php the_title(''); ?></li>
</ol>
			<!-- main -->
			<div id="main">
			<?php
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
			<?php the_content(); ?>
					<?php
					endwhile; // 繰り返し処理終了
				else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
				<?php
				endif;
				?>
			</div>
			<!-- /main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>