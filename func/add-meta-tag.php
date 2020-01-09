<?php
function add_meta_tags() {
	echo '<meta name="meta_name" content="meta_value" />';
}
add_action( 'wp_head', 'add_meta_tags' );
?>