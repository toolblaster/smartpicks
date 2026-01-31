<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Check if PRO is enabled
 */
function affiliate_pro_is_pro() {
    return apply_filters( 'affiliate_pro_is_pro', false );
}