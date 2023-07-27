<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package texture
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function texture_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'texture_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function texture_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'texture_pingback_header' );

function texture_disable_wp_emojicons() {
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}

add_action( 'init', 'texture_disable_wp_emojicons' );

function texture_client_post_type() {
	$labels = array(
		'name'               => _x( 'Clients', 'texture' ),
		'singular_name'      => _x( 'Client', 'texture' ),
		'add_new'            => _x( 'Add New', 'texture' ),
		'add_new_item'       => __( 'Add New Client', 'texture' ),
		'edit_item'          => __( 'Edit Client', 'texture' ),
		'new_item'           => __( 'New Client', 'texture' ),
		'all_items'          => __( 'All Client', 'texture' ),
		'view_item'          => __( 'View Client', 'texture' ),
		'search_items'       => __( 'Search Client', 'texture' ),
		'not_found'          => __( 'No Properties found', 'texture' ),
		'not_found_in_trash' => __( 'No Properties found in the Trash', 'texture' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Clients'
	);
	$args = array(
		'labels'        => $labels,
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);

	register_post_type( 'clients', $args );
}

add_action( 'init', 'texture_client_post_type' );

function texture_client_category() {
	register_taxonomy('client_category', 'clients', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Client Categories', 'texture' ),
			'singular_name' => _x( 'Client Category', 'texture' ),
			'search_items' =>  __( 'Search Client Categories', 'texture' ),
			'all_items' => __( 'All Client Categories', 'texture' ),
			'parent_item' => __( 'Parent Client Category', 'texture' ),
			'parent_item_colon' => __( 'Parent Client Category:', 'texture' ),
			'edit_item' => __( 'Edit Client Category', 'texture' ),
			'update_item' => __( 'Update Client Category', 'texture' ),
			'add_new_item' => __( 'Add New Client Category', 'texture' ),
			'new_item_name' => __( 'New Client Category Name', 'texture' ),
			'menu_name' => __( 'Client Categories', 'texture' ),
		),
	));
}

add_action( 'init', 'texture_client_category', 0 );

function texture_script_style_version( $src ) {
    if ( strpos( $src, 'ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    if ( strpos( $src, 'x54532' ) ) {
        $src = remove_query_arg( 'x54532', $src );
    }
    return $src;
}

add_filter( 'style_loader_src', 'texture_script_style_version', 1000 );
add_filter( 'script_loader_src', 'texture_script_style_version', 1000 );