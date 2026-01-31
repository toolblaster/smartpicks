<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$url = get_post_meta( get_the_ID(), '_affiliate_url', true );

if ( ! $url ) {
    return;
}
?>

<div class="affiliate-cta">
    <a href="<?php echo esc_url( $url ); ?>"
       class="affiliate-btn"
       target="_blank"
       rel="nofollow sponsored noopener">
        Check Price on Amazon
    </a>
</div>