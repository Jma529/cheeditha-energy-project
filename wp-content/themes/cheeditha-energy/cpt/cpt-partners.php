<?php

// Register Custom Post Type
function cheeditha_partners_register_cpt() {

	$labels = array(
		'name'                  => _x( 'Partner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partners', 'text_domain' ),
		'name_admin_bar'        => __( 'Partners', 'text_domain' ),
		'archives'              => __( 'Partner Archives', 'text_domain' ),
		'attributes'            => __( 'Partner Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Partner:', 'text_domain' ),
		'all_items'             => __( 'All partners', 'text_domain' ),
		'add_new_item'          => __( 'Add New Partner', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Partner', 'text_domain' ),
		'edit_item'             => __( 'Edit Partner', 'text_domain' ),
		'update_item'           => __( 'Update Partner', 'text_domain' ),
		'view_item'             => __( 'View Partner', 'text_domain' ),
		'view_items'            => __( 'View partners', 'text_domain' ),
		'search_items'          => __( 'Search Partner', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Partner', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Partner', 'text_domain' ),
		'items_list'            => __( 'partners list', 'text_domain' ),
		'items_list_navigation' => __( 'partners list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter partners list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Partner', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'Partner', $args );

}
add_action( 'init', 'cheeditha_partners_register_cpt', 0 );

?>