<section class="favorite-items">
    <h2>پرطرفدارترین دسته بندی ها</h2>
    <div class="favorite-grid">
        <?php
        $categories = get_terms([
            'taxonomy'   => 'product_cat',
            'orderby'    => 'count',
            'order'      => 'DESC',
            'hide_empty' => false,
            'parent'     => 0, // Only fetch parent categories
            'number'     => 9,
        ]);

        foreach ($categories as $category) {
            $category_link = get_term_link($category);
            if (is_wp_error($category_link)) {
                continue;
            }

            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . "/assets/images/categories/default.png";

            ?>
            <div class="favorite-item">
                <a href="<?php echo esc_url($category_link); ?>">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                    <p><?php echo esc_html($category->name); ?></p>
                    <span><?php echo esc_html($category->count); ?> محصول</span>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</section>
