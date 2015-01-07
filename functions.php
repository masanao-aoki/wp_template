
<?php

function custom_request($query)
{
    if (!empty($query['cat']) && array_key_exists('s', $query)){
            $query['cat'] = implode(',', $query['cat']);
        }
    return $query;
}
add_filter( 'request', 'custom_request' );
