<?php
if ( ! function_exists( 'texture_setup' ) ) :

function texture_setup() {
	load_theme_textdomain( 'texture', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'texture' ),
		'footer_menu' => esc_html__( 'Footer Menu', 'texture' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	$GLOBALS['content_width'] = apply_filters( 'texture_content_width', 1000 );
}

add_action( 'after_setup_theme', 'texture_setup' );

endif;

require get_template_directory() . '/inc/theme-sidebars.php';

require get_template_directory() . '/inc/theme-scripts.php';

require get_template_directory() . '/inc/extras.php';