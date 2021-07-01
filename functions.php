<?php

add_action(	'after_setup_theme', 'testMenuReg');
function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['post_type'] = 'movies';
	$args['paged'] = $_POST['page'] + 1;
	
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
			?>
				<div class="movie__card">
					<h3 class="movie__title">Название фильма: <?php the_title()?></h3>
					<p class="descript">Жанр: <?php the_field('genre')?></p>
					<p class="descript">Год выпуска: <?php the_field('year')?></p>
					<p class="descript">Режиссер: <?php the_field('author')?></p>
				</div>
			
			<?php
		endwhile;
	endif;
	wp_reset_postdata();
	die();

}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


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