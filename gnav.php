<div id="gnav">
	<nav data-role="color">
		<h2>color</h2>
		<?php
		$cats_id = get_category_by_slug('★')->term_id;
		$args = array('orderby' => 'name', 'order' => 'ASC','parent' => '17','child_of' => $cats_id,'hide_empty'=>'1' );
		$categories = get_categories($args); ?>
		<ul>
			<?php foreach($categories as $category){
			   echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . $category->name . '" ' . ' onClick="ga(\'send\', \'event\', \'color\', \'click\', \''.$category->cat_name.'\');">' . $category->name . '</a><span>'. $category->count . '</span></li>';
			} ?>
		</ul>
	</nav>

	<nav data-role="type">
	<h2>type</h2>
	<?php
	$cats_id = get_category_by_slug('★')->term_id;
	$args = array('orderby' => 'name', 'order' => 'ASC','parent' => '18','child_of' => $cats_id,'hide_empty'=>'1' );
	$categories = get_categories($args); ?>
		<ul>
		<?php foreach($categories as $category){
		   echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . $category->name . '" ' . ' onClick="ga(\'send\', \'event\', \'type\', \'click\', \''.$category->cat_name.'\');">' . $category->name . '</a><span>'. $category->count . '</span></li>';
		} ?>
		</ul>
	</nav>

	<nav data-role="tags">
	<h2>タグ</h2>
		<ul>
		<?php
		  $tags = get_terms('post_tag', 'hide_empty=1');
		  foreach($tags as $value):
		?>
		<li><a href="<?php echo get_tag_link($value->term_id); ?>" onClick="ga('send', 'event', 'type', 'click', '<?php echo $value->name; ?>');"><?php echo $value->name; ?></a><span><?php echo $value->count; ?></span></li>
		<?php
		  endforeach;
		?>
		</ul>
	</nav>
</div>