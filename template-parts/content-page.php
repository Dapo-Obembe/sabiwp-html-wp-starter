<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page content.
 *
 * @package SabiWP_HTML_WP_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
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
</article>
