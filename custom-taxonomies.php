<?php

if ( ! function_exists( 'tax_audience' ) ) {

	// Register Custom Taxonomy
	function tax_audience() {
	
		$labels = array(
			'name'                       => _x( 'Audiences', 'Taxonomy General Name', 'energielinq' ),
			'singular_name'              => _x( 'Audience', 'Taxonomy Singular Name', 'energielinq' ),
			'menu_name'                  => __( 'Audience', 'energielinq' ),
			'all_items'                  => __( 'All Audiences', 'energielinq' ),
			'parent_item'                => __( 'Parent Audience', 'energielinq' ),
			'parent_item_colon'          => __( 'Parent Audience:', 'energielinq' ),
			'new_item_name'              => __( 'New Audience Name', 'energielinq' ),
			'add_new_item'               => __( 'Add New Audience', 'energielinq' ),
			'edit_item'                  => __( 'Edit Audience', 'energielinq' ),
			'update_item'                => __( 'Update Audience', 'energielinq' ),
			'view_item'                  => __( 'View Audience', 'energielinq' ),
			'separate_items_with_commas' => __( 'Separate audiences with commas', 'energielinq' ),
			'add_or_remove_items'        => __( 'Add or remove audiences', 'energielinq' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'energielinq' ),
			'popular_items'              => __( 'Popular Audiences', 'energielinq' ),
			'search_items'               => __( 'Search Audiences', 'energielinq' ),
			'not_found'                  => __( 'Not Found', 'energielinq' ),
			'no_terms'                   => __( 'No audiences', 'energielinq' ),
			'items_list'                 => __( 'Audiences list', 'energielinq' ),
			'items_list_navigation'      => __( 'Audiences list navigation', 'energielinq' ),
		);
		$rewrite = array(
			'slug'                       => __( 'audience', 'energielinq' ),
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => false,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'audience', array( 'post' ), $args );
	
	}
	add_action( 'init', 'tax_audience', 0 );
	
}

if ( ! function_exists( 'tax_topic' ) ) {

	// Register Custom Taxonomy
	function tax_topic() {
	
		$labels = array(
			'name'                       => _x( 'Topics', 'Taxonomy General Name', 'energielinq' ),
			'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'energielinq' ),
			'menu_name'                  => __( 'Topic', 'energielinq' ),
			'all_items'                  => __( 'All Topics', 'energielinq' ),
			'parent_item'                => __( 'Parent Topic', 'energielinq' ),
			'parent_item_colon'          => __( 'Parent Topic:', 'energielinq' ),
			'new_item_name'              => __( 'New Topic Name', 'energielinq' ),
			'add_new_item'               => __( 'Add New Topic', 'energielinq' ),
			'edit_item'                  => __( 'Edit Topic', 'energielinq' ),
			'update_item'                => __( 'Update Topic', 'energielinq' ),
			'view_item'                  => __( 'View Topic', 'energielinq' ),
			'separate_items_with_commas' => __( 'Separate topics with commas', 'energielinq' ),
			'add_or_remove_items'        => __( 'Add or remove topics', 'energielinq' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'energielinq' ),
			'popular_items'              => __( 'Popular Topics', 'energielinq' ),
			'search_items'               => __( 'Search Topics', 'energielinq' ),
			'not_found'                  => __( 'Not Found', 'energielinq' ),
			'no_terms'                   => __( 'No topics', 'energielinq' ),
			'items_list'                 => __( 'Topics list', 'energielinq' ),
			'items_list_navigation'      => __( 'Topics list navigation', 'energielinq' ),
		);
		$rewrite = array(
			'slug'                       => __( 'topic', 'energielinq' ),
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => false,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'topic', array( 'post' ), $args );
	
	}
	add_action( 'init', 'tax_topic', 0 );
	
}

if ( ! function_exists( 'tax_dossier' ) ) {

	// Register Custom Taxonomy
	function tax_dossier() {
	
		$labels = array(
			'name'                       => _x( 'Dossiers', 'Taxonomy General Name', 'energielinq' ),
			'singular_name'              => _x( 'Dossier', 'Taxonomy Singular Name', 'energielinq' ),
			'menu_name'                  => __( 'Dossier', 'energielinq' ),
			'all_items'                  => __( 'All Dossiers', 'energielinq' ),
			'parent_item'                => __( 'Parent Dossier', 'energielinq' ),
			'parent_item_colon'          => __( 'Parent Dossier:', 'energielinq' ),
			'new_item_name'              => __( 'New Dossier Name', 'energielinq' ),
			'add_new_item'               => __( 'Add New Dossier', 'energielinq' ),
			'edit_item'                  => __( 'Edit Dossier', 'energielinq' ),
			'update_item'                => __( 'Update Dossier', 'energielinq' ),
			'view_item'                  => __( 'View Dossier', 'energielinq' ),
			'separate_items_with_commas' => __( 'Separate dossiers with commas', 'energielinq' ),
			'add_or_remove_items'        => __( 'Add or remove dossiers', 'energielinq' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'energielinq' ),
			'popular_items'              => __( 'Popular Dossiers', 'energielinq' ),
			'search_items'               => __( 'Search Dossiers', 'energielinq' ),
			'not_found'                  => __( 'Not Found', 'energielinq' ),
			'no_terms'                   => __( 'No dossiers', 'energielinq' ),
			'items_list'                 => __( 'Dossiers list', 'energielinq' ),
			'items_list_navigation'      => __( 'Dossiers list navigation', 'energielinq' ),
		);
		$rewrite = array(
			'slug'                       => __( 'dossier', 'energielinq' ),
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => false,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'dossier', array( 'post', 'project', 'link' ), $args );
	
	}
	add_action( 'init', 'tax_dossier', 0 );
	
}
