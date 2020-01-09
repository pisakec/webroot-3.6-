<?php
/* ==========================================================================
Sharpen Resized JPEG Images
========================================================================== */
function custom_tinyurl_shortcode($atts){
  extract(shortcode_atts(array(
   'url' => get_permalink(),
   'title' => ''
  ), $atts));
 
  if(!$title) $title = $url;
 
  if(false === ($cache = get_transient('tinyurl_'+md5($url)))):
    $cache = wp_remote_retrieve_body(wp_remote_get('http://tinyurl.com/api-create.php?url='.$url));
    // cached for 24 hours
    set_transient('tinyurl_'+md5($url), $cache, 60*60*24); 
  endif;
 
  return '&lt;a href="'.esc_url($cache).'">'.esc_attr($title).'&lt;/a>';
}
add_shortcode('tinyurl', 'custom_tinyurl_shortcode');
?>