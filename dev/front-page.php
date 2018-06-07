<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wprig
 */

get_header();

/*
* Include the component stylesheet for the content.
* This call runs only once on index and archive pages.
* At some point, override functionality should be built in similar to the template part below.
*/
wp_print_styles( array( 'wprig-content', 'wprig-front-page' ) ); // Note: If this was already done it will be skipped.

?>
	<main id="primary" class="site-main">

		<section class="front-header">
			<svg class="front-logo" viewBox="0 0 360 432">
				<use xlink:href="#site-logo" x="0" y="0"/>
			</svg>
			<div class="front-tagline">
				The Progressive WordPress Theme Boilerplate
			</div>
			<div class="front-subhead">
				Starter Theme + Build Process
			</div>
			<div class="front-cta-list">
				<a class="front-cta" href="#install">Get started</a>
				<a class="front-cta" href="#learn">Get learning</a>
			</div>
		</section>
		<aside class="wceu-promo">
			<a href="https://wprig.io/wceu2018">
				<h3>LinkedIn Learning &hearts; WCEU</h3>
				<p>In celebration of WordCamp Europe, LinkedIn Learning has <em>unlocked 6 courses</em>, free until July 10th, 2018.</p>
			</a>
		</aside>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
		<?php the_posts_navigation(); ?>

	</main><!-- #primary -->

<?php
get_footer();
