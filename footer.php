<?php
/**
 * The footer template.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
</main>

<footer class="site-footer">
	<div class="container site-footer__inner">
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer navigation', 'sabiwp-html-wp-starter' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>

		<p class="site-footer__copyright">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
			<?php esc_html_e( 'All rights reserved.', 'sabiwp-html-wp-starter' ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
