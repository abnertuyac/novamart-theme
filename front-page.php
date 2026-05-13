<?php
// If Elementor has built this page, let it render
$_front_id = get_option('page_on_front');
if ($_front_id && class_exists('\Elementor\Plugin') && get_post_meta($_front_id, '_elementor_edit_mode', true) === 'builder') {
    get_header();
    while (have_posts()) { the_post(); the_content(); }
    get_footer();
    return;
}
?>

<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">&#10024; New Season Collection</div>
    <h1>Dress to <span>Impress</span><br>Shop Premium Fashion</h1>
    <p>Discover our curated collection of high-quality clothing, footwear, and accessories for every style and occasion.</p>
    <div class="hero-buttons">
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-primary">
        <i class="fa fa-shopping-bag"></i> Shop Now
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-outline">
        View Collection
      </a>
    </div>
    <div class="hero-trust">
      <span><i class="fa fa-star"></i> 4.9/5 Rating</span>
      <span><i class="fa fa-users"></i> 10K+ Customers</span>
      <span><i class="fa fa-shield-alt"></i> Secure Checkout</span>
    </div>
  </div>
</section>

<!-- FEATURES STRIP -->
<section class="features-strip">
  <div class="features-grid">
    <div class="feature-item">
      <div class="feature-icon">🚚</div>
      <div>
        <h4>Free Shipping</h4>
        <p>On orders over $50</p>
      </div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">↩️</div>
      <div>
        <h4>Easy Returns</h4>
        <p>30-day return policy</p>
      </div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">🔒</div>
      <div>
        <h4>Secure Payment</h4>
        <p>100% secure checkout</p>
      </div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">💬</div>
      <div>
        <h4>24/7 Support</h4>
        <p>We're here to help</p>
      </div>
    </div>
  </div>
</section>

<!-- PROMO BANNER -->
<section class="promo-banner">
  <div class="promo-inner">
    <div class="promo-text">
      <span class="promo-tag"><i class="fa fa-bolt"></i> Limited Time</span>
      <h2>Summer Sale — Up to 40% Off</h2>
      <p>Fresh styles, unbeatable prices. Don't miss out on our biggest sale of the season.</p>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-white">
        <i class="fa fa-tag"></i> Shop the Sale
      </a>
    </div>
    <div class="promo-image">
      <div class="promo-circles">
        <div class="promo-circle-1"></div>
        <div class="promo-circle-2"></div>
        <div class="promo-icon">🛍️</div>
      </div>
    </div>
  </div>
</section>

<!-- SHOP BY CATEGORY -->
<section class="categories-section">
  <div class="container">
    <div class="section-header">
      <h2>Shop by Category</h2>
      <p>Find exactly what you're looking for</p>
      <div class="section-line"></div>
    </div>
    <div class="categories-grid">
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">👕</div>
        <h3>Tops</h3>
        <p class="cat-count">120+ Items</p>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">👖</div>
        <h3>Bottoms</h3>
        <p class="cat-count">85+ Items</p>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">👟</div>
        <h3>Footwear</h3>
        <p class="cat-count">60+ Items</p>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">🧢</div>
        <h3>Accessories</h3>
        <p class="cat-count">200+ Items</p>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">🎁</div>
        <h3>Gift Cards</h3>
        <p class="cat-count">Various</p>
      </a>
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="products-section">
  <div class="container">
    <div class="section-header">
      <h2>Featured Products</h2>
      <p>Our most popular items this season</p>
      <div class="section-line"></div>
    </div>

    <?php echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]'); ?>

    <div style="text-align:center; margin-top:48px;">
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-primary">
        <i class="fa fa-th-large"></i> View All Products
      </a>
    </div>
  </div>
</section>

<!-- SALE PRODUCTS -->
<section class="sale-section">
  <div class="container">
    <div class="section-header">
      <span class="sale-badge-label">🔥 Hot Deals</span>
      <h2>On Sale Now</h2>
      <p>Grab these deals before they're gone</p>
      <div class="section-line"></div>
    </div>
    <?php echo do_shortcode('[products limit="4" columns="4" on_sale="true"]'); ?>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
  <div class="container">
    <div class="section-header">
      <h2>What Our Customers Say</h2>
      <p>Real reviews from real shoppers</p>
      <div class="section-line"></div>
    </div>
    <div class="testimonials-grid">

      <div class="testimonial-card">
        <div class="testimonial-stars">
          <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        </div>
        <p class="testimonial-text">"Absolutely love my new jacket! The quality is outstanding and it arrived in just 2 days. Will definitely be ordering again."</p>
        <div class="testimonial-author">
          <div class="author-avatar">👩</div>
          <div>
            <strong>Sarah M.</strong>
            <span>Verified Buyer</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-stars">
          <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        </div>
        <p class="testimonial-text">"Best online fashion store I've found. The sizing guide was spot-on and the fabric quality is way better than I expected at this price."</p>
        <div class="testimonial-author">
          <div class="author-avatar">👨</div>
          <div>
            <strong>James R.</strong>
            <span>Verified Buyer</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-stars">
          <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i>
        </div>
        <p class="testimonial-text">"The return process was seamless. Customer service was super responsive and helped me find the perfect fit. 10/10 would recommend!"</p>
        <div class="testimonial-author">
          <div class="author-avatar">👩</div>
          <div>
            <strong>Priya K.</strong>
            <span>Verified Buyer</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter-section">
  <div class="newsletter-inner">
    <div class="newsletter-icon">📧</div>
    <h2>Join the NovaMart Family</h2>
    <p>Subscribe for exclusive deals, new arrivals, and style tips delivered to your inbox.</p>
    <form class="newsletter-form" onsubmit="return false;">
      <input type="email" placeholder="Enter your email address" required>
      <button type="submit"><i class="fa fa-paper-plane"></i> Subscribe</button>
    </form>
    <p class="newsletter-note">No spam, ever. Unsubscribe anytime.</p>
  </div>
</section>

<?php get_footer(); ?>
