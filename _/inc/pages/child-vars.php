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

$children_args = array(
'sort_column' => 'menu_order',
'parent' => $post->ID,
'post_type' => 'page',
'exclude' => $excluded
);
$children = get_pages($children_args);
//echo '<pre>';print_r($children);echo '</pre>';
 ?>