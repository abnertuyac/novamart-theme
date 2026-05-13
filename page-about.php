<?php
/*
 * Template Name: About Us
 */
get_header(); ?>

<!-- About Hero -->
<section class="about-hero">
  <h1>About <span style="color:var(--accent);">NovaMart</span></h1>
  <p>We're passionate about bringing you the best in fashion, quality, and style — all in one place.</p>
</section>

<div class="about-content">

  <!-- Story Section -->
  <div class="about-grid">
    <div style="background:linear-gradient(135deg,#1a1a2e,#16213e); border-radius:12px; min-height:320px; display:flex; align-items:center; justify-content:center; font-size:6rem;">🛍️</div>
    <div class="about-text">
      <h2>Our Story</h2>
      <p>NovaMart was founded with a simple mission: to make premium fashion accessible to everyone. We believe that looking good shouldn't break the bank, and that quality and style can coexist at every price point.</p>
      <p>From our carefully curated collection of everyday essentials to standout statement pieces, every product in our store is handpicked with our customers in mind.</p>
      <p>We partner with ethical manufacturers who share our commitment to quality craftsmanship and sustainable practices.</p>
      <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-primary" style="display:inline-flex; margin-top:8px;">
        Shop Our Collection
      </a>
    </div>
  </div>

  <!-- Stats -->
  <div class="about-stats">
    <div class="stat-card">
      <div class="stat-number">10K+</div>
      <div class="stat-label">Happy Customers</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">500+</div>
      <div class="stat-label">Products</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">50+</div>
      <div class="stat-label">Brands</div>
    </div>
  </div>

  <!-- Values Section -->
  <div style="margin-top:60px; text-align:center;">
    <h2 style="font-size:1.8rem; font-weight:800; color:var(--primary); margin-bottom:12px;">Our Values</h2>
    <div class="section-line" style="margin-bottom:40px;"></div>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:24px;">
      <div class="stat-card">
        <div style="font-size:2.5rem; margin-bottom:12px;">♻️</div>
        <h3 style="font-weight:700; color:var(--primary); margin-bottom:8px;">Sustainability</h3>
        <p style="color:var(--text-muted); font-size:0.9rem;">We care about the planet and work only with eco-conscious partners.</p>
      </div>
      <div class="stat-card">
        <div style="font-size:2.5rem; margin-bottom:12px;">✅</div>
        <h3 style="font-weight:700; color:var(--primary); margin-bottom:8px;">Quality</h3>
        <p style="color:var(--text-muted); font-size:0.9rem;">Every product is tested and verified before it reaches our shelves.</p>
      </div>
      <div class="stat-card">
        <div style="font-size:2.5rem; margin-bottom:12px;">💛</div>
        <h3 style="font-weight:700; color:var(--primary); margin-bottom:8px;">Community</h3>
        <p style="color:var(--text-muted); font-size:0.9rem;">Our customers are our community — your satisfaction drives everything we do.</p>
      </div>
    </div>
  </div>

  <!-- Team Section -->
  <div class="team-section">
    <h2>Meet the Team</h2>
    <div class="team-grid">
      <div class="team-card">
        <div class="team-avatar">👨‍💼</div>
        <h3>James Carter</h3>
        <p>Founder & CEO</p>
      </div>
      <div class="team-card">
        <div class="team-avatar">👩‍🎨</div>
        <h3>Sofia Rivera</h3>
        <p>Head of Design</p>
      </div>
      <div class="team-card">
        <div class="team-avatar">👨‍💻</div>
        <h3>Abner Tuyac</h3>
        <p>Lead Developer</p>
      </div>
      <div class="team-card">
        <div class="team-avatar">👩‍📦</div>
        <h3>Mia Johnson</h3>
        <p>Operations Manager</p>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
