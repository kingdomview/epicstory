<?php
/**
 * The Epic Story of God child theme bootstrap.
 *
 * Presentation layer only. Formation Matrix domain logic (the hw_coordinate CPT,
 * the 144 Formation Coordinates, taxonomies, Matrix rendering) lives in the separate
 * "The Epic Story of God Formation Matrix Core" plugin and must NOT be moved into this theme.
 *
 * @package EpicStory
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'EPICSTORY_VERSION' ) ) {
	define( 'EPICSTORY_VERSION', '2.0.0' );
}

/**
 * Theme supports.
 */
function epicstory_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );

	/*
	 * Editor styling: load ONLY the small, purpose-built editor stylesheet.
	 *
	 * Rebuild note: the previous v0.1.7 theme hooked its full ~27KB frontend
	 * stylesheet (plus Google Fonts and the parent stylesheet) into
	 * enqueue_block_editor_assets. That broad editor enqueue is a documented
	 * suspect for the Gutenberg save/crash problem. We deliberately keep the
	 * editor surface minimal here. See docs/editor-crash-diagnosis.md.
	 */
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'epicstory_setup' );

/**
 * Register The Epic Story of God block-pattern categories so reusable sections stay organized
 * in the inserter.
 */
function epicstory_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	$categories = array(
		'epicstory-home'        => __( 'The Epic Story of God — Homepage', 'epicstory' ),
		'epicstory-orientation' => __( 'The Epic Story of God — Orientation', 'epicstory' ),
		'epicstory-formation'   => __( 'The Epic Story of God — Formation', 'epicstory' ),
		'epicstory-story'       => __( 'The Epic Story of God — Story', 'epicstory' ),
		'epicstory-practice'    => __( 'The Epic Story of God — Practice', 'epicstory' ),
		'epicstory-discovery'   => __( 'The Epic Story of God — Discovery', 'epicstory' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'epicstory_register_pattern_categories' );

/**
 * Register custom block styles used by The Epic Story of God patterns.
 * Styling for these lives in assets/css/epicstory.css.
 */
function epicstory_register_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	register_block_style(
		'core/button',
		array(
			'name'  => 'es-secondary',
			'label' => __( 'The Epic Story of God Secondary', 'epicstory' ),
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'  => 'es-scripture',
			'label' => __( 'The Epic Story of God Scripture', 'epicstory' ),
		)
	);
}
add_action( 'init', 'epicstory_register_block_styles' );

/**
 * Frontend assets: fonts + the frontend stylesheet.
 *
 * This is hooked to wp_enqueue_scripts ONLY (the public site), never to
 * enqueue_block_editor_assets.
 */
function epicstory_enqueue_frontend_assets() {
	// Canon typefaces: Playfair Display (display), Outfit (section/scripture), Inter (body/UI).
	wp_enqueue_style(
		'epicstory-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;1,400&family=Outfit:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null
	);

	// Twenty Twenty-Five parent stylesheet, then the Epic Story of God frontend layer on top.
	$parent = wp_get_theme( 'twentytwentyfive' );
	wp_enqueue_style(
		'twentytwentyfive-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$parent->exists() ? $parent->get( 'Version' ) : EPICSTORY_VERSION
	);

	wp_enqueue_style(
		'epicstory-frontend',
		get_stylesheet_directory_uri() . '/assets/css/epicstory.css',
		array( 'twentytwentyfive-style', 'epicstory-fonts' ),
		EPICSTORY_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'epicstory_enqueue_frontend_assets' );

/**
 * Editor assets: load ONLY the canon fonts into the editor iframe so headings and body
 * render in the real typefaces. The heavy frontend layout CSS is intentionally excluded.
 */
function epicstory_enqueue_editor_fonts() {
	wp_enqueue_style(
		'epicstory-editor-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;1,400&family=Outfit:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null
	);
}
add_action( 'enqueue_block_editor_assets', 'epicstory_enqueue_editor_fonts' );
