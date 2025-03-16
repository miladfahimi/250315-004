<?php
$args = array(
    'post_type'      => 'ultimate_promotion',
    'posts_per_page' => 1,
);

$ultimate_query = new WP_Query($args);

if ($ultimate_query->have_posts()) :
    while ($ultimate_query->have_posts()) : $ultimate_query->the_post();

        $title = get_field('ultimate_title');
        $description = get_field('ultimate_description');
        $bg_image = get_field('ultimate_bg_image');
        $product = get_field('ultimate_product');

        $bg_image_url = !empty($bg_image) ? esc_url($bg_image['url']) : esc_url(get_template_directory_uri() . '/assets/images/default-bg.jpg');

        if ($product) {
            $product_id = $product->ID;
            $product_obj = wc_get_product($product_id);
            $product_title = get_the_title($product_id);
            $product_link = get_permalink($product_id);
            $product_image = get_the_post_thumbnail_url($product_id, 'medium');
            
            if ($product_obj->is_type('variable')) {
                $product_price = $product_obj->get_variation_price('min', true);
                $product_regular_price = $product_obj->get_variation_regular_price('min', true);
            } else {
                $product_price = $product_obj->get_sale_price() ?: $product_obj->get_regular_price();
                $product_regular_price = $product_obj->get_regular_price();
            }
            
            $discount_percentage = ($product_regular_price && $product_price) ? round((($product_regular_price - $product_price) / $product_regular_price) * 100) : 0;

            $brands = get_the_terms($product_id, 'product_brand');
            $product_brand = (!empty($brands) && !is_wp_error($brands)) ? $brands[0]->name : '';

            $brand_logo = get_field('brand_image', 'product_brand_' . $brands[0]->term_id);
            if (!$brand_logo) {
                $thumbnail_id = get_term_meta($brands[0]->term_id, 'thumbnail_id', true);
                $brand_logo = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
            }
        }
?>

<section class="ultimate-performance" style="background-image: url('<?php echo $bg_image_url; ?>');">
    <div class="ultimate-content">
        <div class="ultimate-product">
            <div class="discounted-product">
                <div class="discount-card">
                    <?php if ($discount_percentage > 0) : ?>
                        <span class="discount-badge">٪<?php echo $discount_percentage; ?> تخفیف</span>
                    <?php endif; ?>
                    
                    <?php if ($brand_logo) : ?>
                        <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr($product_brand); ?>" class="brand-icon">
                    <?php endif; ?>

                    <?php if ($product_image) : ?>
                        <img src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_title); ?>" class="discounted-racket">
                    <?php endif; ?>

                    <div class="discount-details">
                        <div class="discount-texts">
                            <h3>راکت تنیس</h3>
                            <p class="discount-model"><?php echo esc_html($product_title); ?></p>
                            <p class="discount-brand"><?php echo esc_html($product_brand); ?></p>
                        </div>
                        <a href="<?php echo esc_url($product_link); ?>" class="discount-link">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ultimate-text">
            <h2><?php echo esc_html($title); ?></h2>
            <p><?php echo esc_html($description); ?></p>
            <div class="ultimate-price">
                <span class="old-price">
                    <?php echo is_numeric($product_regular_price) ? number_format(floatval($product_regular_price), 0, ',', ',') . ' تومان' : ''; ?>
                </span>
                <span class="new-price">
                    <?php echo is_numeric($product_price) ? number_format(floatval($product_price), 0, ',', ',') . ' تومان' : ''; ?>
                </span>
            </div>
        </div>
    </div>
</section>

<?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<!-- ERROR: No Ultimate Promotion Found -->';
endif;
?>