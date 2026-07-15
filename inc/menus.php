<?php
/**
 * Register theme navigation menus.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register navigation menu locations.
 *
 * @return void
 */
function university_register_menus() {

    register_nav_menus(
        array(
            'primary_menu' => esc_html__( 'Primary Menu', 'university-theme' ),
            'top_menu'     => esc_html__( 'Top Menu', 'university-theme' ),
            'footer_menu'  => esc_html__( 'Footer Menu', 'university-theme' ),
        )
    );

}

add_action( 'after_setup_theme', 'university_register_menus' );