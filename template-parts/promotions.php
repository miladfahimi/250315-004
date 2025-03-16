<?php
// Get the promotion location (taxonomy term) dynamically
$promotion_location = isset($args['location']) ? $args['location'] : '';

// Query promotions with the selected location
$args = array(
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

$promotion_query = new WP_Query($args);

if ($promotion_query->have_posts()) :
    echo '<section class="promotion-section"><div class="promotion-container">';
    while ($promotion_query->have_posts()) : $promotion_query->the_post();
        $brand_name = get_field('brand_name');
        $heading = get_field('heading');
        $description = get_field('description');
        $promotion_link = get_field('promotion_link');
        $background_image = get_field('background_image');
        $arrow_icon = get_field('arrow_icon');

        $background_url = (!empty($background_image) && isset($background_image['url'])) 
            ? esc_url($background_image['url']) 
            : '';

        $arrow_icon_url = (!empty($arrow_icon) && isset($arrow_icon['url'])) 
            ? esc_url($arrow_icon['url']) 
            : '';
        ?>
        <div class="promotion-card" style="background-image: url('<?php echo $background_url; ?>');">
            <div class="promotion-content">
                <span class="brand-name"><?php echo esc_html($brand_name); ?></span>
                <h2><?php echo esc_html($heading); ?></h2>
                <p><?php echo esc_html($description); ?></p>
            </div>
            <?php if ($promotion_link) : ?>
                <a href="<?php echo esc_url($promotion_link); ?>" class="promotion-link">
                    <img src="<?php echo $arrow_icon_url; ?>" alt="مشاهده">
                </a>
            <?php endif; ?>
        </div>
        <?php
    endwhile;
    echo '</div></section>';
    wp_reset_postdata();
endif;
?>
