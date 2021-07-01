<?php

add_action(	'after_setup_theme', 'testMenuReg');
function ziscod_scripts_styles() {
	$url = 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js';
	$test_url = @fopen($url,'r');
	if( $test_url !== false ) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', $url);
		wp_enqueue_script('jquery');
	} else {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.11.2.min.js',  __FILE__, false, '1.11.2', true);
		wp_enqueue_script('jquery');
	}
}
add_action( 'wp_enqueue_scripts', 'ziscod_scripts_styles' );

function testMenuReg() {
    register_nav_menu( 'top', 'Header menu' );
    register_nav_menu( 'bottom', 'Footer menu' );
	register_nav_menu( 'bottomCustom', 'Footer menu custom' );
	add_theme_support( 'post-thumbnails', array( 'post', 'movies') ); 
	
};

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'movies', [
		'label'  => null,
		'labels' => [
			'name'               => 'prodmoviesucts',
			'singular_name'      => 'movies', 
			'add_new'            => 'Add new movies', 
			'add_new_item'       => 'Adding new movies', 
			'edit_item'          => 'Edit movies', 
			'new_item'           => 'New movies', 
			'view_item'          => 'View movies',
			'search_items'       => 'Search movies', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in a basket', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'movies', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_rest'        => true, 
		'rest_base'           => null, 
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-location-alt',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ,'excerpt'],
		'taxonomies'          => [ 'category'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
    }



?>