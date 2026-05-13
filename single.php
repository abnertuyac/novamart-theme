<?php get_header(); ?>

<div class="container" style="padding: 48px 24px; min-height: 60vh;">
  <main id="main">
    <?php while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 style="font-size:2rem; font-weight:800; color:var(--primary); margin-bottom:16px;"><?php the_title(); ?></h1>
        <p style="color:var(--text-muted); margin-bottom:24px;"><?php echo get_the_date(); ?></p>
        <?php if (has_post_thumbnail()): ?>
          <div style="margin-bottom:24px;"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  </main>
</div>

<?php get_footer(); ?>
