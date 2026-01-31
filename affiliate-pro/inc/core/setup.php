<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function affiliate_pro_setup() {

    load_theme_textdomain( 'affiliate-pro', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ] );

    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'affiliate-pro' ),
    ] );
}
add_action( 'after_setup_theme', 'affiliate_pro_setup' );