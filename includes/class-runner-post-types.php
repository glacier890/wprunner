<?php
	class runner_post_types {

		public function __construct(){
			add_action('init', array($this, 'my_custom_posttypes'));
		}
		public function my_custom_posttypes() {

	    $labels = array(
	        'name'               => 'Runners',
	        'singular_name'      => 'Runners',
	        'menu_name'          => 'Runners',
	        'name_admin_bar'     => 'Runners',
	        'add_new'            => 'Add New',
	        'add_new_item'       => 'Add New Runner',
	        'new_item'           => 'New Runner',
	        'edit_item'          => 'Edit Runner',
	        'view_item'          => 'View Runners',
	        'all_items'          => 'All Runners',
	        'search_items'       => 'Search Runners',
	        'parent_item_colon'  => 'Parent Runner:',
	        'not_found'          => 'No Runners found.',
	        'not_found_in_trash' => 'No Runner found in Runners.',
	    );

	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'menu_icon'          => 'dashicons-id-alt',
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'Runners' ),
	        'capability_type'    => 'post',
	        'has_archive'        => false,
	        'hierarchical'       => true,
	        'menu_position'      => 5,
	        'supports'           => array( 'title', 'editor', 'thumbnail' )
	    );
	    register_post_type( 'Runners', $args );
	}

}

global $wprunner_post_types;

$wprunner_post_types = new runner_post_types();


?>
