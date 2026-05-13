<?php get_header(); ?>

<div class="container" style="padding: 48px 24px; min-height: 60vh;">
  <main id="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else: ?>
      <p>No content found.</p>
    <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>
