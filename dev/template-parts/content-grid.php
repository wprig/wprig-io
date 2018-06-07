<?php
/**
 * Template part for displaying individual course materials in the course index.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>

<article id="post-<?php the_ID(); ?>" class="course-item">
	<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<div class="course-wrapper">
			<div class="video-thumb">
				<?php the_post_thumbnail( 'video-thumb' ); ?>
			</div><!-- .post-thumbnail -->
			<?php the_title( '<h2 class="entry-title" rel="bookmark">', '</h2>' ); ?>
		</div>
		<div class="movie-cta">Watch this lesson.</div>
	</a>
</article>
