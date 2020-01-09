<?php
/* ==========================================================================
Standard – The default post format
Aside – A note like post, usually styled without title.
Gallery – A gallery of images.
Link – A link to another site.
Image – An image or photograph
Quote – A quotation.
Status – Twitter like short status update
Video – A post containing video
Audio – An audio file.
Chat – A chat transcript
========================================================================== */
function themename_post_formats_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video','chat','link','image', 'status', 'chat' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );?>