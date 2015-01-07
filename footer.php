
<p data-role="goto_top"><a href="#">TOPへ戻る</a></p>
<footer role="contentinfo">

<div data-role="category">
<h2>カテゴリー</h2>
<ul>
<?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) {
    echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a><span>'. $category->count . '</span></li> '; }
?>
</ul>
</div>


<div data-role="category">
<h2>タグ</h2>
	<ul>
	<?php
	  $tags = get_terms('post_tag', 'hide_empty=1');
	  foreach($tags as $value):
	?>
	<li><a href="<?php echo get_tag_link($value->term_id); ?>"><?php echo $value->name; ?></a><span><?php echo $value->count; ?></span></li>
	<?php
	  endforeach;
	?>
	</ul>
</div>


<p><small>copyright&copy;<?php bloginfo('name'); ?> All rights reserved.</small></p>
</footer>
</body>
</html>