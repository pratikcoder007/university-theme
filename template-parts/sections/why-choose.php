<?php
/**
 * Why Choose section template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="why-choose-section">

    <div class="container">

        <div class="section-header">

            <h2 class="section-title">

                <?php esc_html_e( 'Why Choose Aberdeen', 'university-theme' ); ?>

            </h2>

            <div class="section-line"></div>

        </div>

        <div class="why-choose-grid">

            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>

                <?php
                $icon = wp_get_attachment_image_url(
                    get_theme_mod( 'why_choose_' . $i . '_icon' ),
                    'full'
                );

                if ( ! $icon ) {
                    $icon = get_template_directory_uri() . '/assets/images/img_frame_1000007146.svg';
                }
                ?>

                <article class="why-card">

                    <div class="why-card-icon">

                        <img
                            src="<?php echo esc_url( $icon ); ?>"
                            alt="<?php echo esc_attr( get_theme_mod( 'why_choose_' . $i . '_title' ) ); ?>"
                        >

                    </div>

                    <div class="why-card-content">

                        <h3 class="why-card-title">

                            <?php
                            echo esc_html(
                                get_theme_mod(
                                    'why_choose_' . $i . '_title',
                                    'Why Choose Aberdeen'
                                )
                            );
                            ?>

                        </h3>

                        <p class="why-card-description">

                            <?php
                            echo esc_html(
                                get_theme_mod(
                                    'why_choose_' . $i . '_description',
                                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                                )
                            );
                            ?>

                        </p>

                    </div>

                </article>

            <?php endfor; ?>

        </div>

    </div>

</section>