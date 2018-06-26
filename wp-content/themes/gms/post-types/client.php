<?php

/**
 * Registers the `client` post type.
 */
function client_init() {
	register_post_type( 'client', array(
		'labels'                => array(
			'name'                  => __( 'Clients', 'hg' ),
			'singular_name'         => __( 'Client', 'hg' ),
			'all_items'             => __( 'All Clients', 'hg' ),
			'archives'              => __( 'Client Archives', 'hg' ),
			'attributes'            => __( 'Client Attributes', 'hg' ),
			'insert_into_item'      => __( 'Insert into client', 'hg' ),
			'uploaded_to_this_item' => __( 'Uploaded to this client', 'hg' ),
			'featured_image'        => _x( 'Featured Image', 'client', 'hg' ),
			'set_featured_image'    => _x( 'Set featured image', 'client', 'hg' ),
			'remove_featured_image' => _x( 'Remove featured image', 'client', 'hg' ),
			'use_featured_image'    => _x( 'Use as featured image', 'client', 'hg' ),
			'filter_items_list'     => __( 'Filter clients list', 'hg' ),
			'items_list_navigation' => __( 'Clients list navigation', 'hg' ),
			'items_list'            => __( 'Clients list', 'hg' ),
			'new_item'              => __( 'New Client', 'hg' ),
			'add_new'               => __( 'Add New', 'hg' ),
			'add_new_item'          => __( 'Add New Client', 'hg' ),
			'edit_item'             => __( 'Edit Client', 'hg' ),
			'view_item'             => __( 'View Client', 'hg' ),
			'view_items'            => __( 'View Clients', 'hg' ),
			'search_items'          => __( 'Search clients', 'hg' ),
			'not_found'             => __( 'No clients found', 'hg' ),
			'not_found_in_trash'    => __( 'No clients found in trash', 'hg' ),
			'parent_item_colon'     => __( 'Parent Client:', 'hg' ),
			'menu_name'             => __( 'Clients', 'hg' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'thumbnail' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'client',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'client_init' );

/**
 * Sets the post updated messages for the `client` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `client` post type.
 */
function client_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['client'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Client updated. <a target="_blank" href="%s">View client</a>', 'hg' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'hg' ),
		3  => __( 'Custom field deleted.', 'hg' ),
		4  => __( 'Client updated.', 'hg' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Client restored to revision from %s', 'hg' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Client published. <a href="%s">View client</a>', 'hg' ), esc_url( $permalink ) ),
		7  => __( 'Client saved.', 'hg' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Client submitted. <a target="_blank" href="%s">Preview client</a>', 'hg' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Client scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview client</a>', 'hg' ),
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Client draft updated. <a target="_blank" href="%s">Preview client</a>', 'hg' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'client_updated_messages' );
