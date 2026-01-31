<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AFFILIATE_PRO_VERSION', '1.0.0' );
define( 'AFFILIATE_PRO_PATH', get_template_directory() );
define( 'AFFILIATE_PRO_URL', get_template_directory_uri() );

/**
 * Core files
 */
require_once AFFILIATE_PRO_PATH . '/inc/core/setup.php';
require_once AFFILIATE_PRO_PATH . '/inc/core/enqueue.php';
require_once AFFILIATE_PRO_PATH . '/inc/core/helpers.php';

/**
 * Features
 */
require_once AFFILIATE_PRO_PATH . '/inc/post-types/product.php';
require_once AFFILIATE_PRO_PATH . '/inc/blocks/register-blocks.php';
require_once AFFILIATE_PRO_PATH . '/inc/amazon/compliance.php';
require_once AFFILIATE_PRO_PATH . '/inc/seo/schema.php';

/**
 * Admin
 */
require_once AFFILIATE_PRO_PATH . '/inc/admin/options.php';
require_once AFFILIATE_PRO_PATH . '/inc/admin/metaboxes.php';