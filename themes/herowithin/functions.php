<?php
/**
 * HeroWithin child theme bootstrap.
 *
 * Presentation layer only. Formation Matrix domain logic (the hw_coordinate CPT,
 * the 144 Formation Coordinates, taxonomies, Matrix rendering) lives in the separate
 * "HeroWithin Formation Matrix Core" plugin and must NOT be moved into this theme.
 *
 * @package HeroWithin
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'HEROWITHIN_VERSION' ) ) {
	define( 'HEROWITHIN_VERSION', '2.0.0' );
}

/**
 * Theme supports.
 */
function herowithin_setup() {
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
add_action( 'after_setup_theme', 'herowithin_setup' );

/**
 * Register HeroWithin block-pattern categories so reusable sections stay organized
 * in the inserter.
 */
function herowithin_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	$categories = array(
		'herowithin-home'        => __( 'HeroWithin — Homepage', 'herowithin' ),
		'herowithin-orientation' => __( 'HeroWithin — Orientation', 'herowithin' ),
		'herowithin-formation'   => __( 'HeroWithin — Formation', 'herowithin' ),
		'herowithin-story'       => __( 'HeroWithin — Story', 'herowithin' ),
		'herowithin-practice'    => __( 'HeroWithin — Practice', 'herowithin' ),
		'herowithin-discovery'   => __( 'HeroWithin — Discovery', 'herowithin' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'herowithin_register_pattern_categories' );

/**
 * Register custom block styles used by HeroWithin patterns.
 * Styling for these lives in assets/css/herowithin.css.
 */
function herowithin_register_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	register_block_style(
		'core/button',
		array(
			'name'  => 'hw-secondary',
			'label' => __( 'HeroWithin Secondary', 'herowithin' ),
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'  => 'hw-scripture',
			'label' => __( 'HeroWithin Scripture', 'herowithin' ),
		)
	);
}
add_action( 'init', 'herowithin_register_block_styles' );

/**
 * Frontend assets: fonts + the frontend stylesheet.
 *
 * This is hooked to wp_enqueue_scripts ONLY (the public site), never to
 * enqueue_block_editor_assets.
 */
function herowithin_enqueue_frontend_assets() {
	// Canon typefaces: Playfair Display (display), Outfit (section/scripture), Inter (body/UI).
	wp_enqueue_style(
		'herowithin-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;1,400&family=Outfit:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null
	);

	// Twenty Twenty-Five parent stylesheet, then the HeroWithin frontend layer on top.
	$parent = wp_get_theme( 'twentytwentyfive' );
	wp_enqueue_style(
		'twentytwentyfive-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$parent->exists() ? $parent->get( 'Version' ) : HEROWITHIN_VERSION
	);

	wp_enqueue_style(
		'herowithin-frontend',
		get_stylesheet_directory_uri() . '/assets/css/herowithin.css',
		array( 'twentytwentyfive-style', 'herowithin-fonts' ),
		HEROWITHIN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'herowithin_enqueue_frontend_assets' );

/**
 * Editor assets: load ONLY the canon fonts into the editor iframe so headings and body
 * render in the real typefaces. The heavy frontend layout CSS is intentionally excluded.
 */
function herowithin_enqueue_editor_fonts() {
	wp_enqueue_style(
		'herowithin-editor-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;1,400&family=Outfit:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null
	);
}
add_action( 'enqueue_block_editor_assets', 'herowithin_enqueue_editor_fonts' );
