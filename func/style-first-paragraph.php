<?php
/* ==========================================================================
**
 * code #6 - append 'first' class onto the 1st <p> element in each post
 * source  - http://byjakewithlove.com/
 * @param string
 * @return string

========================================================================== */
function first_paragraph($content){
	global $post;
 
	if ($post->post_type == "post") {
		return preg_replace('/&lt;p([^>]+)?>/', '&lt;p$1 class="first">', $content, 1);
	}
	else {
		return $content;
	}
}
add_filter('the_content', 'first_paragraph');
?>