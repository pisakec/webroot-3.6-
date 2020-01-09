<?php
/* ==========================================================================
//disable responsive images srcset
========================================================================== */
function meks_disable_srcset( $sources ) {
    return false;
} 
add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );
?>