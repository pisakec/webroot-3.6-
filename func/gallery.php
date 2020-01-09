<?php
/* ==========================================================================
/* JUST ADD THIS CODE TO YOUR THEMES functions.php */
/* Customize the last half, the output half to suit your projects needs 
========================================================================== */

add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;
    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }
    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));
    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';
    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }
    if (empty($attachments)) return '';
    // Here's your actual output, you may customize it to your needs
    $output = "<div class=\"slideshow-wrapper\">\n";
    $output .= "<div class=\"preloader\"></div>\n";
    $output .= "<ul data-orbit>\n";
    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');
        $output .= "<li>\n";
        $output .= "<a href='$url'" . (!empty($rel)? " rel='$rel'":"") . " title='$title' name='$name'><img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n</a>";
        $output .= "</li>\n";
    }
    $output .= "</ul>\n";
    $output .= "</div>\n";
    return $output;
}
add_filter('wp_get_attachment_image_attributes', function($attr, $attachment){
    unset($attr['alt']); // Just deleting the alt attr
    return $attr;
}, 10, 2);

$url = wp_get_attachment_url( $attachment->ID );
$name = esc_attr( $attachment->post_title );
$title = wptexturize($attachment->post_excerpt);

$text = wp_get_attachment_image( $id, $size, false );
if ( trim( $text ) == '' )
    $text = $attachment->post_title;


$link = "<a href='$url'" . (!empty($rel)? " rel='$rel'":"") . " title='$title' name='$name'>$text</a>";

	

?>