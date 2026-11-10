<?php
/**
 * Page template.
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
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</section>
</div>
<?php
get_footer();
