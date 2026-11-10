<?php
/**
 * Archive template.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div class="container content-layout">
	<section class="content-main">
		<header class="archive-header">
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
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
