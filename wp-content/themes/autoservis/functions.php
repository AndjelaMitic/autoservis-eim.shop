<?php
/*Custom Post type start*/
function cw_post_type_intro() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Intro', 'plural'),
'singular_name' => _x('Intro', 'singular'),
'menu_name' => _x("Intro", 'admin menu'),
'name_admin_bar' => _x('Intro', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Intro'),
'new_item' => __('New Intro'),
'edit_item' => __('Edit Intro'),
'view_item' => __('View Intro'),
'all_items' => __('All Intro'),
'search_items' => __('Search Intro'),
'not_found' => __('No Intro found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'intro'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('intro', $args);
}
add_action('init', 'cw_post_type_intro');

function cw_post_type_menu() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'revisions', // post revisions
'post-formats', // post formats
'page-attributes'
);
$labels = array(
'name' => _x('Home menu', 'plural'),
'singular_name' => _x('Home menu', 'singular'),
'menu_name' => _x("Home menu", 'admin menu'),
'name_admin_bar' => _x('Home menu', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Home menu'),
'new_item' => __('New Home menu'),
'edit_item' => __('Edit Home menu'),
'view_item' => __('View Home menu'),
'all_items' => __('All Home menu'),
'search_items' => __('Search Home menu'),
'not_found' => __('No Home menu found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'menu'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('menu', $args);
}
add_action('init', 'cw_post_type_menu');

function cw_post_type_inspection() {
$supports = array(
'title', // post title
'editor', // post content
'thumbnail', // featured images
'revisions', // post revisions
'post-formats', // post formats
'page-attributes'
);
$labels = array(
'name' => _x('Tehnical inspection', 'plural'),
'singular_name' => _x('Tehnical inspection', 'singular'),
'menu_name' => _x("Tehnical inspection", 'admin menu'),
'name_admin_bar' => _x('Tehnical inspection', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Tehnical inspection'),
'new_item' => __('New Tehnical inspection'),
'edit_item' => __('Edit Tehnical inspection'),
'view_item' => __('View Tehnical inspection'),
'all_items' => __('All Tehnical inspection'),
'search_items' => __('Search Tehnical inspection'),
'not_found' => __('No Tehnical inspection found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'inspection'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('inspection', $args);
}
add_action('init', 'cw_post_type_inspection');

function cw_post_type_maps() {
$supports = array(
'title', // post title
'editor', // post content
'post-formats', // post formats
);
$labels = array(
'name' => _x('Google Maps', 'plural'),
'singular_name' => _x('Google Map', 'singular'),
'menu_name' => _x("Google Map", 'admin menu'),
'name_admin_bar' => _x('Map', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Google Map'),
'new_item' => __('New Google Map'),
'edit_item' => __('Edit Google Map'),
'view_item' => __('View Google Map'),
'all_items' => __('All Google Map'),
'search_items' => __('Search Google Map'),
'not_found' => __('No Google Map found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'maps'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('maps', $args);
}
add_action('init', 'cw_post_type_maps');
?>
