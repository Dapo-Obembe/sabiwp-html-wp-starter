<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default post card.
 *
 * @package SabiWP_HTML_WP_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-card__thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	<?php endif; ?>

	<div class="post-card__body">
		<p class="post-meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			<span aria-hidden="true">·</span>
			<?php the_category( ', ' ); ?>
		</p>
		<h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-card__excerpt"><?php the_excerpt(); ?></div>
		<a class="text-link" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Read more', 'sabiwp-html-wp-starter' ); ?>
		</a>
	</div>
</article>
