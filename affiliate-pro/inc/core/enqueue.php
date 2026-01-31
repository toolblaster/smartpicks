<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function affiliate_pro_enqueue_assets() {

    wp_enqueue_style(
        'affiliate-pro-frontend',
        AFFILIATE_PRO_URL . '/assets/css/frontend.css',
        [],
        AFFILIATE_PRO_VERSION
    );

    wp_enqueue_script(
        'affiliate-pro-frontend',
        AFFILIATE_PRO_URL . '/assets/js/frontend.js',
        [],
        AFFILIATE_PRO_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'affiliate_pro_enqueue_assets' );