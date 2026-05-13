<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="header-inner">

    <!-- Logo -->
    <div class="site-logo">
      <?php if (has_custom_logo()): ?>
        <?php the_custom_logo(); ?>
      <?php else: ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          Nova<span>Mart</span>
        </a>
      <?php endif; ?>
    </div>

    <!-- Navigation -->
    <nav class="main-nav" aria-label="Primary">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => function() {
          echo '<ul>
            <li><a href="' . esc_url(home_url('/')) . '">Home</a></li>
            <li><a href="' . esc_url(get_permalink(wc_get_page_id('shop'))) . '">Shop</a></li>
          </ul>';
        },
      ]); ?>
    </nav>

    <!-- Cart -->
    <div class="header-actions">
      <?php if (class_exists('WooCommerce')): ?>
        <div class="header-cart">
          <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Cart">
            <i class="fa fa-shopping-bag"></i>
            <span class="cart-count"><?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?></span>
          </a>
        </div>
      <?php endif; ?>
    </div>

  </div>
</header>
