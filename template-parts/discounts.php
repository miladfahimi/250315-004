<?php
$sale_tag_slug = 'sale';
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 8,
    'tax_query'      => array(
      'relation' => 'AND',
        array(
            'taxonomy' => 'product_tag',
            'field'    => 'slug',
            'terms'    => $sale_tag_slug,
        ),
        array(
          'taxonomy'         => 'product_cat',
          'field'            => 'slug',
          'terms'            => 'tennis-racquets',
          'include_children' => true,
      ),
    ),
);

$racket_query = new WP_Query($args);

if ($racket_query->have_posts()) :
?>
<section class="elite-collection">
    <div class="elite-top" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . "/assets/images/top-image.png"); ?>');"></div>
    
    <div class="elite-bottom">
        <div class="elite-item" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . "/assets/images/bottom-left.jpg"); ?>');">
            <div class="elite-overlay">
                <p>انواع راکت‌های پاور</p>
                <h4>قدرت مطلق،<br> بدون محدودیت </h4>
                <a href="#" class="elite-link">مشاهده محصولات</a>
            </div>
        </div>
        <div class="elite-item" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . "/assets/images/bottom-right.jpg"); ?>');">
            <div class="elite-overlay">
                <p>انواع راکت‌های کنترلی </p>
                <h4>دقت بی‌نقص،<br> تسلط بر بازی </h4>
                <a href="#" class="elite-link">مشاهده محصولات</a>
            </div>
        </div>
    </div>

    <div class="section-header">
        <h2>پر تخفیف‌ترین راکت‌ها</h2>
        <div class="elite-carousel-controls">
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
                $racket_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                // Handle variable products correctly
                if ($product->is_type('variable')) {
                    $racket_price = $product->get_variation_regular_price('min', true); // Get minimum regular price
                    $racket_sale_price = $product->get_variation_sale_price('min', true); // Get minimum sale price
                } else {
                    $racket_price = $product->get_regular_price();
                    $racket_sale_price = $product->get_sale_price();
                }

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

                // Ensure sale percentage calculation is valid
                $sale_percentage = ($racket_price && $racket_sale_price) ? round((($racket_price - $racket_sale_price) / $racket_price) * 100) : 0;
            ?>
            <div class="racket-card">
                <div class="card-header">
                    <span class="brand-logo">
                        <?php if ($brand_logo) : ?>
                            <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr($racket_brand); ?>">
                        <?php endif; ?>
                    </span>
                    <?php if ($sale_percentage > 0) : ?>
                        <span class="new-badge-sale">SALE <?php echo $sale_percentage; ?>%</span>
                    <?php endif; ?>
                </div>
                <div class="racket-info">
                    <img src="<?php echo esc_url($racket_image); ?>" alt="<?php echo esc_attr($racket_name); ?>">
                    <div class="racket-details">
                        <h3>راکت تنیس</h3>
                        <p class="model-name"><?php echo esc_html($racket_name); ?></p>
                        <p class="brand-name"><?php echo esc_html($racket_brand); ?></p>
                        <div class="card-footer">
                            <span class="last-price-rackets">
                                <?php 
                                if ($racket_price && $racket_sale_price && is_numeric($racket_price) && is_numeric($racket_sale_price)) {
                                    echo '<span class="original-price-rackets">' . number_format(floatval($racket_price), 0, ',', ',') . '</span> ';
                                    echo '<span class="sale-price-rackets">' . number_format(floatval($racket_sale_price), 0, ',', ',') . ' تومان</span>';
                                } else {
                                    echo "نامشخص";
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
