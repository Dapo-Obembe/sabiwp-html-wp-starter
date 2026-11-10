<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template shown when there is no content.
 *
 * @package SabiWP_HTML_WP_Starter
 */
?>
<section class="no-results not-found">
	<h2><?php esc_html_e( 'Nothing found', 'sabiwp-html-wp-starter' ); ?></h2>
	<p><?php esc_html_e( 'Sorry, no content matched your request. Try searching for something else.', 'sabiwp-html-wp-starter' ); ?></p>
	<?php get_search_form(); ?>
</section>
