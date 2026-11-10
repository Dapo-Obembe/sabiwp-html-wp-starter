<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Single post content.
 *
 * @package SabiWP_HTML_WP_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
		<p class="post-meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			<span aria-hidden="true">·</span>
			<?php the_category( ', ' ); ?>
		</p>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sabiwp-html-wp-starter' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php the_tags( '<div class="post-tags">' . esc_html__( 'Tags: ', 'sabiwp-html-wp-starter' ), ', ', '</div>' ); ?>
	</footer>
</article>
