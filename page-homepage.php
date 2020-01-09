<?php
/*
Template Name: Homepage
*/
get_header();
?>
<!--<h1>Homepage</h1>-->
<main id="homepage">
	<section class="content">
		<div class="wrapper">
			<div class="badge-01">
				<?php 
					query_posts( array(
					//'cat' => 2,
					//'category' => array(2,3,4,5),
						//'post__in'=>get_option('sticky_posts'),
					'category__in' => array( 6,51,40,15 ),
					'offset' => 0, 
					'orderby' => 'rand',
					'posts_per_page' => 44) );
					 ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink() ?>">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy">
						</a>
					</div>
					<div class="entry">
						<?php global $post; $categories = get_the_category($post->ID); $cat_link = get_category_link($categories[0]->cat_ID); echo '<a href="'.$cat_link.'"  class="cat-name">'.$categories[0]->cat_name.'</a>' ?>
						<h2 class="header-s"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p>
							<?php if(!empty($post->post_excerpt)) { the_excerpt(); } else { echo wp_trim_words( get_the_content(), 20, '' ); } ?>
						</p>
						<a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a>
					</div>
				</article>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<?php //get_sidebar(); ?>
		</div>
	</section>
</main>
<!--no div-->
<?php get_footer(); ?>