<?php

get_header();
?>
<!--<h1>index</h1>-->
<main id="index">
	<section class="content">
		<div class="wrapper row-wrap">
			<div class="no-sidebar grid">
				<!--<div class="grid-sizer"></div>-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink() ?>">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif" class="lazy">
						</a>
					</div>
					
					<div class="entry">	
						<h2 class="header-m header-500"><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a> </h2>
						<p>
							<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p>
						<a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a>
					</div>		
<?php /*?>					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" class="laz full-width"><?php */?>
				</article>
				<?php endwhile; endif; ?>
			</div>


		</div>
	</section>
</main>
<?php get_footer(); ?>