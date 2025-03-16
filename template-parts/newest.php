<?php
$tag_slug = 'New Collection';
$args = array(
    'post_type'      => 'product',
    // 'posts_per_page' => 8,
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_tag',
            'field'    => 'slug',
            'terms'    => $tag_slug,
        ),
    ),
);

$racket_query = new WP_Query($args);

if ($racket_query->have_posts()) :
?>
<section class="newest-rackets">
    <div class="section-header">
        <h2>جدیدترین راکت های ۲۰۲۵</h2>
        <div class="newest-carousel-controls">
            <button class="prev-btn"><i class="fas fa-chevron-right"></i></button>
            <span class="carousel-count">۱ از ۴</span>
            <button class="next-btn"><i class="fas fa-chevron-left"></i></button>
        </div>
    </div>

    <div class="racket-carousel">
        <div class="racket-grid">
            <?php while ($racket_query->have_posts()) : $racket_query->the_post();
                $product = wc_get_product(get_the_ID());
                $racket_name = get_the_title();
                $racket_link = get_permalink();
                
                // Get price: Check if the product is variable, otherwise get the regular price
                if ($product->is_type('variable')) {
                    $racket_price = $product->get_variation_price('min', true); // Get minimum variation price
                } else {
                    $racket_price = $product->get_price();
                }

                $racket_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                $racket_brand = '';
                $brand_logo = '';

                $brands = get_the_terms(get_the_ID(), 'product_brand');
                if (!empty($brands) && !is_wp_error($brands)) {
                    $racket_brand = $brands[0]->name; 

                    $brand_logo = get_field('brand_image', 'product_brand_' . $brands[0]->term_id);

                    if (!$brand_logo) {
                        $thumbnail_id = get_term_meta($brands[0]->term_id, 'thumbnail_id', true);
                        $brand_logo = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
                    }
                }

                if (!$racket_image) {
                    $racket_image = get_template_directory_uri() . '/images/default-racket.jpg';
                }
            ?>
            <div class="racket-card">
                <div class="card-header">
                    <span class="brand-logo">
                        <?php if ($brand_logo) : ?>
                            <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr($racket_brand); ?>">
                        <?php endif; ?>
                    </span>
                    <span class="new-badge">NEW COLLECTION</span>
                </div>
                <div class="racket-info">
                    <img src="<?php echo esc_url($racket_image); ?>" alt="<?php echo esc_attr($racket_name); ?>">
                    <div class="racket-details">
                        <h3>راکت تنیس</h3>
                        <p class="model-name"><?php echo esc_html($racket_name); ?></p>
                        <p class="brand-name"><?php echo esc_html($racket_brand); ?></p>
                        <div class="card-footer">
                            <a href="<?php echo esc_url($racket_link); ?>" class="view-btn">مشاهده</a>
                            <span class="price">
                                <?php 
                                if (!empty($racket_price) && is_numeric($racket_price)) {
                                    echo number_format(floatval($racket_price), 0, ',', ',') . ' تومان';
                                } else {
                                    echo "نامشخص"; // Show default text if price is not available
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>
