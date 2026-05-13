<footer class="site-footer">
  <div class="footer-grid">

    <!-- Brand -->
    <div class="footer-brand">
      <div class="logo">Nova<span>Mart</span></div>
      <p>Your one-stop shop for premium fashion and lifestyle products. Quality you can trust, style you'll love.</p>
    </div>

    <!-- Shop Links -->
    <div class="footer-col">
      <h4>Shop</h4>
      <ul>
        <li><a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">All Products</a></li>
        <li><a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">New Arrivals</a></li>
        <li><a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">Sale</a></li>
        <li><a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">Best Sellers</a></li>
      </ul>
    </div>

    <!-- Help Links -->
    <div class="footer-col">
      <h4>Help</h4>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Track Order</a></li>
      </ul>
    </div>

    <!-- Company Links -->
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> NovaMart. Built with WordPress &amp; WooCommerce.</p>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
// Search toggle
document.querySelector('.search-toggle')?.addEventListener('click', function(e) {
  e.stopPropagation();
  this.closest('.header-search').classList.toggle('active');
});
document.addEventListener('click', function(e) {
  if (!e.target.closest('.header-search')) {
    document.querySelector('.header-search')?.classList.remove('active');
  }
});
</script>

</body>
</html>
