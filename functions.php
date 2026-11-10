<?php
/**
 * Theme setup and asset loading.
 *
 * @package SabiWP_HTML_WP_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set up theme features.
 */
function sabiwp_html_wp_starter_setup() {
	load_theme_textdomain( 'sabiwp-html-wp-starter', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'sabiwp-html-wp-starter' ),
			'footer'  => __( 'Footer Menu', 'sabiwp-html-wp-starter' ),
		)
	);
}
add_action( 'after_setup_theme', 'sabiwp_html_wp_starter_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function sabiwp_html_wp_starter_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'sabiwp-html-wp-starter-main',
		get_theme_file_uri( '/assets/css/main.css' ),
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'sabiwp-html-wp-starter-main',
		get_theme_file_uri( '/assets/js/main.js' ),
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'sabiwp_html_wp_starter_assets' );

/**
 * Add a class to the body element.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function sabiwp_html_wp_starter_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'not-singular';
	}

	return $classes;
}
add_filter( 'body_class', 'sabiwp_html_wp_starter_body_classes' );
