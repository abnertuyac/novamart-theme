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
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">👖</div>
        <h3>Bottoms</h3>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">👟</div>
        <h3>Footwear</h3>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">🧢</div>
        <h3>Accessories</h3>
      </a>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="category-card">
        <div class="cat-icon">🎁</div>
        <h3>Gift Cards</h3>
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

    <?php
    echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]');
    ?>

    <div style="text-align:center; margin-top:40px;">
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-primary">
        View All Products
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
