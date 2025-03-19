<?php

function taktennis_register_menus() {
  register_nav_menus(array(
      'primary' => __('Primary Menu', 'taktennis')
  ));
}
add_action('after_setup_theme', 'taktennis_register_menus');

function taktennis_enqueue_styles_scripts() {
    wp_enqueue_style('taktennis-style', get_stylesheet_uri());

    wp_enqueue_script('taktennis-menu', get_template_directory_uri() . '/assets/js/menu.js', array('jquery'), null, true);
    wp_enqueue_script('taktennis-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'taktennis-menu'), null, true);
    wp_enqueue_script('taktennis-hero', get_template_directory_uri() . '/assets/js/hero.js', array('jquery'), null, true);
    wp_enqueue_script('taktennis-newest', get_template_directory_uri() . '/assets/js/newest.js', array('jquery'), null, true);
    wp_enqueue_script('taktennis-strings', get_template_directory_uri() . '/assets/js/strings-carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'taktennis_enqueue_styles_scripts');

function enqueue_custom_styles() {
  wp_enqueue_style('vazirmatn-font', 'https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap', array(), null);

  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');

  wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



function taktennis_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'taktennis_theme_support');


// drop down
class Taktennis_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = null) {
      $submenu_class = ($depth > 0) ? "submenu" : "dropdown-menu";
      $output .= "<ul class='{$submenu_class}'>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $has_children = in_array('menu-item-has-children', $classes) ? "dropdown" : "";

      $output .= '<li class="' . $has_children . '">';
      $output .= '<a href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
  }
}

// style files
function mytheme_enqueue_styles() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

  wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css', array('main-style'));
  wp_enqueue_style('dropdown-style', get_template_directory_uri() . '/assets/css/hero.css', array('main-style'));
  wp_enqueue_style('search-style', get_template_directory_uri() . '/assets/css/main.css', array('main-style'));
  wp_enqueue_style('favorite-categories-style', get_template_directory_uri() . '/assets/css/favorite-categories.css', array('main-style'));
  wp_enqueue_style('promotions-style', get_template_directory_uri() . '/assets/css/promotions.css', array('main-style'));
  wp_enqueue_style('brands-style', get_template_directory_uri() . '/assets/css/brands.css', array('main-style'));
  wp_enqueue_style('discounts-style', get_template_directory_uri() . '/assets/css/discounts.css', array('main-style'));
  wp_enqueue_style('ultimate-style', get_template_directory_uri() . '/assets/css/ultimate.css', array('main-style'));
  wp_enqueue_style('newest-style', get_template_directory_uri() . '/assets/css/newest.css', array('main-style'));
  wp_enqueue_style('strings-style', get_template_directory_uri() . '/assets/css/strings.css', array('main-style'));
  wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/blog.css', array('main-style'));
  wp_enqueue_style('best-player-style', get_template_directory_uri() . '/assets/css/best-player.css', array('main-style'));
  wp_enqueue_style('best-sale-style', get_template_directory_uri() . '/assets/css/best-sale.css', array('main-style'));
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', array('main-style'));

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Hero Carousel
function register_hero_carousel() {
  $args = array(
      'label' => 'Hero Carousel',
      'public' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('hero_carousel', $args);
}
add_action('init', 'register_hero_carousel');

// Hero left
function register_hero_left() {
  $args = array(
      'label' => 'Hero left',
      'public' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('hero_left', $args);
}
add_action('init', 'register_hero_left');


// smooth sliding
function enqueue_slick_assets() {
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script('hero-carousel', get_template_directory_uri() . '/assets/js/hero.js', array('jquery', 'slick-js'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_assets');

// promotions
function register_promotion_section() {
  $args = array(
      'label'               => 'Promotions',
      'public'              => true,
      'show_ui'             => true,
      'menu_icon'           => 'dashicons-megaphone',
      'supports'            => array('title', 'thumbnail'),
      'taxonomies'          => array('promotion_location'), 
  );
  register_post_type('promotion', $args);
}
add_action('init', 'register_promotion_section');

function register_promotion_taxonomy() {
  $labels = array(
      'name'              => __('Promotion Locations', 'textdomain'),
      'singular_name'     => __('Promotion Location', 'textdomain'),
      'search_items'      => __('Search Promotion Locations', 'textdomain'),
      'all_items'         => __('All Promotion Locations', 'textdomain'),
      'parent_item'       => __('Parent Promotion Location', 'textdomain'),
      'parent_item_colon' => __('Parent Promotion Location:', 'textdomain'),
      'edit_item'         => __('Edit Promotion Location', 'textdomain'),
      'update_item'       => __('Update Promotion Location', 'textdomain'),
      'add_new_item'      => __('Add New Promotion Location', 'textdomain'),
      'new_item_name'     => __('New Promotion Location Name', 'textdomain'),
      'menu_name'         => __('Promotion Locations', 'textdomain'),
  );

  $args = array(
      'labels'            => $labels,
      'public'            => true,
      'hierarchical'      => true, 
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array('slug' => 'promotion-location'),
      'show_in_rest'      => true,
  );

  register_taxonomy('promotion_location', 'promotion', $args);
}
add_action('init', 'register_promotion_taxonomy');

function register_ultimate_promotion() {
    $args = array(
        'label'           => __('Ultimate Promotions', 'textdomain'),
        'public'          => true,
        'show_ui'         => true,
        'menu_position'   => 20,
        'menu_icon'       => 'dashicons-megaphone',
        'supports'        => array(),
        'capability_type' => 'post',
        'rewrite'         => array('slug' => 'ultimate-promotion'),
        'show_in_rest'    => true,
    );
    register_post_type('ultimate_promotion', $args);
}
add_action('init', 'register_ultimate_promotion');

function hide_editor_for_ultimate_promotion() {
    remove_post_type_support('ultimate_promotion', 'editor');
    remove_post_type_support('ultimate_promotion', 'thumbnail');
    remove_post_type_support('ultimate_promotion', 'comments');
}
add_action('admin_init', 'hide_editor_for_ultimate_promotion');


function register_recommended_products_menu() {
  $args = array(
      'label'           => __('Recommended Products', 'textdomain'),
      'public'          => true,
      'show_ui'         => true,
      'menu_position'   => 20,
      'menu_icon'       => 'dashicons-star-filled',
      'supports'        => array('title'), 
      'capability_type' => 'post',
      'rewrite'         => array('slug' => 'recommended-products'),
      'show_in_rest'    => true,
  );
  register_post_type('recommended_product', $args);
}
add_action('init', 'register_recommended_products_menu');

function hide_editor_for_recommended_product() {
  remove_post_type_support('recommended_product', 'editor');
  remove_post_type_support('recommended_product', 'thumbnail');
  remove_post_type_support('recommended_product', 'comments');
}
add_action('admin_init', 'hide_editor_for_recommended_product');