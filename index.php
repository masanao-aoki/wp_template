<?php get_header(); ?>
	<main role="main">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<article>
			<header>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<div data-role="article-meta">
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
				<?php the_category();?>
				<?php the_tags('<ul data-role="tag"><li>','</li><li>','</li></ul>'); ?>
			</div>
			<div data-role="text"><?php the_content('続きを読む&raquo;'); ?></div>
		</article>
		<?php endwhile;endif; ?>
		<nav>
			<ul>
				<li class="previous_page"><?php previous_posts_link('prev'); ?></li>
				<li class="next_page"><?php next_posts_link('next'); ?></li>
			</ul>
		</nav>
	</main>
<?php get_footer(); ?>