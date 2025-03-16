<?php
$promotion_location = isset($args['location']) ? $args['location'] : '';

$promotion_args = array(
    'post_type'      => 'promotion',
    'posts_per_page' => 2,
    'tax_query'      => array(
        array(
            'taxonomy' => 'promotion_location',
            'field'    => 'slug',
            'terms'    => $promotion_location,
        ),
    ),
);

$promotion_query = new WP_Query($promotion_args);

$recommended_args = array(
    'post_type'      => 'recommended_product',
    'posts_per_page' => 4,
);

$recommended_query = new WP_Query($recommended_args);
?>
    <div class="section-header-best-sales">
        <h2>برترین پیشنهادهای ما</h2>
    </div>

<section class="elite-collection">
    <div class="elite-bottom">
        <?php if ($promotion_query->have_posts()) :
            while ($promotion_query->have_posts()) : $promotion_query->the_post();
                $promotion_title = get_field('heading');
                $promotion_description = get_field('description');
                $promotion_link = get_field('promotion_link');
                $background_image = get_field('background_image');

                $background_url = (!empty($background_image) && isset($background_image['url']))
                    ? esc_url($background_image['url'])
                    : get_template_directory_uri() . '/assets/images/default-racket.jpg';
                ?>
                <div class="best-sales-item" style="background-image: url('<?php echo $background_url; ?>');">
                    <div class="elite-overlay">
                        <p><?php echo esc_html($promotion_description); ?></p>
                        <h4><?php echo esc_html($promotion_title); ?></h4>
                        <a href="<?php echo esc_url($promotion_link); ?>" class="elite-link">مشاهده محصولات</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>

    <?php if ($recommended_query->have_posts()) : ?>


    <div class="best-sales-container">
        <div class="best-sales-grid">
            <?php while ($recommended_query->have_posts()) : $recommended_query->the_post();
                $products = get_field('recommended_products');

                if ($products):
                    if (!is_array($products)) {
                        $products = array($products);
                    }

                    foreach ($products as $product):
                        $product_id = $product->ID;
                        $wc_product = wc_get_product($product_id);
                        $product_title = get_the_title($product_id);
                        $product_price = $wc_product->get_sale_price() ? $wc_product->get_sale_price() : $wc_product->get_regular_price();
                        $product_regular_price = $wc_product->get_regular_price();
                        $product_link = get_permalink($product_id);
                        $product_image = get_the_post_thumbnail_url($product_id, 'medium');
                        $product_categories = get_the_terms($product_id, 'product_cat'); 
                        $product_category_name = (!empty($product_categories) && !is_wp_error($product_categories)) ? $product_categories[0]->name : 'محصول';

                        $discount_percentage = ($product_regular_price && $product_price) ? round((($product_regular_price - $product_price) / $product_regular_price) * 100) : 0;

                        $brands = get_the_terms($product_id, 'product_brand');
                        $product_brand = '';
                        $brand_logo = '';

                        if (!empty($brands) && !is_wp_error($brands)) {
                            $brand = reset($brands);
                            $product_brand = $brand->name;

                            if (isset($brand->term_id)) {
                                $brand_logo = get_field('brand_image', 'product_brand_' . $brand->term_id);
                                if (!$brand_logo) {
                                    $thumbnail_id = get_term_meta($brand->term_id, 'thumbnail_id', true);
                                    $brand_logo = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
                                }
                            }
                        }
            ?>
            <div class="best-sales-card">
                <div class="card-header">
                    <span class="brand-logo">
                        <?php if ($brand_logo) : ?>
                            <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr($product_brand); ?>">
                        <?php endif; ?>
                    </span>
                    <span class="new-badge">پرفروش</span>
                </div>
                <div class="best-sales-info">
                    <img src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_title); ?>">
                    <div class="best-sales-details">
                    <h3 ><?php echo esc_html($product_category_name); ?></h3>
                    <p class="best-sales-model-name" ><?php echo esc_html($product_title); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <?php endif; ?>
</section>
