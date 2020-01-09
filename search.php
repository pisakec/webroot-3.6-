<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header();
?>

<h1>index</h1>
<main id="search">
	<section class="content">
		<div class="wrapper">
			<h1><strong>"<?php echo get_search_query(); ?>"</strong> <?php $allsearch = new WP_Query("s=$s&showposts=0"); echo $allsearch ->found_posts.' results found.'; ?></h1>
			<?php
			global $query_string;
			$query_args = explode( "&", $query_string );
			$search_query = array();

			foreach ( $query_args as $key => $string ) {
				$query_split = explode( "=", $string );
				$search_query[ $query_split[ 0 ] ] = urldecode( $query_split[ 1 ] );
			} // foreach

			$the_query = new WP_Query( $search_query );
			if ( $the_query->have_posts() ):
				?>
			<!-- the loop -->


			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<article class="column-wrap">
				<?php global $post; $categories = get_the_category($post->ID); $cat_link = get_category_link($categories[0]->cat_ID); echo '<a href="'.$cat_link.'"  class="cat-name">'.$categories[0]->cat_name.'</a>' ?>
				
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<div class="featured-image">
						<a href="<?php the_permalink() ?>">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy">
						</a>
					</div>
					<p> <?php if(!empty($post->post_excerpt)) { the_excerpt(); } else { echo wp_trim_words( get_the_content(), 20, '' ); } ?> </p>				
			</article>
			<?php endwhile; ?>
					<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
		</p>
		<?php endif; ?>
		</div>
		<?php //get_sidebar(); ?>
	</section>
</main>

		<?php get_footer(); ?>
