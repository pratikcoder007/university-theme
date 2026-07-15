<?php
/**
 * Video Section Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$video_image = wp_get_attachment_image_url(
    get_theme_mod( 'video_background' ),
    'full'
);

if ( ! $video_image ) {
    $video_image = get_template_directory_uri() . '/assets/images/img_video_bg.png';
}
?>

<section class="video-section">

    <div class="container">

        <div class="video-header">

            <h2 class="video-title">

                <?php
                echo esc_html(
                    get_theme_mod(
                        'video_title',
                        'Discover Aberdeen Mumbai'
                    )
                );
                ?>

            </h2>

            <div class="video-line"></div>

        </div>

        <div class="video-content">

            <p class="video-text">

                <?php
                echo esc_html(
                    get_theme_mod(
                        'video_description',
                        'At the core of the Aberdeen Mumbai campus is the Graduate Research Hub.'
                    )
                );
                ?>

            </p>

            <div class="video-wrapper">

                <img
                    src="<?php echo esc_url( $video_image ); ?>"
                    alt="<?php esc_attr_e( 'Video Thumbnail', 'university-theme' ); ?>"
                    class="video-image"
                >

                <a
                    href="<?php echo esc_url( get_theme_mod( 'video_url', '#' ) ); ?>"
                    class="video-play"
                    aria-label="<?php esc_attr_e( 'Play Video', 'university-theme' ); ?>"
                >

                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_youtube_play_bu.png' ); ?>"
                        alt="<?php esc_attr_e( 'Play Video', 'university-theme' ); ?>"
                    >

                </a>

            </div>

        </div>

    </div>

</section>