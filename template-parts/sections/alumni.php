<?php
/**
 * Alumni Section Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$image = university_get_theme_image(
    'alumni_image',
    'img_image_59.png'
);

$title = university_get_theme_mod(
    'alumni_title',
    'Discover Our Alumni'
);

$description = university_get_theme_mod(
    'alumni_description',
    'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
);

$button_text = university_get_theme_mod(
    'alumni_button_text',
    'See More'
);

$button_url = university_get_theme_mod(
    'alumni_button_url',
    '#'
);
?>

<!-- Alumni Section -->

<section class="alumni-section">

    <div class="container">

        <div class="careers-header">

            <h2 class="careers-title">

                <?php echo esc_html( $title ); ?>

            </h2>

            <div class="careers-line"></div>

        </div>

        <div class="careers-content">

            <img
                src="<?php echo esc_url( $image ); ?>"
                alt="<?php echo esc_attr( $title ); ?>"
                class="careers-image"
            >

            <div class="careers-text-wrapper">

                <p class="careers-text">

                    <?php echo esc_html( $description ); ?>

                </p>

                <a
                    href="<?php echo esc_url( $button_url ); ?>"
                    class="see-more-btn"
                >

                    <?php echo esc_html( $button_text ); ?>

                </a>

            </div>

        </div>

    </div>

</section>