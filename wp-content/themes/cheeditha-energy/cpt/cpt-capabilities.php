<?php

// Register Custom Post Type
function cheeditha_capabilities_register_cpt() {

	$labels = array(
		'name'                  => _x( 'capabilities', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'capabilities', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Capabilities', 'text_domain' ),
		'name_admin_bar'        => __( 'Capabilities', 'text_domain' ),
		'archives'              => __( 'capabilities Archives', 'text_domain' ),
		'attributes'            => __( 'capabilities Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent capabilities:', 'text_domain' ),
		'all_items'             => __( 'All Capabilities', 'text_domain' ),
		'add_new_item'          => __( 'Add New capabilities', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New capabilities', 'text_domain' ),
		'edit_item'             => __( 'Edit capabilities', 'text_domain' ),
		'update_item'           => __( 'Update capabilities', 'text_domain' ),
		'view_item'             => __( 'View capabilities', 'text_domain' ),
		'view_items'            => __( 'View capabilitiess', 'text_domain' ),
		'search_items'          => __( 'Search capabilities', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into capabilities', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this capabilities', 'text_domain' ),
		'items_list'            => __( 'capabilitiess list', 'text_domain' ),
		'items_list_navigation' => __( 'capabilitiess list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter capabilitiess list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'capabilities', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'capabilities', $args );

}
add_action( 'init', 'cheeditha_capabilities_register_cpt', 0 );

?>