<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('full', array('class' => 'news-img-lg full-width')); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //the_post_thumbnail('full', array('class' => 'news-img-lg full-width')); ?>
	<div class="entry">
	
		<h2 class="header-m header-500">
			<?php the_title(); ?>
		</h2>
		<?php the_content(); ?>
		</div>
</article>
<?php endwhile; endif; ?>