<?php get_header(); ?>

<div class="container" style="padding: 48px 24px; min-height: 60vh;">
  <main id="main">
    <h1 style="font-size:2rem; font-weight:800; color:var(--primary); margin-bottom:32px;">
      <?php the_archive_title(); ?>
    </h1>
    <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px,1fr)); gap:24px;">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article <?php post_class('product-card'); ?> style="background:var(--white); border-radius:var(--radius); box-shadow:var(--shadow); overflow:hidden;">
          <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', ['style'=>'width:100%; height:200px; object-fit:cover;']); ?></a>
          <?php endif; ?>
          <div style="padding:16px;">
            <h2 style="font-size:1rem; font-weight:700;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p style="font-size:0.85rem; color:var(--text-muted); margin-top:8px;"><?php the_excerpt(); ?></p>
          </div>
        </article>
      <?php endwhile; else: ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </div>
    <div style="margin-top:40px;"><?php the_posts_pagination(); ?></div>
  </main>
</div>

<?php get_footer(); ?>
