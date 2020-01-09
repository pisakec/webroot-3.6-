<?php
/* ==========================================================================
Remove Image Width/Height Attributes

========================================================================== */
function remove_image_size_atts($html) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'remove_image_size_atts', 10);
add_filter('image_send_to_editor', 'remove_image_size_atts', 10);
?>