<?php get_header(); ?>
<!--<h1>Single</h1>-->
<main id="error-404">
  <section class="content" id="post-<?php the_ID(); ?>" >
    <div class="wrapper row-wrap">
      <div class="has-sidebar">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <p>Nothing found for the requested page.</p>
        </article>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </section>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
