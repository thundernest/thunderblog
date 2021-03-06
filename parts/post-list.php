<?php
/**
 * Displays posts as a grid of cards.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
			<?php endif; ?>
			<?php the_category(); ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title( '<h3>', '</h3>' ); ?>
			</a>
			<div class="summary"><?php the_excerpt(); ?></div>
			<a class="btn btn-link" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'thunderblog' ); ?></a>
		</article>
		<?php
	}
} else {
	_e( 'No posts available.', 'thunderblog' );
}
