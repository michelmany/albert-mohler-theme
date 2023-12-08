<?php

$the_briefing_id = 43; // the-briefing ID
$thinking_in_public_id = 71; // thinking-in-public ID
$book_id = 4; // books-topics ID
$articles_id = 1; //articles ID
$sermons_and_speeches_id = 31; // sermons-and-speeches ID
$aboutPage_id = 4586; // About Page ID
$ask_anything_id = 162;

$video_id = 90;
$audio_id = 11;


// Hero Article - Right Book
$book = array(
	'posts_per_page' => 1,
	'cat'            => $book_id,
);
$book_query = new WP_Query( $book );


function get_image_or_fallback( $id )
{
	return has_post_thumbnail( $id )
		? get_the_post_thumbnail_url( $id )
		: get_bloginfo( 'stylesheet_directory' ) . '/assets/images/brief-image.png';
}

function ConverToRoman( $num )
{
	$n = intval( $num );
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
		'primary'        => __( 'Main Menu', 'albert-mohler' ),
		'top_menu'       => __( 'Top Menu', 'albert-mohler' ),
		'donate_menu'    => __( 'Donate Menu', 'albert-mohler' ),
		'social_menu'    => __( 'Social Menu', 'albert-mohler' ),
		'copyright_menu' => __( 'Copyright Menu', 'albert-mohler' ),
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
	$bul = array( 'İ', 'Ü', 'Ğ', 'Ö', 'Ç', 'Ş', 'ş', 'ç', 'ö', 'ğ', 'ü', 'ı', ' ' );
	$degistir = array( 'I', 'U', 'G', 'O', 'C', 'S', 's', 'c', 'o', 'g', 'u', 'i', '-' );
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
	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description : '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

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

register_sidebar(
	array(
		'name'          => 'About Page Sidebar',
		'id'            => 'about-page-widget',
		'before_widget' => '<div id="%1$s" class="sidebar-widget about-page-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	)
);

register_sidebar(
	array(
		'name'          => 'Internal Pages Left Sidebar',
		'id'            => 'internal-pages-left-sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar-widget internal-pages-left-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	)
);

register_sidebar(
	array(
		'name'          => 'Topics Bottom Widget',
		'id'            => 'topics-bottom-widget',
		'before_widget' => '<div id="%1$s" class="internal-pages-bottom-widgets topics-bottom-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	)
);

register_sidebar(
	array(
		'name'          => 'Sermon Series Widget',
		'id'            => 'sermon-series-widget',
		'before_widget' => '<div id="%1$s" class="internal-pages-bottom-widgets sermon-series-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	)
);

register_sidebar(
	array(
		'name'          => 'Sermon and Speeches Widget',
		'id'            => 'sermon-and-speeches-widget',
		'before_widget' => '<div id="%1$s" class="internal-pages-bottom-widgets sermon-and-speeches-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
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
function amt_theme_options_page_func(): void
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

add_action( 'init', 'amt_theme_options_page_func' );


/**
 * Enqueue Styles properly
 * @return void
 */
function amt_theme_enqueue_styles(): void
{

	wp_enqueue_style(
		'bootstrap-style',
		get_template_directory_uri() . '/assets/vendor/bootstrap.min.css',
		array(),
		'5.3.2',
	);

	wp_enqueue_style(
		'albert-mohler-style',
		get_template_directory_uri() . '/assets/scss/main.css',
		array( 'bootstrap-style' ),
		wp_get_theme()->get( 'Version' ),
	);
}

add_action( 'wp_enqueue_scripts', 'amt_theme_enqueue_styles' );

/**
 * Enqueue Scripts properly
 * @return void
 */
function amt_theme_enqueue_scripts(): void
{

	wp_enqueue_script(
		'swiper-bundle',
		get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		array(
			'footer' => true,
		)
	);

	wp_enqueue_script(
		'theme-app',
		get_template_directory_uri() . '/assets/js/app-min.js',
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		array(
			'footer' => true,
		)
	);
}

add_action( 'wp_enqueue_scripts', 'amt_theme_enqueue_scripts' );


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
		'thinking-in-public-home',
		'speaking-and-teaching-home',
		'ask-anything-home',
		'ads-banner',
		'about-home',
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

add_filter( 'should_load_separate_core_block_assets', '__return_true' );


/**
 * @param $item_output
 * @param $item
 * @param $depth
 * @param $args
 *
 * @return array|mixed|string|string[]
 */
function prefix_nav_description( $item_output, $item, $depth, $args )
{
	if ( ! empty( $item->description ) ) {
		$item_output = str_replace(
			$args->link_after . '</a>',
			$args->link_after . '</a>' . '<p class="menu-item-description">' . $item->description . '</p>',
			$item_output
		);
	}

	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


/**
 * Fix pagination on archive pages
 */
function remove_page_from_query_string( $query_string )
{
	if ( isset( $query_string['name'] ) && $query_string['name'] === 'page' && isset( $query_string['page'] ) ) {
		unset( $query_string['name'] );
		$query_string['paged'] = $query_string['page'];
	}

	return $query_string;
}

add_filter( 'request', 'remove_page_from_query_string' );


if ( wp_get_environment_type() === 'production' ) {

	// Only allow fields to be edited on development
	add_filter( 'acf/settings/show_admin', '__return_false' );
}

function fwp_add_facet_labels()
{
	?>
    <script>
        (function($) {
            $(document).on('facetwp-loaded', function() {
                $('.facetwp-facet').each(function() {
                    const facet = $(this);
                    const facet_name = facet.attr('data-name');
                    const facet_type = facet.attr('data-type');
                    const facet_label = FWP.settings.labels[facet_name];
                    if (facet_type !== 'pager' && facet_type !== 'sort') {
                        if (facet.closest('.facet-wrap').length < 1 && facet.closest('.facetwp-flyout').length < 1) {
                            facet.wrap('<div class="facet-wrap"></div>');
                            facet.before('<h3 class="facet-label">' + facet_label + '</h3>');
                        }
                    }
                });
            });
        })(jQuery);
    </script>
	<?php
}

add_action( 'wp_head', 'fwp_add_facet_labels', 100 );

add_action( 'wp_head', function () { ?>
    <script>
        (function($) {
            $(document).on('facetwp-refresh', function() {
                FWP.enable_scroll = FWP.soft_refresh === true;
            });
            $(document).on('facetwp-loaded', function() {
                if (FWP.enable_scroll === true) {
                    $('html, body').animate({
                        scrollTop: 0, // Scroll to the top of the page
                    }, 500);
                }
            });
        })(jQuery);
    </script>
<?php } );

add_filter( 'facetwp_facet_html', static function ( $output, $params ) {
	if ( 'resources' === $params['facet']['name']
	     || 'topics' === $params['facet']['name']
	     || 'bible' === $params['facet']['name']
	     || 'format' === $params['facet']['name'] ) {
		$output = preg_replace( '/\(([0-9]+)\)/', '$1', $output );
	}

	return $output;
}, 10, 2 );

// Add search weight to more recently published entries in SearchWP.
// @link https://searchwp.com/documentation/knowledge-base/add-relevance-weight-date/
add_filter( 'searchwp\query\mods', function ( $mods ) {
	global $wpdb;

	$mod = new \SearchWP\Mod();
	$mod->set_local_table( $wpdb->posts );
	$mod->on( 'ID', [ 'column' => 'id' ] );
	$mod->relevance( function ( $runtime ) use ( $wpdb ) {
		return "
			COALESCE( ROUND( ( (
				UNIX_TIMESTAMP( {$runtime->get_local_table_alias()}.post_date )
				- (
					SELECT UNIX_TIMESTAMP( {$wpdb->posts}.post_date )
					FROM {$wpdb->posts}
					WHERE {$wpdb->posts}.post_status = 'publish'
					ORDER BY {$wpdb->posts}.post_date ASC
					LIMIT 1
				)
			) / 86400 ), 0 ), 0 )";
	} );

	$mods[] = $mod;

	return $mods;
} );


// Add Relevance Weight to ACF True/False Checkbox Fields in SearchWP.
// @link https://searchwp.com/documentation/knowledge-base/add-relevance-acf-checkbox/
add_filter( 'searchwp\query\mods', function ( $mods ) {

	global $wpdb;

	$my_meta_key = 'boost_relevance'; // ACF True/False name.
	$bonus_weight = 1000;

	$mod = new \SearchWP\Mod();
	$mod->set_local_table( $wpdb->postmeta );
	$mod->on( 'post_id', [ 'column' => 'id' ] );
	$mod->on( 'meta_key', [ 'value' => $my_meta_key ] );

//	mm_log_it( $my_meta_key );

	$mod->weight( function ( $runtime_mod ) use ( $bonus_weight ) {
		$local_alias = $runtime_mod->get_local_table_alias();

		return "IF({$local_alias}.meta_value+0 = 1, {$bonus_weight}, 0)";
	} );

	$mods[] = $mod;

	return $mods;
} );

add_filter( 'facetwp_render_output', function ( $output, $params ) {
//	$output['settings']['published_date']['range']['min']['minDate'] = '2000-01-01';
	$output['settings']['published_date']['range']['min']['maxDate'] = date( 'Y-m-d' );
//	$output['settings']['published_date']['range']['max']['minDate'] = date( 'Y-m-d' ); // Today
	$output['settings']['published_date']['range']['max']['maxDate'] = date( 'Y-m-d' ); // Today

	return $output;
}, 10, 2 );


add_filter( 'facetwp_preload_url_vars', function( $url_vars ) {
  if ( 'site-search' === FWP()->helper->get_uri() ) { // Replace 'demo/cars' with the URI of your page (everything after the domain name, excluding any slashes at the beginning and end)
    if ( empty( $url_vars['sort_by'] ) ) { // Replace 'make' with the name of your facet
      $url_vars['sort_by'] = [ 'relevance' ]; // Replace 'audi' with the facet choice that needs to be pre-selected. Use the technical name/slug as it appears in the URL when filtering
    }
  }
  return $url_vars;
} );
