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

$tag_slug = 'high-demand';
$shoes_args = array(
    'post_type'      => 'product',
    'posts_per_page' => 8,
    'tax_query'      => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'product_tag',
            'field'    => 'slug',
            'terms'    => $tag_slug,
        ),
        array(
            'taxonomy'         => 'product_cat',
            'field'            => 'slug',
            'terms'            => 'tennis-shoes',
            'include_children' => true,
        ),
    ),
);

$shoes_query = new WP_Query($shoes_args);
?>

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
                    : get_template_directory_uri() . '/assets/images/default-shoes.jpg';
                ?>
                <div class="elite-item" style="background-image: url('<?php echo $background_url; ?>');">
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

    <?php if ($shoes_query->have_posts()) : ?>
    <div class="section-header">
        <h2>پرفروشترین کفش‌ها</h2>
        <div class="newest-carousel-controls">
            <button class="prev-btn"><i class="fas fa-chevron-right"></i></button>
            <span class="carousel-count">۱ از ۴</span>
            <button class="next-btn"><i class="fas fa-chevron-left"></i></button>
        </div>
    </div>

    <div class="racket-carousel">
        <div class="racket-grid">
            <?php while ($shoes_query->have_posts()) : $shoes_query->the_post();
                $product = wc_get_product(get_the_ID());
                $shoes_name = get_the_title();
                $shoes_link = get_permalink();
                $shoes_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                // Get price for both simple & variable products
                if ($product->is_type('variable')) {
                    $shoes_price = $product->get_variation_price('min', true);
                } else {
                    $shoes_price = $product->get_price();
                }

                $shoes_brand = '';
                $brand_logo = '';

                $brands = get_the_terms(get_the_ID(), 'product_brand');
                if (!empty($brands) && !is_wp_error($brands)) {
                    $shoes_brand = $brands[0]->name;

                    $brand_logo = get_field('brand_image', 'product_brand_' . $brands[0]->term_id);

                    if (!$brand_logo) {
                        $thumbnail_id = get_term_meta($brands[0]->term_id, 'thumbnail_id', true);
                        $brand_logo = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
                    }
                }

                if (!$shoes_image) {
                    $shoes_image = get_template_directory_uri() . '/images/default-shoes.jpg';
                }
            ?>
            <div class="racket-card">
                <div class="card-header">
                    <span class="brand-logo">
                        <?php if ($brand_logo) : ?>
                            <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr($shoes_brand); ?>">
                        <?php endif; ?>
                    </span>
                    <span class="new-badge">پرفروش</span>
                </div>
                <div class="racket-info">
                    <img src="<?php echo esc_url($shoes_image); ?>" alt="<?php echo esc_attr($shoes_name); ?>">
                    <div class="racket-details">
                        <h3>کفش تنیس</h3>
                        <p class="model-name"><?php echo esc_html($shoes_name); ?></p>
                        <p class="brand-name"><?php echo esc_html($shoes_brand); ?></p>
                        <div class="card-footer">
                            <a href="<?php echo esc_url($shoes_link); ?>" class="view-btn">مشاهده</a>
                            <span class="price"><?php echo number_format($shoes_price, 0, ',', ','); ?> تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <?php endif; ?>
</section>
