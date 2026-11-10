<?php
/**
 * 404 template.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div class="container content-layout">
	<section class="content-main error-404">
		<h1><?php esc_html_e( 'Page not found', 'sabiwp-html-wp-starter' ); ?></h1>
		<p><?php esc_html_e( 'The page you are looking for may have been moved or no longer exists.', 'sabiwp-html-wp-starter' ); ?></p>
		<?php get_search_form(); ?>
		<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Back to homepage', 'sabiwp-html-wp-starter' ); ?>
		</a>
	</section>
</div>
<?php
get_footer();
