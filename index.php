<?php
/**
 * Main template fallback.
 *
 * WordPress uses this file when no more specific template is available.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div class="container content-layout">
	<section class="content-main" aria-label="<?php esc_attr_e( 'Main content', 'sabiwp-html-wp-starter' ); ?>">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1><?php esc_html_e( 'Latest posts', 'sabiwp-html-wp-starter' ); ?></h1>
			</header>

			<div class="post-list">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
			</div>

			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</section>
</div>
<?php
get_footer();
