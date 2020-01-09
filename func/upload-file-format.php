<?php
/* ==========================================================================
Add Additional File Types to be Uploaded in WordPress
========================================================================== */
/**
 * Add a sidebar.
 */
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
?>