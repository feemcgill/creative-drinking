<?php
/**
 * adp functions and definitions
 *
 * @package adp
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'adp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function adp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on adp, use a find and replace
	 * to change 'adp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'adp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'adp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'adp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // adp_setup
add_action( 'after_setup_theme', 'adp_setup' );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function adp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'adp' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'adp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function adp_scripts() {
	wp_enqueue_style( 'adp-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'adp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri().'/css/caslon.css' );


	// jquery
	wp_deregister_script('jquery');

	// wp_enqueue_script('device', get_template_directory_uri() . '/js/device.js', array());
	// wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'));
	// wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'));
	// wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'));
	// wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'));
	// wp_enqueue_script('waypoints-sticky', get_template_directory_uri() . '/js/waypoints-sticky.min.js', array('jquery','waypoints'));
	// wp_enqueue_script('easing', get_template_directory_uri() . '/js/easing.js', array('jquery'));

	wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js', array('jquery'));
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','vendor'));
	wp_enqueue_script('cd', get_template_directory_uri() . '/js/cd.js', array('jquery','vendor','scripts'));

	wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js');
	wp_enqueue_script('jquery');

	// angular
	// wp_enqueue_script('angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js', array(), null, false);
    // wp_enqueue_script('angular-route',  get_template_directory_uri() . '/js/angular.ui-router.js', array('angular-core'));    
	// wp_enqueue_script('angular-sanatize',  get_template_directory_uri() . '/js/sanatize.js', array('angular-core'));
	// wp_enqueue_script('angular-truncate',  get_template_directory_uri() . '/js/angular-truncate.js', array('angular-core'));
	// wp_enqueue_script('angular-is', get_template_directory_uri() .'/js/ng-is.js', array('angular-core'), null, false);
	// register our app.js, which has a dependency on angular-core
	// wp_enqueue_script('angular-app', get_template_directory_uri() .'/js/app.js', array('angular-core','angular-sanatize'), null, false);
    // also add controllers!
	
	// CREATE VARIABLES FOR JSON API / ANGULAR we need to create a JavaScript variable to store our API endpoint...   
	// wp_localize_script( 'angular-core', 'AppAPI', array( 'url' => get_bloginfo('wpurl').'/api/') ); // this is the API address of the JSON API plugin
	// ... and useful information such as the theme directory and website url
	//wp_localize_script( 'angular-core', 'BlogInfo', array( 'url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl')) );

}
add_action( 'wp_enqueue_scripts', 'adp_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


add_theme_support( 'post-thumbnails' );
add_filter('show_admin_bar', '__return_false');
// add_image_size( 'lilguy', 120, 120, true ); 


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
// ********* CREATE A CUSTOM POST TYPE *********


function adp_CUSTOMPOSTTYPE_init() {
	
	register_post_type('XXX',
		array(
			'labels' => array(
				'name' => __('XXX'),
				'singular_name' => __('XXX'),
				'add_new' => _x('Add New', 'XXX'),
				'add_new_item' => __('Add New XXX'),
				'edit_item' => __('Edit XXX'),
				'new_item' => __('New XXX'),
				'all_items' => __('All XXX'),
				'view_item' => __('View XXX'),
				'search_items' => __('Search XXX'),
				'not_found' =>	__('No XXX found'),
				'not_found_in_trash' => __('No XXX in Trash'), 
				'parent_item_colon' => '',
				'menu_name' => 'XXX'
			),
			'menu_position' => 7,
			'public' => true,
			'has_archive' => true,
			'hierarchical'       => true,			
			'exclude_from_search' => false,
			'rewrite' => array('slug' => 'XXX'),
			'supports' => array('title', 'thumbnail','editor'),
			// 'taxonomies' => array()
		)
	);

}
add_action('init', 'adp_CUSTOMPOSTTYPE_init');
*/











/*
// ********* CREATE CUSTOM TAXONOMIES *********

function create_adp_taxonomies() {
	$labels = array(
		'name'              => _x( 'CUSTOM_TAXONOMY', 'taxonomy general name' ),
		'singular_name'     => _x( 'CUSTOM_TAXONOMY', 'taxonomy singular name' ),
		'search_items'      => __( 'Search CUSTOM_TAXONOMYs' ),
		'all_items'         => __( 'All CUSTOM_TAXONOMYs' ),
		'parent_item'       => __( 'Parent CUSTOM_TAXONOMY' ),
		'parent_item_colon' => __( 'Parent CUSTOM_TAXONOMY:' ),
		'edit_item'         => __( 'Edit CUSTOM_TAXONOMY' ),
		'update_item'       => __( 'Update CUSTOM_TAXONOMY' ),
		'add_new_item'      => __( 'Add New CUSTOM_TAXONOMY' ),
		'new_item_name'     => __( 'New CUSTOM_TAXONOMY Name' ),
		'menu_name'         => __( 'CUSTOM_TAXONOMYs' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'CUSTOM_TAXONOMYs' ),
	);

register_taxonomy( 'CUSTOM_TAXONOMY', array('POSTTYPE'), $args );

}

add_action( 'init', 'create_adp_taxonomies', 0 );
*/





/*
// ********* SAVE A TAXONOMY AND CREATE A POST OF THE SAME NAME (slugs can sometimes be different!) *********

function add_title_as_category( $postid ) {
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
  $post = get_post($postid);
  if ( $post->post_type == 'POST TYPE') { // change 'post' to any cpt you want to target
    $term = get_term_by('slug', $post->post_name, 'TAX TYPE');
    if ( empty($term) ) {
      $add = wp_insert_term( $post->post_title, 'TAX TYPE', array('slug'=> $post->post_name) );
      if ( is_array($add) && isset($add['term_id']) ) {
        wp_set_object_terms($postid, $add['term_id'], 'TAX TYPE', true );
      }
    }
  }
}

add_action('save_post', 'add_title_as_category');

*/










/*

// ********* SAVE JSON/API DATA AS TRANSIENT DATA *********


define( 'HOURS', 60 * 60 );

function get_api_info( ) {
    global $apiInfox; // Check if it's in the runtime cache (saves database calls)
    if( empty($apiInfox) ) $apiInfox = get_transient('work_api_return'); // Check database (saves expensive HTTP requests)
    if( !empty($apiInfox) ) return $apiInfox;

    $response = wp_remote_get(get_site_url() . '/api/?count=-1&json=get_posts&page=1&post_type=work', array( 'timeout' => 12000, 'httpversion' => '1.1' ) );
    $data = wp_remote_retrieve_body($response);

   //if( empty($data) ) return false;

    $apiInfox = json_decode($data); // Load data into runtime cache
    set_transient( 'work_api_return', $apiInfox, 1 * HOURS ); // Store in database for up to 12 hours
    return $apiInfox;
}
*/









/*

// ********* UPDATE TRANSIENT DATA ON POST SAVE *********

function update_transient ($post_id) {
	delete_transient('work_api_return');
	get_api_info();
}
add_action( 'save_post_POSTTYPE', 'update_transient' );

*/









// ********* INSERT FACEBOOK OPEN GRAPH TAGS IN HEAD *********

	/*	

function insert_fb_in_head() {
	global $post;
	if ( !is_singular())
		return;
        echo '
<meta property="og:title" content="' . get_the_title() . '"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="' . get_permalink() . '"/>
<meta property="og:site_name" content="'.get_bloginfo('name').'"/>';
	if(!has_post_thumbnail( $post->ID )) { 
    $defaultThumb = wp_get_attachment_image_src( get_post_thumbnail_id(22), 'medium' );
            $defaultThumbUrl = $defaultThumb['0'];
			echo '
<meta property="og:image" content="' . $defaultThumbUrl . '"/>

'; 
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '
<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>
<meta property="og:image:width" content="' . esc_attr( $thumbnail_src[1] ) . '"/>
<meta property="og:image:height" content="' . esc_attr( $thumbnail_src[2] ) . '"/>
';
	}
	echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

*/

