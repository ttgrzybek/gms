<?php

/**
 * Registers the `branch` taxonomy,
 * for use with 'client'.
 */
function branch_init() {
	register_taxonomy( 'branch', array( 'client' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Branches', 'hg' ),
			'singular_name'              => _x( 'Branch', 'taxonomy general name', 'hg' ),
			'search_items'               => __( 'Search Branches', 'hg' ),
			'popular_items'              => __( 'Popular Branches', 'hg' ),
			'all_items'                  => __( 'All Branches', 'hg' ),
			'parent_item'                => __( 'Parent Branch', 'hg' ),
			'parent_item_colon'          => __( 'Parent Branch:', 'hg' ),
			'edit_item'                  => __( 'Edit Branch', 'hg' ),
			'update_item'                => __( 'Update Branch', 'hg' ),
			'view_item'                  => __( 'View Branch', 'hg' ),
			'add_new_item'               => __( 'New Branch', 'hg' ),
			'new_item_name'              => __( 'New Branch', 'hg' ),
			'separate_items_with_commas' => __( 'Separate branches with commas', 'hg' ),
			'add_or_remove_items'        => __( 'Add or remove branches', 'hg' ),
			'choose_from_most_used'      => __( 'Choose from the most used branches', 'hg' ),
			'not_found'                  => __( 'No branches found.', 'hg' ),
			'no_terms'                   => __( 'No branches', 'hg' ),
			'menu_name'                  => __( 'Branches', 'hg' ),
			'items_list_navigation'      => __( 'Branches list navigation', 'hg' ),
			'items_list'                 => __( 'Branches list', 'hg' ),
			'most_used'                  => _x( 'Most Used', 'branch', 'hg' ),
			'back_to_items'              => __( '&larr; Back to Branches', 'hg' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'branch',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'branch_init' );

/**
 * Sets the post updated messages for the `branch` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `branch` taxonomy.
 */
function branch_updated_messages( $messages ) {

	$messages['branch'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Branch added.', 'hg' ),
		2 => __( 'Branch deleted.', 'hg' ),
		3 => __( 'Branch updated.', 'hg' ),
		4 => __( 'Branch not added.', 'hg' ),
		5 => __( 'Branch not updated.', 'hg' ),
		6 => __( 'Branches deleted.', 'hg' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'branch_updated_messages' );
