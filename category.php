<?php

get_header();
?>
<main id="category" id="post-<?php the_ID(); ?>">

<section class="content ">
  <div class="wrapper row-wrap">
    <div class="has-sidebar" style="border:0px solid blue">
      <h1 class="text-align-left">
        <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
      </h1>
      <div class="grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('grid-item'); ?>>
          <div class="featured-image"> <a href="<?php the_permalink() ?>">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif" class="lazy"> </a> </div>
          <div class="entry">
            <h2 class="header-m header-500"><a href="<?php the_permalink()?>" class="">
              <?php the_title(); ?>
              </a> </h2>
            <p> <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p>
          </div>
          <a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a> </article>
        <?php endwhile; endif; ?>
        <?php wp_pagenavi(); ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</section>
</main>
<?php get_footer(); ?>
