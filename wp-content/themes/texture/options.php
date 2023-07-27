<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'wpd-blog-simple'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_wpd
 */

function optionsframework_options() {
	$imagepath =  get_template_directory_uri() . '/images/';

	add_filter('of_recognized_font_faces', 'wpd_google_fonts_list');

	function wpd_google_fonts_list($defaults){
		$mine = array(
			'droid_sans' => 'Droid Sans',
			'open_sans' => 'Open Sans',
			'oswald' => 'Oswald',
			'pt_sans' => 'PT Sans',
			'lato' => 'Lato',
			'raleway' => 'Raleway',
			'ubuntu' => 'Ubuntu'
		);
		
		return $mine;
	}

	add_filter('of_recognized_font_styles', 'wpd_google_fonts_styles');

	function wpd_google_fonts_styles($defaults){
		$mine = array(
			'300' => 'Light',
			'400' => 'Normal',
			'700' => 'Bold'
		);
		
		return $mine;
	}

	$typography_defaults = array(
		'size' => '16px',
		'face' => 'open_sans',
		'style' => '400',
		'color' => '#3f444a'
	);

	$typography_defaults_bloghead = array(
		'size' => '24px',
		'face' => 'open_sans',
		'style' => '400',
		'color' => '#111111'
	);

	$typography_defaults_bloghead_single = array(
		'size' => '32px',
		'face' => 'open_sans',
		'style' => '400',
		'color' => '#111111'
	);

	$typography_defaults_h1 = array(
		'size' => '28px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_h2 = array(
		'size' => '24px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_h3 = array(
		'size' => '22px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_h4 = array(
		'size' => '20px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_h5 = array(
		'size' => '16px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_h6 = array(
		'size' => '14px',
		'face' => 'open_sans',
		'style' => '400'
	);

	$typography_defaults_sidebar = array(
		'size' => '24px',
		'face' => 'open_sans',
		'style' => '400',
		'color' => '#111111'
	);

	$posts_per_page = array(
		'6' => __( '6', 'wpd-blog-simple' ),
		'9' => __( '9', 'wpd-blog-simple' ),
		'12' => __( '12', 'wpd-blog-simple' ),
		'15' => __( '15', 'wpd-blog-simple' ),
		'18' => __( '18', 'wpd-blog-simple' ),
		'21' => __( '21', 'wpd-blog-simple' ),
		'24' => __( '24', 'wpd-blog-simple' ),
		'27' => __( '27', 'wpd-blog-simple' ),
		'30' => __( '30', 'wpd-blog-simple' ),
		'33' => __( '33', 'wpd-blog-simple' )
	);

	$options = array();

	$options[] = array(
		'name' => __( 'General Settings', 'wpd-blog-simple' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Logo', 'wpd-blog-simple' ),
		'id' => 'wpd_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => "Color Base",
		'id' => "color_base",
		'std' => "color_red",
		'type' => "images",
		'options' => array(
			'color_red' => $imagepath . 'color-red.png',
			'color_blue' => $imagepath . 'color-blue.png',
			'color_green' => $imagepath . 'color-green.png',
			'color_brown' => $imagepath . 'color-brown.png',
			'color_black' => $imagepath . 'color-black.png',
		)
	);

	$options[] = array(
		'name' => __( 'Background Color', 'wpd-blog-simple' ),
		'id' => 'site_background',
		'std' => '#FFFFFF',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Header/Footer Background', 'wpd-blog-simple' ),
		'id' => 'site_header_footer',
		'std' => '#1F1E23',
		'type' => 'color'
	);

	$options[] = array( 'name' => __( 'Paragraph Font', 'wpd-blog-simple' ),
		'id' => "site_font",
		'std' => $typography_defaults,
		'type' => 'typography'
	);

	$options[] = array( 'name' => __( 'Blog Headings (Archive Pages)', 'wpd-blog-simple' ),
		'id' => "site_bloghead_font",
		'std' => $typography_defaults_bloghead,
		'type' => 'typography'
	);

	$options[] = array( 'name' => __( 'Blog Headings (Single Post Pages)', 'wpd-blog-simple' ),
		'id' => "site_bloghead_single_font",
		'std' => $typography_defaults_bloghead_single,
		'type' => 'typography'
	);

	$options[] = array( 'name' => __( 'H1 Font', 'wpd-blog-simple' ),
		'id' => "site_head1_font",
		'std' => $typography_defaults_h1,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'H2 Font', 'wpd-blog-simple' ),
		'id' => "site_head2_font",
		'std' => $typography_defaults_h2,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'H3 Font', 'wpd-blog-simple' ),
		'id' => "site_head3_font",
		'std' => $typography_defaults_h3,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'H4 Font', 'wpd-blog-simple' ),
		'id' => "site_head4_font",
		'std' => $typography_defaults_h4,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'H5 Font', 'wpd-blog-simple' ),
		'id' => "site_head5_font",
		'std' => $typography_defaults_h5,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'H6 Font', 'wpd-blog-simple' ),
		'id' => "site_head6_font",
		'std' => $typography_defaults_h6,
		'type' => 'typography',
		'options' => array(
			'color' => false
		)
	);

	$options[] = array( 'name' => __( 'Sidebar Heading Font', 'wpd-blog-simple' ),
		'id' => "site_sidehead_font",
		'std' => $typography_defaults_sidebar,
		'type' => 'typography'
	);

	$options[] = array(
		'name' => __( 'Home Page & Category Page', 'wpd-blog-simple' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => "Archive Pages Layout",
		'id' => "home_layout",
		'std' => "full_width",
		'type' => "images",
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png'
		)
	);

	$options[] = array(
		'name' => "Posts Layout",
		'id' => "home_post_layout",
		'std' => "home_grid",
		'type' => "images",
		'options' => array(
			'home_standard' => $imagepath . 'home-standard.png',
			'home_grid' => $imagepath . 'home-grid.png',
			'home_textless' => $imagepath . 'home-textless.png',
			'home_sorting' => $imagepath . 'home-sorting.png',
			'home_infinite' => $imagepath . 'home-infinite.png'
		)
	);

	$options[] = array(
		'name' => "Category Post Layout",
		'id' => "category_post_layout",
		'std' => "category_grid",
		'type' => "images",
		'options' => array(
			'category_standard' => $imagepath . 'home-standard.png',
			'category_grid' => $imagepath . 'home-grid.png',
			'category_textless' => $imagepath . 'home-textless.png',
			'category_infinite' => $imagepath . 'home-infinite.png'
		)
	);

	$options[] = array(
		'name' => "Tag Post Layout",
		'id' => "tag_post_layout",
		'std' => "tag_grid",
		'type' => "images",
		'options' => array(
			'tag_standard' => $imagepath . 'home-standard.png',
			'tag_grid' => $imagepath . 'home-grid.png',
			'tag_textless' => $imagepath . 'home-textless.png',
			'tag_infinite' => $imagepath . 'home-infinite.png'
		)
	);

	$options[] = array(
		'name' => __( 'Number of Posts per page', 'wpd-blog-simple' ),
		'id' => 'posts_per_page',
		'std' => '18',
		'type' => 'select',
		'options' => $posts_per_page
	);

	$options[] = array(
		'name' => __( 'Social Media', 'wpd-blog-simple' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Enable Sharing', 'wpd-blog-simple' ),
		'id' => 'enable_sharing',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Facebook Link', 'wpd-blog-simple' ),
		'id' => 'facebook_url',
		'placeholder' => 'Enter your Facebook Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Twitter Link', 'wpd-blog-simple' ),
		'id' => 'twitter_url',
		'placeholder' => 'Enter your Twitter Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Google Plus Link', 'wpd-blog-simple' ),
		'id' => 'gplus_url',
		'placeholder' => 'Enter your Google Plus Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Instagram Link', 'wpd-blog-simple' ),
		'id' => 'instagram_url',
		'placeholder' => 'Enter your Instagram Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Pinterest Link', 'wpd-blog-simple' ),
		'id' => 'pinterest_url',
		'placeholder' => 'Enter your Pinterest Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'YouTube Link', 'wpd-blog-simple' ),
		'id' => 'youtube_url',
		'placeholder' => 'Enter your YouTube Page URL here',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'About the Author', 'wpd-blog-simple' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Author Image', 'wpd-blog-simple' ),
		'id' => 'wpd_author_image',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Heading', 'wpd-blog-simple' ),
		'id' => 'wpd_author_heading',
		'placeholder' => '',
		'std' => 'About the Author',
		'type' => 'text'
	);

	$wp_editor_settings = array(
		'wpautop' => true,
		'textarea_rows' => 10,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Author Content', 'wpd-blog-simple' ),
		'id' => 'wpd_author_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}