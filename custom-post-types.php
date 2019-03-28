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