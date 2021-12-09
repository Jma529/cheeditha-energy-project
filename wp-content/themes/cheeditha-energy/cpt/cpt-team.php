<?php

// Register Custom Post Type
function cheeditha_team_register_cpt() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'People', 'text_domain' ),
		'name_admin_bar'        => __( 'People', 'text_domain' ),
		'archives'              => __( 'Team Archives', 'text_domain' ),
		'attributes'            => __( 'Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Team:', 'text_domain' ),
		'all_items'             => __( 'All Team members', 'text_domain' ),
		'add_new_item'          => __( 'Add New Team Member', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Team Member', 'text_domain' ),
		'edit_item'             => __( 'Edit Team member', 'text_domain' ),
		'update_item'           => __( 'Update Team member', 'text_domain' ),
		'view_item'             => __( 'View Team member', 'text_domain' ),
		'view_items'            => __( 'View Team members', 'text_domain' ),
		'search_items'          => __( 'Search Team member', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Team member', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'text_domain' ),
		'items_list'            => __( 'Team members list', 'text_domain' ),
		'items_list_navigation' => __( 'Team members list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter team members list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'Team', $args );

}
add_action( 'init', 'cheeditha_team_register_cpt', 0 );

// // Register a new column in admin list view for menu order
// function cheeditha_team_cpt_admin_table_column( $defaults ) {
	
// 	$new_order = array();

// 	foreach( $defaults as $key=>$value ) {
// 		if( $key=='date' ) {  // When we find the date column
// 			$new_order['menu_order'] = 'Order'; // Slip in the new column before it
// 		}
// 		$new_order[$key] = $value;
// 	}

// 	return $new_order;
// }
// add_filter( 'manage_' . 'cheeditha_team_register_cpt' . '_posts_columns', 'cheeditha_team_cpt_admin_table_column' );

// // Return the menu order in admin list view for each post
// function cheeditha_team_admin_table_content( $column_name, $post_id ) {
		
// 	global $post;
		
// 	if ( $column_name == 'menu_order' ) {
// 		$order = $post->menu_order;
// 		echo $order;
// 	}
// }
// add_action( 'manage_' . 'cheeditha_team_register_cpt'. '_posts_custom_column', 'cheeditha_team_admin_table_content', 10, 2 );


// // Make the admin menu order column sortable
// function cheeditha_team_admin_table_sortable( $columns ) {
// 	$columns['menu_order'] = 'menu_order';
// 	return $columns;
// }
// add_filter( 'manage_edit-' . 'cheeditha_team_register_cpt'. '_sortable_columns', 'cheeditha_team_admin_table_sortable' );

?>