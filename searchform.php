<form method="get" action="<?php bloginfo( 'url' ); ?>">
    <p>検索</p>
    <input name="s" id="s" type="text" />
    <nav>
        <h4>color</h4>
        <ul>
        <?php
        $cats = get_categories('child_of=17');
        foreach($cats as $cat) :
            echo '<li data-role="'. esc_html($cat->cat_name) .'"><label>'
            . '<input type="checkbox" value="' . $cat->cat_ID . '" name="catnum[]" />'
            . esc_html($cat->cat_name) . '['.$cat->count.']</label></li>';
        endforeach;
        ?>
        </ul>
    </nav>
    <nav>
        <h4>type</h4>
        <ul>
        <?php
        $cats = get_categories('child_of=18');
        foreach($cats as $cat) :
            echo '<li data-role="'. esc_html($cat->cat_name) .'"><label>'
            . '<input type="checkbox" value="' . $cat->cat_ID . '" name="catnum[]" />'
            . esc_html($cat->cat_name) . '['.$cat->count.']</label></li>';
        endforeach;
        ?>
        </ul>
    </nav>
    <input id="submit" type="submit" value="検索" />
</form>