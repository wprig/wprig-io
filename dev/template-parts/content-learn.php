<?php
/**
 * Template part for displaying course materials
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>
<?php wp_print_styles( array( 'wprig-course-index' ) ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( has_term( 'video', 'modus' ) ) {
			?>
			<div class="post-category entry-meta">
				<?php echo get_the_term_list( $post->ID, 'course', '', ', ' ); ?>
			</div>
			<?php
		}
		?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
		<div class="entry-meta">
			<?php
			if ( ! has_term( 'video', 'modus' ) ) {
				wprig_posted_on();
				wprig_posted_by();
			}
			if ( has_term( 'video', 'modus' ) ) {
				wprig_instructed_by();
			}
			if ( ! has_term( 'video', 'modus' ) ) {
				wprig_comments_link();
			}
			?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php
	if ( ! has_term( 'video', 'modus' ) ) {
		wprig_post_thumbnail();
	}
	?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wprig' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wprig' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		if ( ! has_term( 'video', 'modus' ) ) {
			wprig_post_categories();
			wprig_post_tags();
		}
		wprig_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
if ( is_singular() ) :
	if ( has_term( 'video', 'modus' ) ) {
		?>
		<h2 class="learn-more"><?php echo esc_attr( 'More from this course:', 'wprig' ); ?></h2>
		<section class="course-grid">
			<?php
			$next_post     = get_adjacent_post( true, '', false, 'course' );
			$previous_post = get_adjacent_post( true, '', true, 'course' );

			wprig_prevnext_card( $previous_post, true );
			wprig_prevnext_card( $next_post, false );
			?>
		</section>
		<?php
	} elseif ( has_term( 'documentation', 'modus' ) || has_term( 'tutorial', 'modus' ) ) {
		the_post_navigation(
			array(
				'prev_text'    => '<div class="post-navigation-sub"><span>' . esc_html__( 'Previous article:', 'wprig' ) . '</span></div><span class="rel-title">%title</span>',
				'next_text'    => '<div class="post-navigation-sub"><span>' . esc_html__( 'Next article:', 'wprig' ) . '</span></div><span class="rel-title">%title</span>',
				'in_same_term' => true,
				'taxonomy'     => 'modus',
			)
		);
	}

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
endif;
