<?php
function texture_scripts() {
	wp_enqueue_style( 'texture-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.min.css', '', '4.2.12' );
	wp_enqueue_script( 'texture-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );

	wp_enqueue_style( 'texture-slick-css', get_template_directory_uri() . '/css/slick.css', '', '1.8.1' );
	wp_enqueue_style( 'texture-slicktheme-css', get_template_directory_uri() . '/css/slick-theme.css', '', '1.8.1' );
	wp_enqueue_script( 'texture-slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.1', true );
	

	if (is_front_page()) {
		wp_enqueue_style( 'texture-fullPage', get_template_directory_uri() . '/css/fullpage.min.css', '', '3.0.5' );
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-effects-core');
		wp_enqueue_script( 'texture-fullPage', get_template_directory_uri() . '/js/fullpage.min.js', array('jquery'), '3.0.5', true );
		wp_enqueue_script( 'texture-home', get_template_directory_uri() . '/js/texture-home.js', array('jquery'), '1.0.7', true );
	}

	if (is_page_template('about.php')) {
		wp_enqueue_script( 'texture-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '1.1.6', true );
		wp_enqueue_script( 'texture-about', get_template_directory_uri() . '/js/texture-about.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('capabilities.php')) {
		wp_enqueue_script( 'texture-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '1.1.6', true );
		wp_enqueue_script( 'texture-services', get_template_directory_uri() . '/js/texture-services.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('content.php')) {
		wp_enqueue_script( 'texture-content', get_template_directory_uri() . '/js/texture-content.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('contact2.php')) {
		wp_enqueue_script( 'texture-contact2', get_template_directory_uri() . '/js/texture-contact2.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('services.php')) {
		wp_enqueue_script( 'texture-service', get_template_directory_uri() . '/js/texture-service.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('clients.php')) {
		wp_enqueue_script( 'texture-service', get_template_directory_uri() . '/js/texture-clients.js', array('jquery'), '1.0.4', true );
	}

	if (is_page_template('careers.php')) {
		wp_enqueue_script( 'texture-careers', get_template_directory_uri() . '/js/texture-careers.js', array('jquery'), '1.0.4', true );
	}

	if (is_post_type_archive('clients')) {
		wp_enqueue_script( 'texture-service', get_template_directory_uri() . '/js/texture-client.js', array('jquery'), '1.0.4', true );
	}

	if (is_404()) {
		wp_enqueue_script( 'texture-404', get_template_directory_uri() . '/js/texture-404.js', array('jquery'), '1.0.4', true );
	}

	wp_enqueue_style( 'texture-animate', get_template_directory_uri() . '/css/animate.min.css', '', '3.6.0' );
	wp_enqueue_style( 'texture-styles', get_stylesheet_uri(), '', '1.0.34' );
	wp_enqueue_style( 'texture-tweaks', get_template_directory_uri() . '/css/texture-tweaks.css', '', '3.6.0' );

	wp_enqueue_script( 'texture-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.1.3', true );
	wp_enqueue_script( 'texture-scripts', get_template_directory_uri() . '/js/texture-scripts.js', array('jquery'), '1.0.10', true );
}

add_action( 'wp_enqueue_scripts', 'texture_scripts' );

function texture_admin_style() {
    wp_register_style( 'texture-admin', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'texture-admin' );
}

add_action( 'admin_enqueue_scripts', 'texture_admin_style' );
?>