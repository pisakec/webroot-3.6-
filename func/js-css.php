<?php 
/* ==========================================================================
// Custom Scripting to Move JavaScript from the Head to the Footer
========================================================================== */
function remove_head_scripts() {
	remove_action( 'wp_head', 'wp_print_scripts' );
	remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
	remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

	add_action( 'wp_footer', 'wp_print_scripts', 5 );
	add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
	add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
/* ==========================================================================
// remove default jquery
========================================================================== */
function my_jquery_remove() {
    if (!is_admin()) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', false);
    }
}
add_action('init', 'my_jquery_remove'); 
/* ==========================================================================
// js
========================================================================== */
function wptuts_scripts_load_cdn() {
	wp_register_script( 'jq', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ) );
	wp_enqueue_script( 'jq' );
/*	wp_register_script( 'migration', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'migration' );*/

	wp_register_script( 'utility', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'utility' );
	wp_register_script( 'truncate', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'truncate' );
	wp_register_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'isotope.pkgd.min.js' );
		wp_register_script( 'nice2', get_template_directory_uri() . '/js/mmenu.js', array( 'jquery' ) );
	wp_enqueue_script( 'nice2' );		
/*	wp_register_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'masonry' );*/
	wp_register_script( 'slide', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'slide' );
	wp_register_script( 'scroll', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ) );
	wp_enqueue_script( 'scroll' );
	wp_register_script( 'scrore', get_template_directory_uri() . '/js/headroom.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'scrore' );
	wp_register_script( 'zopim', get_template_directory_uri() . '/js/lazyload.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'zopim' );
	wp_register_script( 'font', get_template_directory_uri() . '/js/webfont.js', array( 'jquery' ) );
	wp_enqueue_script( 'font' );
	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn', 1 );
/* ==========================================================================
// css
========================================================================== */
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css',1 );
	wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
	wp_enqueue_style( 'fontello-codec', get_template_directory_uri() . '/css/fontello-codes.css' );
	wp_enqueue_style( 'fontello-embed', get_template_directory_uri() . '/css/fontello-embedded.css' );
	wp_enqueue_style( 'fontello-ie', get_template_directory_uri() . '/css/fontello-ie7.css' );
	wp_enqueue_style( 'animation', get_template_directory_uri() . '/css/animation.css' );
	/*wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/css/jquery.mmenu.all.css' );*/
	wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/css/mmenu.css' );
	wp_enqueue_style( 'mburger', get_template_directory_uri() . '/css/mburger.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/ui-theme.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/q.css',2 );
	// Conditionally load the FlexSlider CSS on the homepage
//	if ( is_page( 'home' ) ) {
//		wp_enqueue_style( 'flexslider' );
//	}
}
add_action( 'wp_print_styles', 'theme_styles',99 );

/* ==========================================================================
// remove wp version param from any enqueued scripts
========================================================================== */
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
//
add_filter( 'the_title', 'blankslate_title' );

function blankslate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
/* ==========================================================================
//Remove Query Strings
========================================================================== */
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
/* ==========================================================================
//emoji disable
========================================================================== */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
/* ==========================================================================
// Remove jQuery Migrate Script from header and Load jQuery from Google API
========================================================================== */


?>
