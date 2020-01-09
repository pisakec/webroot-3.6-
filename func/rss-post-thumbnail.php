<?php
/* ==========================================================================
RSS Post Thumbnails
========================================================================== */
function add_feed_post_thumbnail($content) {
	global $post; 
	if(has_post_thumbnail($post->ID)) {
		$content = get_the_post_thumbnail($post->ID, 'thumbnail') . $content;
	}
	return $content;
}
add_filter('the_excerpt_rss', 'add_feed_post_thumbnail');
add_filter('the_content_feed', 'add_feed_post_thumbnail');
?>