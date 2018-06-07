<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>

<?php
// Comment out for sidebar.
if ( ! is_front_page() ) {
	get_sidebar();
}
?>

<footer id="colophon" class="site-footer">
	<section class="site-info">
		<nav class="footer-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>
		<aside class="footer-info">
			WP Rig is an open source project originally created by <a href="https://www.linkedin.com/in/mortenrandhendriksen/">Morten Rand-Hendriksen</a> with the support of <a href="https://linkedin.com/learning?trk=insiders_WPRig_learning">LinkedIn Learning</a>. Continuing development of WP Rig is by its <a href="https://github.com/wprig/wprig/graphs/contributors">contributors</a>. This website is powered by <a href="https://wordpress.org/">WordPress</a> using the <a href="https://github.com/wprig/wprig-io/">Rig</a> theme built using WP Rig.
		</aside>
		<aside class="footer-training">
			Free training for WP Rig provided by:
			<a href="https://linkedin.com/learning?trk=insiders_WPRig_learning">
				<span class="screen-reader-text">LinkedIn Learning.</span>
				<img src="<?php echo esc_url( get_theme_file_uri() . '/images/lil-logo.svg' ); ?>">
			</a>
		</aside>
	</section>
	<section class="site-meta">
		<div class="site-hosting">
			Hosting provided by: <a href="https://siteground.com">
				<span class="screen-reader-text">SiteGround.</span>
				<img src="<?php echo esc_url( get_theme_file_uri() . '/images/siteground.svg' ); ?>">
			</a>
		</div>

	</section><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
