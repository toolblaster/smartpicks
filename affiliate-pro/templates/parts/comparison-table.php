<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Expected:
 * $products = array of product IDs
 */

if ( empty( $products ) || ! is_array( $products ) ) {
    return;
}
?>

<div class="affiliate-comparison-wrapper">
    <div class="affiliate-comparison-scroll">

        <table class="affiliate-comparison-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Rating</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ( $products as $product_id ) :

                    $title  = get_the_title( $product_id );
                    $url    = get_post_meta( $product_id, '_affiliate_url', true );
                    $price  = get_post_meta( $product_id, '_affiliate_price', true );
                    $rating = get_post_meta( $product_id, '_affiliate_rating', true );
                ?>
                <tr>
                    <td class="product-name">
                        <?php echo esc_html( $title ); ?>
                    </td>

                    <td class="product-rating">
                        <?php echo esc_html( $rating ); ?>/5
                    </td>

                    <td class="product-price">
                        <?php echo esc_html( $price ); ?>
                    </td>

                    <td class="product-cta">
                        <?php if ( $url ) : ?>
                            <a href="<?php echo esc_url( $url ); ?>"
                               class="affiliate-btn small"
                               target="_blank"
                               rel="nofollow sponsored noopener">
                                Check Price
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
