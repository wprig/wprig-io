<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none"><symbol id="site-logo" viewBox="0 0 360 432"><title>WP Rig logo</title><path d="M72 72H0v216h72V144h72V72zM216 72v72h72v72h-72v-72h-72v144h144v36c0 19.9-16.1 36-36 36H144v72h144c39.8 0 72-32.2 72-72V72H216z" class="logo-rig" fill="currentColor"/><path d="M29.6 432H13.1L.3 359.8h18.9l4.8 40 9.7-40h15.1l9.7 40 4.9-40h18.8L69.6 432H53l-11.7-43.5L29.6 432zM105.6 407.6V432H88.2v-72.2h24.3c14.1 0 23.8 7.3 23.8 23.4 0 16-9.5 24.4-23.8 24.4h-6.9zm3.5-14.4c7.2 0 9.7-2.7 9.7-9.9 0-5.9-2.5-9-9.7-9h-3.6v18.9h3.6z" class="logo-wp" fill="currentColor"/><path d="M144 0h72v72h-72z" class="logo-dot" fill="black"/></symbol></svg>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wprig' ); ?></a>
		<header id="masthead" class="site-header">
			<?php if ( has_header_image() ) : ?>
				<figure class="header-image">
					<?php the_header_image_tag(); ?>
				</figure>
			<?php endif; ?>
			<div class="site-branding">

				<figure class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg viewBox="0 0 360 432">
							<use xlink:href="#site-logo" x="0" y="0"/>
						</svg>
					</a>
				</figure>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php $wprig_description = get_bloginfo( 'description', 'display' ); ?>
				<?php if ( $wprig_description || is_customize_preview() ) : ?>
					<p class="site-description screen-reader-text"><?php echo $wprig_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation"
				<?php if ( wprig_is_amp() ) : ?>
					[class]=" siteNavigationMenu.expanded ? 'main-navigation toggled-on' : 'main-navigation' "
				<?php endif; ?>
			>
				<?php if ( wprig_is_amp() ) : ?>
					<amp-state id="siteNavigationMenu">
						<script type="application/json">
							{
								"expanded": false
							}
						</script>
					</amp-state>
				<?php endif; ?>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
					<?php if ( wprig_is_amp() ) : ?>
						on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
						[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
					<?php endif; ?>
				>
					<?php esc_html_e( 'Menu', 'wprig' ); ?>
				</button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
