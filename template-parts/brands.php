<?php
$brands = get_terms(array(
    'taxonomy'   => 'product_brand',
    'hide_empty' => false,
    'number'     => 4,
));

if (!empty($brands) && !is_wp_error($brands)) :
?>
<section class="brands">
  <div class="brands-container">
    <?php foreach ($brands as $brand) :
        $brand_name = $brand->name;
        $brand_slug = $brand->slug;
        $brand_link = get_term_link($brand);

        $brand_image = get_field('brand_image', $brand);

        if (!$brand_image) {
            $thumbnail_id = get_term_meta($brand->term_id, 'thumbnail_id', true);
            $brand_image = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
        }

        if (!$brand_image) {
            $brand_image = get_template_directory_uri() . '/images/default-brand.jpg';
        }
        ?>
        <div class="brand-item" style="background-image: url('<?php echo esc_url($brand_image); ?>');">
            <a href="<?php echo esc_url($brand_link); ?>">
                <button>خرید از برند <?php echo esc_html($brand_name); ?></button>
            </a>
        </div>
    <?php endforeach; ?>
  </div>
</section>

<?php endif; ?>
