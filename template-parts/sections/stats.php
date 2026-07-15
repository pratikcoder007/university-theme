<?php
/**
 * Stats section template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<section class="stats-section">

    <div class="container">

        <div class="stats-grid">

            <?php for ( $i = 1; $i <= 3; $i++ ) : ?>

                <?php
                $image = wp_get_attachment_image_url(
                    get_theme_mod( 'stats_' . $i . '_image' ),
                    'full'
                );

                if ( ! $image ) {
                    $image = get_template_directory_uri() . '/assets/images/img_image_57.png';
                }
                ?>

                <article class="stat-card">

                    <img
                        src="<?php echo esc_url( $image ); ?>"
                        alt="<?php echo esc_attr( get_theme_mod( 'stats_' . $i . '_number' ) ); ?>"
                        class="stat-image"
                    >

                    <div class="stat-content">

                        <h2 class="stat-number">

                            <?php
                            echo esc_html(
                                get_theme_mod(
                                    'stats_' . $i . '_number',
                                    'Top 20'
                                )
                            );
                            ?>

                        </h2>

                        <div class="stat-line"></div>

                        <p class="stat-description">

                            <?php
                            echo esc_html(
                                get_theme_mod(
                                    'stats_' . $i . '_description',
                                    'Lorem ipsum dolor sit amet.'
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