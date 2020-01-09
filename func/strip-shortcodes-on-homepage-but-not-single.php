<?php
function remove_shortcode_from_index( $content ) {
  if ( is_home() ) {
    $content = strip_shortcodes( $content );
  }
  return $content;
}
add_filter( 'the_content', 'remove_shortcode_from_index' );
?>