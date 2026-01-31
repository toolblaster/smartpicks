<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1️⃣ Add Product Meta Box
 */
function affiliate_pro_add_product_metabox() {
    add_meta_box(
        'affiliate_pro_product_data',
        __( 'Product Details', 'affiliate-pro' ),
        'affiliate_pro_product_metabox_callback',
        'affiliate_product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'affiliate_pro_add_product_metabox' );


/**
 * 2️⃣ Meta Box HTML (Admin UI)
 * THIS is the part you were confused about
 */
function affiliate_pro_product_metabox_callback( $post ) {

    wp_nonce_field( 'affiliate_pro_save_product', 'affiliate_pro_product_nonce' );

    $price  = get_post_meta( $post->ID, '_affiliate_price', true );
    $rating = get_post_meta( $post->ID, '_affiliate_rating', true );
    $url    = get_post_meta( $post->ID, '_affiliate_url', true );
    ?>

    <p>
        <label><strong>Amazon Product URL</strong></label><br>
        <input type="url" name="affiliate_url"
               value="<?php echo esc_attr( $url ); ?>"
               style="width:100%;">
    </p>

    <p>
        <label><strong>Price</strong></label><br>
        <input type="text" name="affiliate_price"
               value="<?php echo esc_attr( $price ); ?>">
    </p>

    <p>
        <label><strong>Rating (1–5)</strong></label><br>
        <input type="number" step="0.1" min="1" max="5"
               name="affiliate_rating"
               value="<?php echo esc_attr( $rating ); ?>">
    </p>

    <?php
}


/**
 * 3️⃣ Save Product Meta (Secure)
 */
function affiliate_pro_save_product_meta( $post_id ) {

    if ( ! isset( $_POST['affiliate_pro_product_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['affiliate_pro_product_nonce'], 'affiliate_pro_save_product' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if ( isset( $_POST['affiliate_url'] ) ) {
        update_post_meta(
            $post_id,
            '_affiliate_url',
            esc_url_raw( $_POST['affiliate_url'] )
        );
    }

    if ( isset( $_POST['affiliate_price'] ) ) {
        update_post_meta(
            $post_id,
            '_affiliate_price',
            sanitize_text_field( $_POST['affiliate_price'] )
        );
    }

    if ( isset( $_POST['affiliate_rating'] ) ) {
        update_post_meta(
            $post_id,
            '_affiliate_rating',
            floatval( $_POST['affiliate_rating'] )
        );
    }
}
add_action( 'save_post_affiliate_product', 'affiliate_pro_save_product_meta' );