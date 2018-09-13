<?php
/**
 * Karen Moore functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * @package Karen Moore
 * @since Karen Moore 1.0
 *
 *  */


if ( ! function_exists( 'karen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs before the init hook. The init hook is too late for some features, such as indicating support for post thumbnails
	 */
	function karen_setup() {
		/**
		 * Make theme available for translation.
		 * Translations can be filed in the /language/ directory.
		 * If you're building a theme based on enstilar, use a find and replace to change 'steal-concealment' to the name of your theme in all the template files
		 */
		load_theme_textdomain('karen', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action('after_setup_theme', 'karen_setup');

/**
 * Load enstilar Styles
 */

function karen_styles() {

	// wp_enqueue_style('bootstrap_reboot_css', get_template_directory_uri() . '/css/utilities/bootstrap/scss/bootstrap-reboot.css');
	wp_enqueue_style('bootstrap_grid_css', get_template_directory_uri() . '/css/utilities/bootstrap/scss/bootstrap-grid.css');
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/utilities/bootstrap/scss/bootstrap.css');
	wp_enqueue_style('tachyons_css', get_template_directory_uri() . '/css/utilities/tachyons-sass/tachyons.css');

	// wp_enqueue_style('twentytwenty_css', get_template_directory_uri() . '/dependencies/twentytwenty/css/twentytwenty.css');

	// wp_enqueue_style('select2_css', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css');
	// wp_enqueue_style('chosen_css', get_template_directory_uri() . '/dependencies/chosen/chosen.min.css');\
	//

	/* UI Components: Dropdown, Transitions (dropdown selectors)*/
	wp_enqueue_style('ui_transition_css', get_template_directory_uri() . '/dependencies/UI-Transition-master/transition.min.css');
	wp_enqueue_style('ui_dropdown_css', get_template_directory_uri() . '/dependencies/UI-Dropdown-master/dropdown.min.css');

	/* SlickJS CSS */
	// wp_enqueue_style('slickJS_css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	/* Flickity (sliders) */
	wp_enqueue_style('flickity_css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');

	/*
	Main Styles
	 */
	wp_enqueue_style('all_styles', get_template_directory_uri(). '/css/styles.css');

	/* Load our main stylesheet */
	wp_enqueue_style( 'main_css', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'enstilar_styles');

/**
 * Load enstilar Scripts
 */

function karen_scripts() {

	/* Register htmlshiv & respondjs for ie9 */

	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/build/modernizr-custom.js', array(), '', false);
	wp_enqueue_script('dectectizr_js', get_template_directory_uri() . '/dependencies/detectizr.min.js', array('modernizr_js'), '', false);

	wp_enqueue_script('blazy_js', get_template_directory_uri() . '/dependencies/blazy.min.js', array('jquery'), '', true);
	wp_enqueue_script('match_height', get_template_directory_uri() . '/dependencies/jquery-match-height/jquery.matchHeight.js', array('jquery'), '', true);

	// wp_enqueue_scripts('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/dependencies/bootstrap.min.js', array('jquery'), '', true);


	/* UI Components: Dropdown, Transitions*/
	wp_enqueue_script('ui_transitions_js', get_template_directory_uri() . '/dependencies/UI-Transition-master/transition.min.js', array('jquery'), '', true);


	wp_enqueue_script('ui_dropdown_js', get_template_directory_uri() . '/dependencies/UI-Dropdown-master/dropdown.min.js', array('jquery', 'ui_transitions_js'), '', true);


	wp_enqueue_script('smoothstate_js', get_template_directory_uri() . '/dependencies/jquery.smoothState.min.js', array('jquery'), '', true);
	wp_enqueue_script('fitvids_js', get_template_directory_uri() . '/dependencies/jquery.fitvids.js', array('jquery'), '', true);

	/* Slick JS */


	// wp_enqueue_script('slickJS_js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '', true);

	// wp_enqueue_script('slide_js', get_template_directory_uri() . '/dependencies/jquery.slides.min.js', array('jquery'), '', true);

	/* Flickity */
	wp_enqueue_script('flickity_js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), '', true);

	// /* Image Comparison Slider */
	// wp_enqueue_script('jquery_move', get_template_directory_uri() . '/dependencies/twentytwenty/js/jquery.event.move.js', array('jquery'), '', true);
	// wp_enqueue_script('twentytwenty_js', get_template_directory_uri() . '/dependencies/twentytwenty/js/jquery.twentytwenty.js', array('jquery', 'jquery_move'), '', true);

	/**
	 * Custom Scripts
	 */

	wp_enqueue_script('main_js', get_template_directory_uri() . '/scripts/min/app.js', array('jquery'), '', true);
	// wp_enqueue_script('menu_js', get_template_directory_uri() . '/scripts/min/menu.js', array('jquery'), '', true);
	//
	// wp_enqueue_script('map_js', get_template_directory_uri() . '/scripts/min/map.js', array('jquery'), '', true);
	// wp_enqueue_script('smoothstate-custom_js', get_template_directory_uri() . '/scripts/min/smoothstate-custom.js', array('jquery', 'smoothstate_js'), '', true);



}
add_action('wp_enqueue_scripts', 'karen_scripts');

/**
 * Load Font Awesome Pro CSS and JS
 */
function karen_hook_fontawesome() {
	?>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">

	<script defer src="https://pro.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-E5SpgaZcbSJx0Iabb3Jr2AfTRiFnrdOw1mhO19DzzrT9L+wCpDyHUG2q07aQdO6E"  data-auto-replace-svg="nest" crossorigin="anonymous"></script>
	<?php
}
add_action('wp_head', 'karen_hook_fontawesome');


/**
 * Add Theme Support for Menus and Setup Menus
 * Uses Bootstrap Navwalker
 */
require_once('class-wp-bootstrap-navwalker.php');

add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus (
		array(
			'main-nav'     => __('Main Navigation', 'enstilar'),
		)
	);
}

add_action('init', 'register_theme_menus');



/**
 * Add Tag support and ensure tags are included in queries
 */

function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

add_action('init', 'tags_support_all');


/**
 * Add Category support to pages
 */

function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_taxonomies_to_pages' );

/**
 * Add Widget Support
 */
function create_widget($name, $id, $description) {
	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}

/**
 * Remove Unnecessary Image Sizes
 */

function karen_remove_default_image_sizes() {
	remove_image_size('medium');
	remove_image_size('medium_large');
	remove_image_size('large');
}
add_action('init', 'karen_remove_default_image_sizes');

/**
 * Add SVG Image Support
 */


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Advanced Custom Field Options
 * * Add Custom Columns
 */


//Add the columns for the "interactive_map" post type

// add_filter( 'manage_posts_columns', 'enstilar_add_custom_post_columns', 10, 2 );

// function enstilar_add_custom_post_columns( $columns, $post_type ) {
//    switch ( $post_type ) {
//       case 'interactive_map':
//          $new_columns = array();
//          foreach( $columns as $key => $value ) {
//             $new_columns[ $key ] = $value;
//             if ( $key == 'title' )

//                $new_columns[ 'svg_state_code' ] = 'State Code';
//          }
//          return $new_columns;
//    }
//    return $columns;
// }

// add_action( 'manage_posts_custom_column', 'enstilar_populating_my_posts_columns', 10, 2 );
// function enstilar_populating_my_posts_columns( $column_name, $post_id ) {
// $field = get_field_object('svg_state_code');
// $field = $field['value'];
// // $field = $field['label'];
//    switch( $column_name ) {

//       case 'svg_state_code':
//          echo '<div id="svg_state_code-' . $post_id . '">' . get_post_meta( $post_id, 'svg_state_code' , true ) . '</div>';
//          break;
//    }
// }



/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));



	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}



add_filter( 'gform_submit_button_1', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
  return "<button class='submit-button' id='gform_submit_button_{$form['id']}'><i class='far fa-envelope'></i> Send Message</button>";
}

// Relevanssi add content to custom excerpts.
add_filter('relevanssi_excerpt_content', 'custom_fields_to_excerpts', 10, 3);
function custom_fields_to_excerpts($content, $post, $query) {

		$custom_fields = get_post_custom_keys($post->ID);
		$remove_underscore_fields = true;

		if (is_array($custom_fields)) {
			$custom_fields = array_unique($custom_fields);	// no reason to index duplicates
			foreach ($custom_fields as $field) {
				if ($remove_underscore_fields) {
					if (substr($field, 0, 1) == '_') continue;
				}
				$values = get_post_meta($post->ID, $field, false);
				if ("" == $values) continue;
				foreach ($values as $value) {
					if ( !is_array ( $value ) ) {

						$content .= " " . $value;
					}
				}
			}
		}

    return $content;
}

?>
