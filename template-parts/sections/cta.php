<?php
/**
 * CTA Section Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$image = university_get_theme_image(
    'cta_image',
    'img_image_200x298.png'
);

$title = university_get_theme_mod(
    'cta_title',
    'Ready to Move Forward?'
);

$description = university_get_theme_mod(
    'cta_description',
    'Connect with Aberdeen\'s global network.'
);

$button_text = university_get_theme_mod(
    'cta_button_text',
    'Enquire Now'
);

$button_url = university_get_theme_mod(
    'cta_button_url',
    '#'
);
?>

<!-- CTA Section -->

<section class="cta-section">

    <div class="container">

        <div class="cta-wrapper">

            <div class="cta-image-wrapper">

                <img
                    src="<?php echo esc_url( $image ); ?>"
                    alt="<?php echo esc_attr( $title ); ?>"
                    class="cta-image"
                >

            </div>

            <div class="cta-content">

                <div class="cta-header">

                    <h2 class="cta-title">

                        <?php echo esc_html( $title ); ?>

                    </h2>

                    <div class="cta-line"></div>

                </div>

                <p class="cta-description">

                    <?php echo esc_html( $description ); ?>

                </p>

                <a
                    href="<?php echo esc_url( $button_url ); ?>"
                    class="apply-btn"
                >

                    <?php echo esc_html( $button_text ); ?>

                </a>

            </div>

        </div>

    </div>

</section>