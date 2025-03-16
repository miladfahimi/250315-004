<section class="hero">
    <div class="hero-right">
        <div class="hero-carousel">
            <?php
            $args = array('post_type' => 'hero_carousel', 'posts_per_page' => 5);
            $carousel_query = new WP_Query($args);
            if ($carousel_query->have_posts()) :
                while ($carousel_query->have_posts()) : $carousel_query->the_post();
                    $hero_carousel_link = get_field('hero_carousel_link'); 
                    ?>
                    <div class="carousel-item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                        <div class="hero-content">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <?php if ($hero_carousel_link) : ?>
                                <a href="<?php echo esc_url($hero_carousel_link); ?>" class="hero-button">
                                    <button>مشاهده محصولات</button>
                                </a>
                            <?php else : ?>
                                <button disabled>مشاهده محصولات</button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
    <div class="hero-left">
        <?php
        $args = array(
            'post_type' => 'hero_left',
            'posts_per_page' => 1,
            'meta_query' => array(
                array(
                    'key'   => 'hero_active',
                    'value' => '1', // Only get the active post
                    'compare' => '='
                )
            )
        );
        $hero_left_query = new WP_Query($args);
        if ($hero_left_query->have_posts()) :
            while ($hero_left_query->have_posts()) : $hero_left_query->the_post(); 
                $hero_link = get_field('hero_link');
                ?>
                <div class="hero-left" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <div class="hero-content">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <?php if ($hero_link) : ?>
                            <a href="<?php echo esc_url($hero_link); ?>" class="hero-button">
                                <button>مشاهده محصولات</button>
                            </a>
                        <?php else : ?>
                            <button disabled>مشاهده محصولات</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
