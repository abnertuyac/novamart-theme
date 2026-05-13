<?php
/*
 * Template Name: Contact Us
 */
get_header(); ?>

<!-- Contact Hero -->
<section class="contact-hero">
  <h1>Get in <span style="color:var(--accent);">Touch</span></h1>
  <p>Have a question or need help? We'd love to hear from you.</p>
</section>

<div class="contact-content">

  <!-- Contact Info -->
  <div class="contact-info">
    <h2>Contact Information</h2>

    <div class="contact-item">
      <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
      <div>
        <h4>Our Address</h4>
        <p>123 Fashion Street<br>New York, NY 10001</p>
      </div>
    </div>

    <div class="contact-item">
      <div class="icon"><i class="fa fa-phone"></i></div>
      <div>
        <h4>Phone</h4>
        <p>+1 (555) 123-4567</p>
      </div>
    </div>

    <div class="contact-item">
      <div class="icon"><i class="fa fa-envelope"></i></div>
      <div>
        <h4>Email</h4>
        <p>hello@novamart.com</p>
      </div>
    </div>

    <div class="contact-item">
      <div class="icon"><i class="fa fa-clock"></i></div>
      <div>
        <h4>Business Hours</h4>
        <p>Mon–Fri: 9am – 6pm<br>Sat: 10am – 4pm</p>
      </div>
    </div>

    <!-- Social Links -->
    <div style="margin-top:32px;">
      <h4 style="font-weight:700; color:var(--primary); margin-bottom:12px;">Follow Us</h4>
      <div style="display:flex; gap:12px;">
        <a href="#" style="width:40px;height:40px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;"><i class="fab fa-facebook-f"></i></a>
        <a href="#" style="width:40px;height:40px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;"><i class="fab fa-instagram"></i></a>
        <a href="#" style="width:40px;height:40px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>

  <!-- Contact Form -->
  <div class="contact-form-wrap">
    <h2>Send a Message</h2>
    <form class="contact-form" method="post" action="">
      <div class="form-row-2">
        <input type="text" name="contact_name" placeholder="Your Name" required>
        <input type="email" name="contact_email" placeholder="Your Email" required>
      </div>
      <input type="text" name="contact_subject" placeholder="Subject">
      <select name="contact_topic">
        <option value="" disabled selected>What's this about?</option>
        <option value="order">Order Inquiry</option>
        <option value="return">Return / Refund</option>
        <option value="product">Product Question</option>
        <option value="other">Other</option>
      </select>
      <textarea name="contact_message" placeholder="Your message..." required></textarea>
      <button type="submit">
        <i class="fa fa-paper-plane"></i> Send Message
      </button>
    </form>
  </div>

</div>

<?php get_footer(); ?>
