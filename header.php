<?php
/**
 * The header template.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#site-content">
	<?php esc_html_e( 'Skip to content', 'sabiwp-html-wp-starter' ); ?>
</a>

<header class="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
				<?php $description = get_bloginfo( 'description', 'display' ); ?>
				<?php if ( $description ) : ?>
					<p class="site-description"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
			<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'sabiwp-html-wp-starter' ); ?></span>
			<span class="menu-toggle__bar"></span>
			<span class="menu-toggle__bar"></span>
			<span class="menu-toggle__bar"></span>
		</button>

		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'sabiwp-html-wp-starter' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
	</div>
</header>

<main id="site-content" class="site-content">
