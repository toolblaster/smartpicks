<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Product CPT
 */
function affiliate_pro_register_product_cpt() {

    $labels = [
        'name'               => __( 'Products', 'affiliate-pro' ),
        'singular_name'      => __( 'Product', 'affiliate-pro' ),
        'menu_name'          => __( 'Products', 'affiliate-pro' ),
        'add_new'            => __( 'Add Product', 'affiliate-pro' ),
        'add_new_item'       => __( 'Add New Product', 'affiliate-pro' ),
        'edit_item'          => __( 'Edit Product', 'affiliate-pro' ),
        'new_item'           => __( 'New Product', 'affiliate-pro' ),
        'view_item'          => __( 'View Product', 'affiliate-pro' ),
        'search_items'       => __( 'Search Products', 'affiliate-pro' ),
        'not_found'          => __( 'No products found', 'affiliate-pro' ),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-cart',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'has_archive'        => true,
        'rewrite'            => [ 'slug' => 'product' ],
        'show_in_rest'       => true, // Gutenberg
        'publicly_queryable' => true,
    ];

    register_post_type( 'affiliate_product', $args );
}
add_action( 'init', 'affiliate_pro_register_product_cpt' );