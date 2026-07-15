<?php
/**
 * Latest News section template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Latest posts query.
 */
$news_query = new WP_Query(
    array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 5,
        'ignore_sticky_posts' => true,
    )
);

?>

<!-- News Section -->

<section class="news-section">

    <div class="container">

        <div class="programs-header">

            <h2 class="programs-title">

                <?php esc_html_e( 'Latest News', 'university-theme' ); ?>

            </h2>

            <div class="programs-line"></div>

        </div>

        <?php if ( $news_query->have_posts() ) : ?>

            <div class="news-grid">

                <?php
                $news_query->the_post();
                ?>

                <article class="news-main-card">

                    <a href="<?php the_permalink(); ?>">

                        <?php
                        if ( has_post_thumbnail() ) {

                            the_post_thumbnail(
                                'large',
                                array(
                                    'class' => 'news-main-image',
                                )
                            );

                        } else {
                            ?>

                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_image_container_4.png' ); ?>"
                                alt="<?php the_title_attribute(); ?>"
                                class="news-main-image"
                            >

                            <?php
                        }
                        ?>

                    </a>

                    <div class="news-main-content">

                        <div>

                            <h3 class="news-main-title">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </h3>

                            <div class="news-main-line"></div>

                        </div>

                        <p class="news-main-text">

                            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 35 ) ); ?>

                        </p>

                        <a
                            href="<?php the_permalink(); ?>"
                            class="news-main-link"
                        >

                            <?php esc_html_e( 'Read more', 'university-theme' ); ?>

                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_link_arrow_gray_800.svg' ); ?>"
                                alt="<?php esc_attr_e( 'Arrow', 'university-theme' ); ?>"
                                style="width:20px;height:auto;"
                            >

                        </a>

                    </div>

                </article>

                <div class="news-list">

                    <?php while ( $news_query->have_posts() ) : ?>

                        <?php $news_query->the_post(); ?>

                        <article class="news-item">

                            <a href="<?php the_permalink(); ?>">

                                <?php
                                if ( has_post_thumbnail() ) {

                                    the_post_thumbnail(
                                        'thumbnail',
                                        array(
                                            'class' => 'news-item-image',
                                        )
                                    );

                                } else {
                                    ?>

                                    <img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_image_114x176.png' ); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                        class="news-item-image"
                                    >

                                    <?php
                                }
                                ?>

                            </a>

                            <p class="news-item-text">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </p>

                        </article>

                    <?php endwhile; ?>

                </div>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p>

                <?php esc_html_e( 'No news found.', 'university-theme' ); ?>

            </p>

        <?php endif; ?>

    </div>

</section>