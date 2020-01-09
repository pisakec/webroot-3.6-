<?php

get_header();
?>

<main id="tag">
	<section class="content ">
		<div class="wrapper has-sidebar">
	<div class="badge-01">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail('full', array('class' => 'news-img-lg full-width')); ?></a>
					</div>
					<div class="entry">
						<h2 class="header-m header-500"><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a> </h2>
						<p>
							<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p>
					</div>
					<a href="<?php the_permalink()?>" class="read-more btn"><i class="icon-eye"></i></a>
				</article>				
			   <?php endwhile; endif; ?>
			<?php wp_pagenavi(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>

