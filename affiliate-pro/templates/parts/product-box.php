<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$post_id = get_the_ID();

$price  = get_post_meta( $post_id, '_affiliate_price', true );
$rating = get_post_meta( $post_id, '_affiliate_rating', true );
$url    = get_post_meta( $post_id, '_affiliate_url', true );
?>

<div class="affiliate-product-box">

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="product-image">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
    <?php endif; ?>

    <div class="product-info">

        <?php if ( $rating ) : ?>
            <div class="product-rating">
                ⭐ <?php echo esc_html( $rating ); ?>/5
            </div>
        <?php endif; ?>

        <?php if ( $price ) : ?>
            <div class="product-price">
                <strong>Price:</strong> <?php echo esc_html( $price ); ?>
            </div>
        <?php endif; ?>

        <?php
        // CTA Button
        get_template_part( 'templates/parts/cta' );
        ?>

    </div>

</div>