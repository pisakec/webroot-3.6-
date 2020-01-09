<?php
add_theme_support( 'post-thumbnails' );
/* ==========================================================================
//Excerpts to Your Pages in WordPress
========================================================================== */
add_post_type_support( 'page', 'excerpt' );
/* ==========================================================================
// Disable use XML-RPC
# nginx block xmlrpc.php requests ---.htaccess
location /xmlrpc.php {
    deny all;
}
========================================================================== */
add_filter( 'xmlrpc_enabled', '__return_false' );
/* ==========================================================================
fixed::::AMP version is not indexed: Server error (5xx)
========================================================================== */
add_action( 'pre_amp_render_post', function() {
    remove_all_actions( 'wp_print_scripts' );
} );



add_filter('xmlrpc_enabled', '__return_false');
//require_once( get_template_directory() . '/func/gutenberg.php' );
//require_once( get_template_directory() . '/func/customizer.php' );
require_once( get_template_directory() . '/func/add-meta-tag.php' );
require_once( get_template_directory() . '/func/post-format.php' );
require_once( get_template_directory() . '/func/register-nav-menu.php' );
require_once( get_template_directory() . '/func/display-featured-img-admin.php' );
require_once( get_template_directory() . '/func/js-css.php' );
//require_once( get_template_directory() . '/func/remove-empty-p.php' );
require_once( get_template_directory() . '/func/widget.php' );
require_once( get_template_directory() . '/func/disable-img-src.php' );
require_once( get_template_directory() . '/func/strip-shortcodes-on-homepage-but-not-single.php' );
require_once( get_template_directory() . '/func/sharpen-resized-JPEG.php' );
require_once( get_template_directory() . '/func/rss-post-thumbnail.php' );
require_once( get_template_directory() . '/func/style-first-paragraph.php' );
require_once( get_template_directory() . '/func/upload-file-format.php' );
require_once( get_template_directory() . '/func/custom-admin-login-logo.php' );
require_once( get_template_directory() . '/func/remove-img-width.php' );


/* ==========================================================================
dkinsta.com/blog/disable-gutenberg-wordpress-editor/
========================================================================== */
add_filter('use_block_editor_for_post', '__return_false');

/* ==========================================================================
wpassist.me/how-to-remove-block-library-css-from-wordpress/
========================================================================== */
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );