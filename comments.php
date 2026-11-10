<?php
/**
 * Comments template.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf(
				esc_html(
					_n( '%1$s comment', '%1$s comments', get_comments_number(), 'sabiwp-html-wp-starter' )
				),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php
	if ( ! comments_open() && get_comments_number() ) :
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sabiwp-html-wp-starter' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
