<?php 
function add_new_taxonomies() {	
	register_taxonomy('programs',
		array('courses'),
		array(
			'hierarchical' => false,
			'labels' => array(
				'name' => 'Add new programs',
				'singular_name' => 'Programs',
				'search_items' =>  'Search programs',
				'popular_items' => 'Featured programs',
				'all_items' => 'All programs',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Edit program', 
				'update_item' => 'Update program',
				'add_new_item' => 'Add a new program',
				'new_item_name' => 'Name a new program',
				'separate_items_with_commas' => 'Separate programs which are commas',
				'add_or_remove_items' => 'Add or remove a program',
				'choose_from_most_used' => 'Choose from the most commonly used programs',
				'menu_name' => 'Programs'
			),
			'public' => true, 
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'programs',
				'hierarchical' => false
			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies', 0 );