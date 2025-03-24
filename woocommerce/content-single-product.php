<?php
defined('ABSPATH') || exit;
global $product;

do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form();
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('taktennis-single-product', $product); ?>>
  <div class="taktennis-product-container">

    <div class="taktennis-product-wrapper">
      <div class="taktennis-product-image">
        <?php
        do_action('woocommerce_before_single_product_summary');
        ?>
      </div>

      <div class="taktennis-product-summary">
        <?php
        do_action('woocommerce_single_product_summary');
        ?>
      </div>
    </div>

    <div class="taktennis-product-extras">
      <?php do_action('woocommerce_after_single_product_summary'); ?>
    </div>
  </div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>