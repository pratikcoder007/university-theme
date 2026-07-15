<?php
/**
 * Hero Section Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Hero settings.
 */
$hero_image = wp_get_attachment_image_url(
    get_theme_mod( 'hero_background' ),
    'full'
);

$hero_title = get_theme_mod(
    'hero_title',
    'Join the University of Aberdeen in India'
);

$hero_description = get_theme_mod(
    'hero_description',
    'Global challenges are waiting for new ways of thinking. Discover your true north and start creating a more inclusive and sustainable world.'
);

$hero_button_url = get_theme_mod(
    'hero_button_url',
    '#'
);
?>

<!-- Hero Section -->

<section class="hero-section">

    <img
        src="<?php echo esc_url( $hero_image ? $hero_image : get_template_directory_uri() . '/assets/images/img_mumbaiskylineseenfrommarinedrivesouthmumbai_1.png' ); ?>"
        alt="<?php esc_attr_e( 'Mumbai skyline', 'university-theme' ); ?>"
        class="hero-background"
    >

    <div class="hero-content">

        <div class="slider-controls">

            <button
                class="slider-btn"
                type="button"
                aria-label="<?php esc_attr_e( 'Previous Slide', 'university-theme' ); ?>"
            >

                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_chevron_right.svg' ); ?>"
                    alt=""
                    style="transform: rotate(180deg);"
                >

            </button>

            <button
                class="slider-btn"
                type="button"
                aria-label="<?php esc_attr_e( 'Next Slide', 'university-theme' ); ?>"
            >

                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_chevron_right.svg' ); ?>"
                    alt=""
                >

            </button>

        </div>

        <div class="hero-text">

            <div class="container">

                <h1 class="hero-title">

                    <?php echo esc_html( $hero_title ); ?>

                </h1>

                <p class="hero-description">

                    <?php echo esc_html( $hero_description ); ?>

                    <a
                        href="<?php echo esc_url( $hero_button_url ); ?>"
                        class="hero-link"
                    >

                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_link_arrow.svg' ); ?>"
                            alt=""
                            class="hero-link-arrow"
                        >

                    </a>

                </p>

            </div>

        </div>

        <div class="slider-indicators">

            <div class="indicator active"></div>

            <div class="indicator"></div>

            <div class="indicator"></div>

        </div>

    </div>

</section>