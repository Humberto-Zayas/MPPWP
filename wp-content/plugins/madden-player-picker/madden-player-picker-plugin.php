<?php
/*
Plugin Name: Madden-Player-Picker
Description: Site specific code changes for Madden Player Picker
*/
/* Start Adding Functions Below this Line */

/*
* Setting Up Custom Post Type for Madden Plays 
*/

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Plays', 'Post Type General Name' ),
		'singular_name'       => _x( 'Play', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Plays' ),
		'parent_item_colon'   => __( 'Parent Movie' ),
		'all_items'           => __( 'All Plays' ),
		'view_item'           => __( 'View Play' ),
		'add_new_item'        => __( 'Add New Plays' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Play' ),
		'update_item'         => __( 'Update Play' ),
		'search_items'        => __( 'Search Play' ),
		'not_found'           => __( 'Not Found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'plays'),
		'description'         => __( 'Madden Plays from Playbooks' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'formation', 'rating', 'playbook' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'plays', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );



/* Stop Adding Functions Below this Line */
