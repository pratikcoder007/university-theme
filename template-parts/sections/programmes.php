<?php
/**
 * Programmes section template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Courses query.
 */
$courses = new WP_Query(
    array(
        'post_type'      => 'courses',
        'post_status'    => 'publish',
        'posts_per_page' => 2,
    )
);
?>

<section class="programs-section">

    <div class="container">

        <div class="section-header">

            <h2 class="section-title">

                <?php esc_html_e( 'Our Programmes', 'university-theme' ); ?>

            </h2>

            <div class="section-line"></div>

        </div>

        <?php if ( $courses->have_posts() ) : ?>

            <div class="programs-grid">

                <?php
                while ( $courses->have_posts() ) :
                    $courses->the_post();

                    $duration = get_post_meta( get_the_ID(), '_course_duration', true );
                    $fee      = get_post_meta( get_the_ID(), '_course_fee', true );
                    ?>

                    <article class="program-card">

                        <a href="<?php the_permalink(); ?>">

                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'program-image',
                                    )
                                );
                            }
                            ?>

                        </a>

                        <div class="program-content">

                            <h3 class="program-title">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </h3>

                            <div class="program-line"></div>

                            <p class="program-description">

                                <?php the_excerpt(); ?>

                            </p>

                            <?php if ( $duration ) : ?>

                                <p class="program-duration">

                                    <strong>

                                        <?php esc_html_e( 'Duration:', 'university-theme' ); ?>

                                    </strong>

                                    <?php echo esc_html( $duration ); ?>

                                </p>

                            <?php endif; ?>

                            <?php if ( $fee ) : ?>

                                <p class="program-fee">

                                    <strong>

                                        <?php esc_html_e( 'Fee:', 'university-theme' ); ?>

                                    </strong>

                                    <?php echo esc_html( $fee ); ?>

                                </p>

                            <?php endif; ?>

                            <a
                                class="program-link"
                                href="<?php the_permalink(); ?>"
                            >

                                <?php esc_html_e( 'See More', 'university-theme' ); ?>

                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_link_arrow.svg' ); ?>"
                                    alt="<?php esc_attr_e( 'Arrow', 'university-theme' ); ?>"
                                >

                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p>

                <?php esc_html_e( 'No courses found.', 'university-theme' ); ?>

            </p>

        <?php endif; ?>

    </div>

</section>