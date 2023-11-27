<?php
$the_briefing_id         = 43; // the-briefing ID
$thinking_in_public_id   = 71; // thinking-in-public ID
$book_id                 = 4; // books-topics ID
$articles_id             = 1; //articles ID
$sermons_and_speeches_id = 31; // sermons-and-speeches ID
$aboutPage_id            = 4586; // About Page ID
$ask_anything_id         = 162;

$video_id = 90;
$audio_id = 11;


// Hero Article - Left
$home_article       = array(
	'posts_per_page' => 1,
	'cat'            => $the_briefing_id,
);
$home_article_query = new WP_Query( $home_article );

// Hero Article - Right and Article Seciton Left
$thinking_in_public       = array(
	'posts_per_page' => 1,
	'cat'            => $thinking_in_public_id,
);
$thinking_in_public_query = new WP_Query( $thinking_in_public );

// Hero Article - Right Book
$book       = array(
	'posts_per_page' => 1,
	'cat'            => $book_id,
);
$book_query = new WP_Query( $book );

// Thinking in public Section 
$thinking_in_public_4       = array(
	'posts_per_page' => 4,
	'offset'         => 1,
	'cat'            => $thinking_in_public_id,
);
$thinking_in_public_query_4 = new WP_Query( $thinking_in_public_4 );

// Article Section - Left
$articles_public = array(
	'posts_per_page' => 1,
	'cat'            => $articles_id,
);
$articles_query  = new WP_Query( $articles_public );

// Article Section - Right
$articles_public_4 = array(
	'posts_per_page' => 3,
	'offset'         => 1,
	'cat'            => $articles_id,
);
$articles_query_4  = new WP_Query( $articles_public_4 );

// Speaking & Teaching - Left
$sermons_and_speeches_public = array(
	'posts_per_page' => 1,
	'cat'            => $sermons_and_speeches_id,
);
$sermons_and_speeches_query  = new WP_Query( $sermons_and_speeches_public );

// Speaking & Teaching - Right
$sermons_and_speeches_public_4 = array(
	'posts_per_page' => 4,
	'offset'         => 1,
	'cat'            => $sermons_and_speeches_id,
);
$sermons_and_speeches_query_4  = new WP_Query( $sermons_and_speeches_public_4 );

// Speaking & Teaching - Left
$ask_anything       = array(
	'posts_per_page' => 1,
	'cat'            => $ask_anything_id,
);
$ask_anything_query = new WP_Query( $ask_anything );


// About Page
$about_public = array(
	'page_id' => $aboutPage_id,
);
$about_query  = new WP_Query( $about_public );

function gorselImage( $id )
{
	return has_post_thumbnail( $id )
		? get_the_post_thumbnail_url( $id )
		: get_bloginfo( 'stylesheet_directory' ) . '/assets/images/brief-image.png';
}

function ConverToRoman( $num )
{
	$n   = intval( $num );
	$res = '';

	//array of roman numbers
	$romanNumber_Array = array(
		'M'  => 1000,
		'CM' => 900,
		'D'  => 500,
		'CD' => 400,
		'C'  => 100,
		'XC' => 90,
		'L'  => 50,
		'XL' => 40,
		'X'  => 10,
		'IX' => 9,
		'V'  => 5,
		'IV' => 4,
		'I'  => 1,
	);

	foreach ( $romanNumber_Array as $roman => $number ) {
		//divide to get  matches
		$matches = intval( $n / $number );

		//assign the roman char * $matches
		$res .= str_repeat( $roman, $matches );

		//substract from the number
		$n = $n % $number;
	}

	// return the result
	return $res;
}


function isMobile()
{
	return preg_match( "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
		$_SERVER["HTTP_USER_AGENT"] );
}

add_theme_support( 'custom-logo', array(
	//'height'      => 75,
	//'flex-height' => true,
	//'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
register_nav_menus(
	array(
		'primary'        => __( 'Main Menu', 'webwork' ),
		'top_menu'       => __( 'Top Menu', 'webwork' ),
		'donate_menu'    => __( 'Donate Menu', 'webwork' ),
		'social_menu'    => __( 'Social Menu', 'webwork' ),
		'copyright_menu' => __( 'Copyright Menu', 'webwork' ),
	)
);
add_filter( 'use_default_gallery_style', '__return_false' );

add_filter( 'the_content', 'remove_br_gallery' );

function remove_br_gallery( $output )
{
	return preg_replace( '/<br style=(.*)>/mi', '', $output );
}

add_theme_support( 'post-thumbnails' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter( 'wp_handle_upload_prefilter', 'dosya_tr_karakter_degistir' );
function dosya_tr_karakter_degistir( $file )
{
	$bul          = array( 'İ', 'Ü', 'Ğ', 'Ö', 'Ç', 'Ş', 'ş', 'ç', 'ö', 'ğ', 'ü', 'ı', ' ' );
	$degistir     = array( 'I', 'U', 'G', 'O', 'C', 'S', 's', 'c', 'o', 'g', 'u', 'i', '-' );
	$file['name'] = strtolower( str_replace( $bul, $degistir, $file['name'] ) );

	return $file;
}

add_filter( 'wp_title', 'filter_wp_title' );
/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses    get_bloginfo()
 * @uses    is_home()
 * @uses    is_front_page()
 */
function filter_wp_title( $title )
{
	global $page, $paged;
	if ( is_feed() ) {
		return $title;
	}
	$site_description = get_bloginfo( 'description' );
	$filtered_title   = $title . get_bloginfo( 'name' );
	$filtered_title   .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description : '';
	$filtered_title   .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

register_sidebar(
	array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	)
);
register_sidebar(
	array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	)
);
register_sidebar(
	array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	)
);
register_sidebar(
	array(
		'name'          => 'Footer Widget 4',
		'id'            => 'footer-4',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	)
);


/*
  wd - 11/17/2023
*/

add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );
function my_acf_json_save_point( $path )
{

	// update path
	$path = get_stylesheet_directory() . '/acf-json';

	// return
	return $path;
}

add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );
function my_acf_json_load_point( $paths )
{

	// remove original path (optional)
	unset( $paths[0] );

	// append path
	$paths[] = get_stylesheet_directory() . '/acf-json';

	// return
	return $paths;
}

/**
 * SETUP ACF OPTIONS
 */
function am_theme_options_page_func()
{
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( array(
			'page_title' => 'Albert Mohler Theme Options',
			'menu_title' => 'Theme Options',
			'menu_slug'  => 'albertmohler-theme-options',
			'capability' => 'edit_posts',
			'position'   => 50,
			'icon_url'   => 'dashicons-admin-generic',
			'redirect'   => false,
		) );
	}
}

add_action( 'init', 'am_theme_options_page_func' );


/**
 * Enqueue Styles properly
 * @return void
 */
function my_theme_enqueue_styles(): void
{

	$parent_style = 'albert-mohler-style';

//    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/assets/scss/main.css',
		array(),
		wp_get_theme()->get( 'Version' ),

	);
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function amt_register_acf_blocks(): void
{

	$blocks = array(
		'hero-home',
		'latest-articles-home',
	);

	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */

	foreach ( $blocks as $block ) {
		register_block_type(
			__DIR__ . "/blocks/$block",
			array(
				'icon'     => file_get_contents( get_template_directory() . '/assets/images/am-mark-05.svg' ),
				'category' => 'albert-mohler-blocks-category',
			),
		);
	}
}

// Here we call our tt3child_register_acf_block() function on init.
add_action( 'init', 'amt_register_acf_blocks' );


/**
 * Create Custom Gutenberg Blocks Categories.
 */
add_filter( 'block_categories_all', static function ( $categories ) {

	// Adding a new category.
	$categories[] = array(
		'slug'  => 'albert-mohler-blocks-category',
		'title' => 'Albert Mohler Blocks',
	);

	return $categories;
} );