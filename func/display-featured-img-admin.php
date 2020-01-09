<?php
/* ==========================================================================
SHOW FEATURED IMAGE IN YOUR WORDPRESS ADMIN DASHBOARD
========================================================================== */
// show featured images in dashboard
add_image_size( 'haizdesign-admin-post-featured-image', 120, 120, false );
// Add the posts and pages columns filter. They both use the same function.
add_filter('manage_posts_columns', 'haizdesign_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'haizdesign_add_post_admin_thumbnail_column', 2);
// Add the column
function haizdesign_add_post_admin_thumbnail_column($haizdesign_columns){
    $haizdesign_columns['haizdesign_thumb'] = __('Featured Image');
    return $haizdesign_columns;
}
// Manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'haizdesign_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'haizdesign_show_post_thumbnail_column', 5, 2);
// Get featured-thumbnail size post thumbnail and display it
function haizdesign_show_post_thumbnail_column($haizdesign_columns, $haizdesign_id){
    switch($haizdesign_columns){
        case 'haizdesign_thumb':
        if( function_exists('the_post_thumbnail') ) {
            echo the_post_thumbnail( 'haizdesign-admin-post-featured-image' );
        }
        else
            echo 'hmm... your theme doesn\'t support featured image...';
        break;
    }
}
add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
   .attachment-haizdesign-admin-post-featured-image {
      max-width:100px;
    } 
  </style>';
}
?>