<?php
$hardcoded_brands = array(
    array(
        'name' => 'Yonex',
        'image' => get_template_directory_uri() . '/assets/images/yonex.jpg',
        'slug' => 'yonex'
    ),
    array(
        'name' => 'Wilson',
        'image' => get_template_directory_uri() . '/assets/images/wilson.jpg',
        'slug' => 'wilson'
    ),
    array(
        'name' => 'Babolat',
        'image' => get_template_directory_uri() . '/assets/images/babolat.jpg',
        'slug' => 'babolat'
    ),
    array(
        'name' => 'HEAD',
        'image' => get_template_directory_uri() . '/assets/images/head.jpg',
        'slug' => 'head'
    ),
);

$brands = get_terms(array(
    'taxonomy'   => 'product_brand',
    'hide_empty' => false,
));

$brand_links = array();

if (!empty($brands) && !is_wp_error($brands)) {
    foreach ($brands as $brand) {
        $brand_links[$brand->slug] = get_term_link($brand);
    }
}
?>

<section class="brands">
    <div class="brands-container">
        <?php foreach ($hardcoded_brands as $brand) :
            $brand_name = $brand['name'];
            $brand_image = $brand['image'];
            $brand_slug = $brand['slug'];
            $brand_link = isset($brand_links[$brand_slug]) ? $brand_links[$brand_slug] : '#';
        ?>
            <div class="brand-item" style="background-image: url('<?php echo esc_url($brand_image); ?>');">
                <a href="<?php echo esc_url($brand_link); ?>">
                    <button>خرید از برند <?php echo esc_html($brand_name); ?></button>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
