<nav role="navigation">
	<ul>
		<li><a href="/">エオコレについて</a></li>
		<li><a href="/">ミラプリって？</a></li>
		<li><a href="/">ミラプリを送る</a></li>
	</ul>
</nav>
<ol data-role="breadcrumb">
	<li><a href="<?php bloginfo('url'); ?>">TOP</a></li>
	<li><?php the_title(''); ?></li>
</ol>
<nav data-role="category">
	<h2>JOB検索</h2>
	<?php
	$cats_id = get_category_by_slug('★')->term_id;
	$args = array('orderby' => 'name', 'order' => 'ASC','child_of' => $cats_id,'hide_empty'=>'1' );
	$categories = get_categories($args); ?>
	<ul>
		<?php foreach($categories as $category){
		   echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . $category->name . '" ' . ' onClick="ga\'send\', \'event\', \'job\', \'click\', \''.$category->cat_name.'\');">[&nbsp;' . $category->name . '&nbsp;]&nbsp;('. $category->count .')</a></li>';
		} ?>
	</ul>
</nav>
