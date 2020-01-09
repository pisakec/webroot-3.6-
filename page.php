<?php get_header(); ?>

<!--<h1>Page</h1>-->
<main id="page">
	<section class="content" id="post-<?php the_ID(); ?>" >
		<div class="wrapper row-wrap">
			<div class="has-sidebar">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink()?>">
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy">
						</a>
					</div>
					<h2 class="header-m header-500"><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a> </h2>
					<div class="entry">						
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink()?>" class="read-more btn"><i class="icon-eye"></i></a>
				</article>
				<?php endwhile; endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
