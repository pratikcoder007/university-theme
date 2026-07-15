<?php
/**
 * Theme Customizer Helper Functions.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add Customizer Section.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @param string               $id Section ID.
 * @param string               $title Section title.
 * @param int                  $priority Section priority.
 */
function university_add_section( $wp_customize, $id, $title, $priority = 30 ) {

    $wp_customize->add_section(
        $id,
        array(
            'title'    => esc_html( $title ),
            'priority' => absint( $priority ),
        )
    );
}

/**
 * Add Text Control.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @param string               $id Setting ID.
 * @param string               $label Label.
 * @param string               $section Section ID.
 * @param string               $default Default value.
 */
function university_add_text_control(
    $wp_customize,
    $id,
    $label,
    $section,
    $default = ''
) {

    $wp_customize->add_setting(
        $id,
        array(
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        $id,
        array(
            'label'   => esc_html( $label ),
            'section' => $section,
            'type'    => 'text',
        )
    );
}

/**
 * Add Textarea Control.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @param string               $id Setting ID.
 * @param string               $label Label.
 * @param string               $section Section ID.
 * @param string               $default Default value.
 */
function university_add_textarea_control(
    $wp_customize,
    $id,
    $label,
    $section,
    $default = ''
) {

    $wp_customize->add_setting(
        $id,
        array(
            'default'           => $default,
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        $id,
        array(
            'label'   => esc_html( $label ),
            'section' => $section,
            'type'    => 'textarea',
        )
    );
}

/**
 * Add URL Control.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @param string               $id Setting ID.
 * @param string               $label Label.
 * @param string               $section Section ID.
 * @param string               $default Default value.
 */
function university_add_url_control(
    $wp_customize,
    $id,
    $label,
    $section,
    $default = '#'
) {

    $wp_customize->add_setting(
        $id,
        array(
            'default'           => $default,
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        $id,
        array(
            'label'   => esc_html( $label ),
            'section' => $section,
            'type'    => 'url',
        )
    );
}

/**
 * Add Image Control.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @param string               $id Setting ID.
 * @param string               $label Label.
 * @param string               $section Section ID.
 */
function university_add_image_control(
    $wp_customize,
    $id,
    $label,
    $section
) {

    $wp_customize->add_setting(
        $id,
        array(
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            $id,
            array(
                'label'     => esc_html( $label ),
                'section'   => $section,
                'mime_type' => 'image',
            )
        )
    );
}