<?php get_header(); ?>

<div class="container" style="padding: 48px 24px; min-height: 60vh;">
  <main id="main">
    <?php while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 style="font-size:2rem; font-weight:800; color:var(--primary); margin-bottom:24px;"><?php the_title(); ?></h1>
        <div class="page-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  </main>
</div>

<?php get_footer(); ?>
