<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

while ( have_posts() ) : the_post(); ?>

    <main id="primary" class="site-main">

        <article <?php post_class( 'affiliate-product-single' ); ?>>

            <header class="product-header">
                <h1 class="product-title"><?php the_title(); ?></h1>
            </header>

            <?php
            // Product Box (price, rating, CTA)
            get_template_part( 'templates/parts/product', 'box' );
            ?>

            <div class="product-content">
                <?php the_content(); ?>
            </div>

        </article>

    </main>

<?php endwhile;

get_footer();