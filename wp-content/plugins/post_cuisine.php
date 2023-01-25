<?php
/*
Plugin Name: Recettes de cuisine
Plugin URI: http://localhost/wordpress/plugins/
Description: Ajout d'un nouveau type de contenus pour publier des recettes de cuisine 
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

// Fonction callback
function create_posttype() {
 
register_post_type( 'cuisine',
// Options
	array(
		'labels' => array(
			'name' => __( 'Recettes de cuisine' ),
			'singular_name' => __( 'Recette de cuisine' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'cuisine'),
		'show_in_rest' => true,
		)
	);
}

// ajout Hook WordPress
add_action( 'init', 'create_posttype' );