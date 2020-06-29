<?php

if ( ! function_exists('cpt_expert') ) {

// Register Custom Post Type
function cpt_expert() {

	$labels = array(
		'name'                  => _x( 'Experts', 'Post Type General Name', 'energielinq' ),
		'singular_name'         => _x( 'Expert', 'Post Type Singular Name', 'energielinq' ),
		'menu_name'             => __( 'Experts', 'energielinq' ),
		'name_admin_bar'        => __( 'Expert', 'energielinq' ),
		'archives'              => __( 'Expert Archives', 'energielinq' ),
		'attributes'            => __( 'Expert Attributes', 'energielinq' ),
		'parent_item_colon'     => __( 'Parent Expert:', 'energielinq' ),
		'all_items'             => __( 'All Experts', 'energielinq' ),
		'add_new_item'          => __( 'Add New Expert', 'energielinq' ),
		'add_new'               => __( 'Add New', 'energielinq' ),
		'new_item'              => __( 'New Expert', 'energielinq' ),
		'edit_item'             => __( 'Edit Expert', 'energielinq' ),
		'update_item'           => __( 'Update Expert', 'energielinq' ),
		'view_item'             => __( 'View Expert', 'energielinq' ),
		'view_items'            => __( 'View Experts', 'energielinq' ),
		'search_items'          => __( 'Search Expert', 'energielinq' ),
		'not_found'             => __( 'Not found', 'energielinq' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'energielinq' ),
		'featured_image'        => __( 'Featured Image', 'energielinq' ),
		'set_featured_image'    => __( 'Set featured image', 'energielinq' ),
		'remove_featured_image' => __( 'Remove featured image', 'energielinq' ),
		'use_featured_image'    => __( 'Use as featured image', 'energielinq' ),
		'insert_into_item'      => __( 'Insert into expert', 'energielinq' ),
		'uploaded_to_this_item' => __( 'Uploaded to this expert', 'energielinq' ),
		'items_list'            => __( 'Experts list', 'energielinq' ),
		'items_list_navigation' => __( 'Experts list navigation', 'energielinq' ),
		'filter_items_list'     => __( 'Filter experts list', 'energielinq' ),
	);
	$args = array(
		'label'                 => __( 'Expert', 'energielinq' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'expert', $args );

}
add_action( 'init', 'cpt_expert', 0 );

}

if ( ! function_exists('cpt_project') ) {

	// Register Custom Post Type
	function cpt_project() {
	
		$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name', 'energielinq' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'energielinq' ),
			'menu_name'             => __( 'Projects', 'energielinq' ),
			'name_admin_bar'        => __( 'Project', 'energielinq' ),
			'archives'              => __( 'Project Archives', 'energielinq' ),
			'attributes'            => __( 'Project Attributes', 'energielinq' ),
			'parent_item_colon'     => __( 'Parent Project:', 'energielinq' ),
			'all_items'             => __( 'All Projects', 'energielinq' ),
			'add_new_item'          => __( 'Add New Project', 'energielinq' ),
			'add_new'               => __( 'Add New', 'energielinq' ),
			'new_item'              => __( 'New Project', 'energielinq' ),
			'edit_item'             => __( 'Edit Project', 'energielinq' ),
			'update_item'           => __( 'Update Project', 'energielinq' ),
			'view_item'             => __( 'View Project', 'energielinq' ),
			'view_items'            => __( 'View Projects', 'energielinq' ),
			'search_items'          => __( 'Search Project', 'energielinq' ),
			'not_found'             => __( 'Not found', 'energielinq' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'energielinq' ),
			'featured_image'        => __( 'Featured Image', 'energielinq' ),
			'set_featured_image'    => __( 'Set featured image', 'energielinq' ),
			'remove_featured_image' => __( 'Remove featured image', 'energielinq' ),
			'use_featured_image'    => __( 'Use as featured image', 'energielinq' ),
			'insert_into_item'      => __( 'Insert into project', 'energielinq' ),
			'uploaded_to_this_item' => __( 'Uploaded to this project', 'energielinq' ),
			'items_list'            => __( 'Projects list', 'energielinq' ),
			'items_list_navigation' => __( 'Projects list navigation', 'energielinq' ),
			'filter_items_list'     => __( 'Filter projects list', 'energielinq' ),
		);
		$args = array(
			'label'                 => __( 'Project', 'energielinq' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'category' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-portfolio',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'rewrite'               => array( 'slug' => __('nom-projects', 'energielinq') )
		);
		register_post_type( 'project', $args );
	
	}
	add_action( 'init', 'cpt_project', 0 );
	
}


if ( ! function_exists('cpt_link') ) {

	// Register Custom Post Type
	function cpt_link() {
	
		$labels = array(
			'name'                  => _x( 'Links', 'Post Type General Name', 'energielinq' ),
			'singular_name'         => _x( 'Link', 'Post Type Singular Name', 'energielinq' ),
			'menu_name'             => __( 'Links', 'energielinq' ),
			'name_admin_bar'        => __( 'Link', 'energielinq' ),
			'archives'              => __( 'Link Archives', 'energielinq' ),
			'attributes'            => __( 'Link Attributes', 'energielinq' ),
			'parent_item_colon'     => __( 'Parent Link:', 'energielinq' ),
			'all_items'             => __( 'All Links', 'energielinq' ),
			'add_new_item'          => __( 'Add New Link', 'energielinq' ),
			'add_new'               => __( 'Add New', 'energielinq' ),
			'new_item'              => __( 'New Link', 'energielinq' ),
			'edit_item'             => __( 'Edit Link', 'energielinq' ),
			'update_item'           => __( 'Update Link', 'energielinq' ),
			'view_item'             => __( 'View Link', 'energielinq' ),
			'view_items'            => __( 'View Links', 'energielinq' ),
			'search_items'          => __( 'Search Link', 'energielinq' ),
			'not_found'             => __( 'Not found', 'energielinq' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'energielinq' ),
			'featured_image'        => __( 'Featured Image', 'energielinq' ),
			'set_featured_image'    => __( 'Set featured image', 'energielinq' ),
			'remove_featured_image' => __( 'Remove featured image', 'energielinq' ),
			'use_featured_image'    => __( 'Use as featured image', 'energielinq' ),
			'insert_into_item'      => __( 'Insert into link', 'energielinq' ),
			'uploaded_to_this_item' => __( 'Uploaded to this link', 'energielinq' ),
			'items_list'            => __( 'Links list', 'energielinq' ),
			'items_list_navigation' => __( 'Links list navigation', 'energielinq' ),
			'filter_items_list'     => __( 'Filter links list', 'energielinq' ),
		);
		$args = array(
			'label'                 => __( 'Link', 'energielinq' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'dossier' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-links',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'link', $args );
	
	}
	add_action( 'init', 'cpt_link', 0 );
	
}