<?php
$tag_slug = 'strings';

$strings_args = array(
    'post_type'      => 'product',
    'posts_per_page' => 3, 
    'tax_query'      => array(
      array(
          'taxonomy'         => 'product_cat',
          'field'            => 'slug',
          'terms'            => 'strings',
          'include_children' => true,
      ),
  ),
);

$strings_query = new WP_Query($strings_args);
?>

<!-- String Section -->
<section class="string-section">
    <div class="main-container">

        <!-- MSV Card -->
        <div class="msv-card">
            <div class="msv-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/msv-bg.jpg');"></div>
            <div class="msv-content">
                <h3>تنها واردکننده‌ی <br> محصولات MSV</h3>
                <a href="#" class="msv-button">مشاهده و مقایسه</a>
            </div>
        </div>

        <!-- Wrapper for Carousel & String Cards -->
        <div class="string-wrapper">

            <!-- Title & Pagination -->
            <div class="strings-header">
                <h2>جدیدترین زه های ۲۰۲۵</h2>
                <div class="strings-carousel-controls">
                    <button class="strings-prev-btn"><i class="fas fa-chevron-right"></i></button>
                    <span class="strings-carousel-count">۱ از ۴</span>
                    <button class="strings-next-btn"><i class="fas fa-chevron-left"></i></button>
                </div>
            </div>

            <!-- String Carousel -->
            <div class="string-carousel">
                <div class="string-grid">
                    <?php if ($strings_query->have_posts()) : ?>
                        <?php while ($strings_query->have_posts()) : $strings_query->the_post();
                            $product = wc_get_product(get_the_ID());
                            $string_name = get_the_title();
                            $string_link = get_permalink();
                            $string_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                            // Get price for both simple & variable products
                            if ($product->is_type('variable')) {
                                $string_price = $product->get_variation_price('min', true);
                            } else {
                                $string_price = $product->get_price();
                            }

                            // Custom fields for thickness, length, and color
                            $string_thickness = get_field('thickness') ?: 'نامشخص';
                            $string_length = get_field('length') ?: 'نامشخص';
                            $string_color = get_field('color') ?: 'نامشخص';

                            if (!$string_image) {
                                $string_image = get_template_directory_uri() . '/assets/images/default-string.jpg';
                            }
                        ?>
                        <div class="string-card">
                            <img src="<?php echo esc_url($string_image); ?>" alt="<?php echo esc_attr($string_name); ?>">
                            <div class="string-details">
                                <h3><?php echo esc_html($string_name); ?></h3>
                                <div class="detail-row">
                                    <span class="detail-key">ضخامت</span>
                                    <span class="detail-value"><?php echo esc_html($string_thickness); ?> mm</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-key">طول</span>
                                    <span class="detail-value"><?php echo esc_html($string_length); ?> M</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-key">رنگ</span>
                                    <span class="detail-value"><?php echo esc_html($string_color); ?></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo esc_url($string_link); ?>" class="view-btn">مشاهده</a>
                                <span class="price"><?php echo number_format($string_price, 0, ',', ','); ?> تومان</span>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p class="no-products">محصولی یافت نشد.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
