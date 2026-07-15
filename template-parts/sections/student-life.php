<?php
/**
 * Student Life Section Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="student-life-section">

    <div class="container">

        <div class="section-header">

            <h2 class="section-title">

                <?php esc_html_e( 'Student Life', 'university-theme' ); ?>

            </h2>

            <div class="section-line"></div>

        </div>

        <div class="student-life-grid">

            <?php for ( $i = 1; $i <= 4; $i++ ) : ?>

                <?php
                $image = university_get_theme_image(
                    'student_life_' . $i . '_image',
                    'img_image_container_' . $i . '.png'
                );

                $title = university_get_theme_mod(
                    'student_life_' . $i . '_title',
                    'Student Life'
                );

                $description = university_get_theme_mod(
                    'student_life_' . $i . '_description',
                    'Lorem ipsum dolor sit amet.'
                );
                ?>

                <article class="student-card">

                    <img
                        src="<?php echo esc_url( $image ); ?>"
                        alt="<?php echo esc_attr( $title ); ?>"
                        class="student-image"
                    >

                    <div class="student-content">

                        <h3 class="student-title">

                            <?php echo esc_html( $title ); ?>

                        </h3>

                        <p class="student-description">

                            <?php echo esc_html( $description ); ?>

                        </p>

                    </div>

                </article>

            <?php endfor; ?>

        </div>

    </div>

</section>