<?php
/**
 * Enqueue theme assets.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue frontend styles and scripts.
 *
 * @return void
 */
function university_theme_enqueue_assets() {

    /**
     * Theme stylesheet.
     */
    wp_enqueue_style(
        'university-theme-style',
        get_stylesheet_uri(),
        array(),
        UNIVERSITY_THEME_VERSION
    );

    /**
     * Main stylesheet.
     */
    wp_enqueue_style(
        'university-main-style',
        UNIVERSITY_THEME_URL . '/assets/css/main.css',
        array( 'university-theme-style' ),
        filemtime( UNIVERSITY_THEME_PATH . '/assets/css/main.css' )
    );

    /**
     * Main JavaScript.
     */
    wp_enqueue_script(
        'university-main-script',
        UNIVERSITY_THEME_URL . '/assets/js/main.js',
        array(),
        filemtime( UNIVERSITY_THEME_PATH . '/assets/js/main.js' ),
        true
    );

    /**
     * Localize script.
     */
    wp_localize_script(
        'university-main-script',
        'universityTheme',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'homeUrl' => home_url(),
            'nonce'   => wp_create_nonce( 'university_nonce' ),
        )
    );

    /**
     * Threaded comments.
     */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'university_theme_enqueue_assets' );