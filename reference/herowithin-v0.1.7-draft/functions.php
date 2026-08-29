<?php
/**
 * HeroWithin child theme bootstrap.
 *
 * Build-phase package. WordPress is presentation/discovery; governed source remains authoritative.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register HeroWithin pattern categories.
 */
function herowithin_register_pattern_categories() {
    $categories = array(
        'herowithin-orientation' => 'HeroWithin — Orientation',
        'herowithin-formation'   => 'HeroWithin — Formation',
        'herowithin-story'       => 'HeroWithin — Story',
        'herowithin-practice'    => 'HeroWithin — Practice',
        'herowithin-discovery'   => 'HeroWithin — Discovery',
    );

    foreach ( $categories as $slug => $label ) {
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category( $slug, array( 'label' => __( $label, 'herowithin' ) ) );
        }
    }
}
add_action( 'init', 'herowithin_register_pattern_categories' );

/**
 * Theme supports and editor styling.
 */
function herowithin_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/herowithin.css' );
}
add_action( 'after_setup_theme', 'herowithin_theme_setup' );

/**
 * Load fonts and the small CSS layer that is intentionally outside theme.json.
 * Keep visual identity values tokenized in theme.json wherever possible.
 */
function herowithin_enqueue_assets() {
    wp_enqueue_style(
        'herowithin-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&family=Work+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( 'twentytwentyfive' )->get( 'Version' )
    );

    wp_enqueue_style(
        'herowithin-theme',
        get_stylesheet_directory_uri() . '/assets/css/herowithin.css',
        array( 'twentytwentyfive-style', 'herowithin-fonts' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'herowithin_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'herowithin_enqueue_assets' );
