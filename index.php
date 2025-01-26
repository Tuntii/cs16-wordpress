<?php get_header(); ?>

<main class="content">
  
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="cs-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <hr class="cs-hr">
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </article>

      <?php endwhile; ?>
    <?php else : ?>
      <p class="cs-input__label">Henüz içerik yok gibi duruyor.</p>
    <?php endif; ?>

  </div><!-- .container -->
</main>

<?php get_footer(); ?>
