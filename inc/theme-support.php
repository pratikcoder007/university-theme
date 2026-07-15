<?php
/**
 * Theme support functionality.
 *
 * Registers theme supports and image sizes.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Setup theme defaults and register support for various WordPress features.
 *
 * @return void
 */
function university_theme_setup() {

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable featured images.
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Register custom logo support.
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 120,
            'width'       => 350,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    /*
     * Switch default markup to valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );

    /*
     * Enable selective refresh.
     */
    add_theme_support( 'customize-selective-refresh-widgets' );

    /*
     * Enable responsive embeds.
     */
    add_theme_support( 'responsive-embeds' );

    /*
     * Enable wide and full alignments.
     */
    add_theme_support( 'align-wide' );

    /*
     * Support editor styles.
     */
    add_theme_support( 'editor-styles' );

    /*
     * Load editor stylesheet.
     */
    add_editor_style( 'assets/css/editor-style.css' );

    /*
     * Support block styles.
     */
    add_theme_support( 'wp-block-styles' );

    /*
     * Support automatic feed links.
     */
    add_theme_support( 'automatic-feed-links' );

    /*
     * Support custom spacing.
     */
    add_theme_support( 'custom-spacing' );
}

add_action( 'after_setup_theme', 'university_theme_setup' );