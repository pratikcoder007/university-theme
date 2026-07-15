<?php
/**
 * Helper Functions.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get Theme Mod.
 *
 * @param string $setting Theme setting.
 * @param mixed  $default Default value.
 *
 * @return mixed
 */
function university_get_theme_mod( $setting, $default = '' ) {

    return get_theme_mod( $setting, $default );
}

/**
 * Get Theme Image.
 *
 * @param string $setting Theme setting.
 * @param string $default Default image.
 *
 * @return string
 */
function university_get_theme_image( $setting, $default ) {

    $image = wp_get_attachment_image_url(
        get_theme_mod( $setting ),
        'full'
    );

    if ( empty( $image ) ) {

        $image = get_template_directory_uri() . '/assets/images/' . $default;

    }

    return $image;
}