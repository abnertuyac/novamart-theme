<?php
defined('ABSPATH') || exit;

/* --------------------------------------------------
   Theme Setup
-------------------------------------------------- */
function novamart_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('custom-logo', ['height'=>50,'width'=>200,'flex-height'=>true,'flex-width'=>true]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'novamart'),
        'footer'  => __('Footer Menu',  'novamart'),
    ]);
}
add_action('after_setup_theme', 'novamart_setup');

/* --------------------------------------------------
   Enqueue Styles & Scripts
-------------------------------------------------- */
function novamart_enqueue() {
    wp_enqueue_style('novamart-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('novamart-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');
}
add_action('wp_enqueue_scripts', 'novamart_enqueue');

/* --------------------------------------------------
   WooCommerce: remove default wrappers
-------------------------------------------------- */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10);

function novamart_woo_wrapper_start() {
    echo '<div class="container woo-main"><main id="main">';
}
function novamart_woo_wrapper_end() {
    echo '</main></div>';
}
add_action('woocommerce_before_main_content', 'novamart_woo_wrapper_start', 10);
add_action('woocommerce_after_main_content',  'novamart_woo_wrapper_end',   10);

/* --------------------------------------------------
   Cart fragment (live cart count in header)
-------------------------------------------------- */
function novamart_cart_count_fragment($fragments) {
    ob_start();
    $count = WC()->cart->get_cart_contents_count();
    echo '<span class="cart-count">' . $count . '</span>';
    $fragments['.cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'novamart_cart_count_fragment');

/* --------------------------------------------------
   Widgets
-------------------------------------------------- */
function novamart_widgets() {
    register_sidebar([
        'name'          => __('Shop Sidebar', 'novamart'),
        'id'            => 'shop-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'novamart_widgets');

/* --------------------------------------------------
   Remove WooCommerce sidebar on shop pages
-------------------------------------------------- */
add_filter('woocommerce_sidebar', '__return_false');

/* --------------------------------------------------
   Shop page hero banner (fires before wrapper)
-------------------------------------------------- */
function novamart_shop_hero() {
    if (is_shop()) {
        echo '<section class="shop-hero">';
        echo '<div class="shop-hero-content">';
        echo '<h1>' . esc_html(woocommerce_page_title(false)) . '</h1>';
        echo '<p>Discover our full collection of premium fashion &amp; lifestyle products</p>';
        echo '<nav class="shop-breadcrumb">';
        echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
        echo '<i class="fa fa-chevron-right"></i>';
        echo '<span>Shop</span>';
        echo '</nav>';
        echo '</div>';
        echo '</section>';
    }
}
add_action('woocommerce_before_main_content', 'novamart_shop_hero', 5);

/* --------------------------------------------------
   Products per page
-------------------------------------------------- */
add_filter('loop_shop_per_page', fn() => 12);
