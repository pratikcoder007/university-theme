<?php
/**
 * Theme Customizer.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function university_customize_register( $wp_customize ) {

    university_add_section(
        $wp_customize,
        'hero_section',
        'Hero Section'
    );

    university_add_image_control(
        $wp_customize,
        'hero_background',
        'Hero Background',
        'hero_section'
    );

    university_add_text_control(
        $wp_customize,
        'hero_title',
        'Hero Title',
        'hero_section',
        'Join the University of Aberdeen in India'
    );

    university_add_textarea_control(
        $wp_customize,
        'hero_description',
        'Hero Description',
        'hero_section',
        'Global challenges are waiting for new ways of thinking.'
    );

    university_add_text_control(
        $wp_customize,
        'hero_button_text',
        'Button Text',
        'hero_section',
        'Apply Now'
    );

    university_add_url_control(
        $wp_customize,
        'hero_button_url',
        'Button URL',
        'hero_section'
    );

    /**
     * Stats Section.
     */
    university_add_section(
        $wp_customize,
        'stats_section',
        'Stats Section',
        31
    );

    /**
     * Stat Cards.
     */
    for ( $i = 1; $i <= 3; $i++ ) {

        university_add_image_control(
            $wp_customize,
            'stats_' . $i . '_image',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Image', 'university-theme' ),
                $i
            ),
            'stats_section'
        );

        university_add_text_control(
            $wp_customize,
            'stats_' . $i . '_number',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Number', 'university-theme' ),
                $i
            ),
            'stats_section'
        );

        university_add_textarea_control(
            $wp_customize,
            'stats_' . $i . '_description',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Description', 'university-theme' ),
                $i
            ),
            'stats_section'
        );
    }

    /**
     * Why Choose Section.
     */
    university_add_section(
        $wp_customize,
        'why_choose_section',
        'Why Choose Section',
        32
    );

    /**
     * Why Choose Cards.
     */
    for ( $i = 1; $i <= 5; $i++ ) {

        university_add_image_control(
            $wp_customize,
            'why_choose_' . $i . '_icon',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Icon', 'university-theme' ),
                $i
            ),
            'why_choose_section'
        );

        university_add_text_control(
            $wp_customize,
            'why_choose_' . $i . '_title',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Title', 'university-theme' ),
                $i
            ),
            'why_choose_section'
        );

        university_add_textarea_control(
            $wp_customize,
            'why_choose_' . $i . '_description',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Description', 'university-theme' ),
                $i
            ),
            'why_choose_section'
        );
    }

    /**
     * Video Section.
     */
    university_add_section(
        $wp_customize,
        'video_section',
        'Video Section',
        33
    );

    university_add_image_control(
        $wp_customize,
        'video_background',
        'Background Image',
        'video_section'
    );

    university_add_text_control(
        $wp_customize,
        'video_title',
        'Section Title',
        'video_section',
        'Discover Aberdeen Mumbai'
    );

    university_add_textarea_control(
        $wp_customize,
        'video_description',
        'Description',
        'video_section',
        'At the core of the Aberdeen Mumbai campus is the Graduate Research Hub, dedicated to nurturing the next generation of scholars.'
    );

    university_add_url_control(
        $wp_customize,
        'video_url',
        'Video URL',
        'video_section',
        'https://www.youtube.com/'
    );

    /**
     * Careers Section.
     */
    university_add_section(
        $wp_customize,
        'careers_section',
        'Careers Section',
        34
    );

    university_add_image_control(
        $wp_customize,
        'careers_image',
        'Careers Image',
        'careers_section'
    );

    university_add_text_control(
        $wp_customize,
        'careers_title',
        'Section Title',
        'careers_section',
        'Careers and Employability'
    );

    university_add_textarea_control(
        $wp_customize,
        'careers_description',
        'Section Description',
        'careers_section',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    );

    university_add_text_control(
        $wp_customize,
        'careers_button_text',
        'Button Text',
        'careers_section',
        'See More'
    );

    university_add_url_control(
        $wp_customize,
        'careers_button_url',
        'Button URL',
        'careers_section'
    );

    /**
     * CTA Section.
     */
    university_add_section(
        $wp_customize,
        'cta_section',
        'CTA Section',
        35
    );

    university_add_image_control(
        $wp_customize,
        'cta_image',
        'CTA Image',
        'cta_section'
    );

    university_add_text_control(
        $wp_customize,
        'cta_title',
        'CTA Title',
        'cta_section',
        'Ready to Move Forward?'
    );

    university_add_textarea_control(
        $wp_customize,
        'cta_description',
        'CTA Description',
        'cta_section',
        'Connect with Aberdeen\'s global network. From Mumbai to Madrid, our alumni are leaders in their fields, ready to support your journey.'
    );

    university_add_text_control(
        $wp_customize,
        'cta_button_text',
        'Button Text',
        'cta_section',
        'Enquire Now'
    );

    university_add_url_control(
        $wp_customize,
        'cta_button_url',
        'Button URL',
        'cta_section'
    );

    /**
     * Student Life Section.
     */
    university_add_section(
        $wp_customize,
        'student_life_section',
        'Student Life Section',
        36
    );

    /**
     * Student Life Cards.
     */
    for ( $i = 1; $i <= 4; $i++ ) {

        university_add_image_control(
            $wp_customize,
            'student_life_' . $i . '_image',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Image', 'university-theme' ),
                $i
            ),
            'student_life_section'
        );

        university_add_text_control(
            $wp_customize,
            'student_life_' . $i . '_title',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Title', 'university-theme' ),
                $i
            ),
            'student_life_section'
        );

        university_add_textarea_control(
            $wp_customize,
            'student_life_' . $i . '_description',
            sprintf(
                /* translators: %d: Card number. */
                esc_html__( 'Card %d Description', 'university-theme' ),
                $i
            ),
            'student_life_section'
        );
    }

    /**
     * Alumni Section.
     */
    university_add_section(
        $wp_customize,
        'alumni_section',
        'Alumni Section',
        37
    );

    university_add_image_control(
        $wp_customize,
        'alumni_image',
        'Alumni Image',
        'alumni_section'
    );

    university_add_text_control(
        $wp_customize,
        'alumni_title',
        'Section Title',
        'alumni_section',
        'Discover Our Alumni'
    );

    university_add_textarea_control(
        $wp_customize,
        'alumni_description',
        'Section Description',
        'alumni_section',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    );

    university_add_text_control(
        $wp_customize,
        'alumni_button_text',
        'Button Text',
        'alumni_section',
        'See More'
    );

    university_add_url_control(
        $wp_customize,
        'alumni_button_url',
        'Button URL',
        'alumni_section'
    );

    /**
     * Footer Section.
     */
    university_add_section(
        $wp_customize,
        'footer_section',
        'Footer',
        40
    );

    university_add_url_control(
        $wp_customize,
        'footer_facebook',
        'Facebook URL',
        'footer_section'
    );

    university_add_url_control(
        $wp_customize,
        'footer_instagram',
        'Instagram URL',
        'footer_section'
    );

    university_add_url_control(
        $wp_customize,
        'footer_linkedin',
        'LinkedIn URL',
        'footer_section'
    );

    university_add_url_control(
        $wp_customize,
        'footer_youtube',
        'YouTube URL',
        'footer_section'
    );

    university_add_text_control(
        $wp_customize,
        'footer_copyright',
        'Copyright Text',
        'footer_section',
        'All Rights Reserved.'
    );
}

add_action( 'customize_register', 'university_customize_register' );