<?php get_header(); ?>
<!--<h1>Single</h1>-->
<main id="single">
	<section class="content" id="post-<?php the_ID(); ?>" >
		<div class="wrapper row-wrap">
			<div class="has-sidebar">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /*?>					<a href="<?php the_permalink()?>">
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif" class="lazy full-width">
					</a><?php */?>
					<h2 class="header-xl header-200">
						<?php the_title(); ?> </h2>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>