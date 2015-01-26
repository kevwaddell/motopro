<?php 
$thank_you_pgs_args = $children_args = array(
'posts_per_page'	=> -1,
'post_type' => 'page',
'meta_key'	=> 'hide_page',
'meta_value'	=> 1
);
$thank_you_pgs = get_posts($thank_you_pgs_args);

$excluded = array();

foreach ($thank_you_pgs as $pg) { 
	if ( !in_array($pg->ID, $excluded) ) {
	array_push($excluded , $pg->ID);
	}
}

//echo '<pre>';print_r($excluded);echo '</pre>';

$children_args = array(
'sort_column' => 'menu_order',
'parent' => $post->post_parent,
'post_type' => 'page'
);

if ( !empty($excluded) ) {
$children_args['exclude'] = $excluded;
}

$children = get_pages($children_args);
//echo '<pre>';print_r($children);echo '</pre>';
 ?>