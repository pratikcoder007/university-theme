<?php
/**
 * The template for displaying Courses archive.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section class="programs-section">

	<div class="container">

		<div class="programs-header">

			<h1 class="programs-title">

				<?php post_type_archive_title(); ?>

			</h1>

			<div class="programs-line"></div>

		</div>

		<?php if ( have_posts() ) : ?>

			<div class="programs-grid">

				<?php
				while ( have_posts() ) :
					the_post();

					$duration = get_post_meta( get_the_ID(), '_course_duration', true );
					$fee      = get_post_meta( get_the_ID(), '_course_fee', true );
					?>

					<article class="program-card">

						<?php if ( has_post_thumbnail() ) : ?>

							<a href="<?php the_permalink(); ?>">

								<?php
								the_post_thumbnail(
									'large',
									array(
										'class' => 'program-image',
									)
								);
								?>

							</a>

						<?php endif; ?>

						<div class="program-content">

							<div class="program-header">

								<h2 class="program-name">

									<a href="<?php the_permalink(); ?>">

										<?php the_title(); ?>

									</a>

								</h2>

								<div class="program-line"></div>

							</div>

							<p class="program-description">

								<?php the_excerpt(); ?>

							</p>

							<?php if ( $duration ) : ?>

								<p class="course-duration">

									<strong>
										<?php esc_html_e( 'Duration:', 'university-theme' ); ?>
									</strong>

									<?php echo esc_html( $duration ); ?>

								</p>

							<?php endif; ?>

							<?php if ( $fee ) : ?>

								<p class="course-fee">

									<strong>
										<?php esc_html_e( 'Fee:', 'university-theme' ); ?>
									</strong>

									<?php echo esc_html( $fee ); ?>

								</p>

							<?php endif; ?>

							<?php
							$terms = get_the_terms(
								get_the_ID(),
								'course-category'
							);

							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
								?>

								<p class="course-category">

									<strong>

										<?php esc_html_e( 'Category:', 'university-theme' ); ?>

									</strong>

									<?php
									echo esc_html(
										implode(
											', ',
											wp_list_pluck(
												$terms,
												'name'
											)
										)
									);
									?>

								</p>

							<?php endif; ?>

							<a
								href="<?php the_permalink(); ?>"
								class="program-link"
							>

								<span class="program-link-text">

									<?php esc_html_e( 'See More', 'university-theme' ); ?>

								</span>

								<img
									class="program-arrow"
									src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/img_link_arrow.svg' ); ?>"
									alt="<?php esc_attr_e( 'Arrow', 'university-theme' ); ?>"
								>

							</a>

						</div>

					</article>

				<?php endwhile; ?>

			</div>

			<div class="pagination">

				<?php the_posts_pagination(); ?>

			</div>

		<?php else : ?>

			<p>

				<?php esc_html_e( 'No courses found.', 'university-theme' ); ?>

			</p>

		<?php endif; ?>

	</div>

</section>

<?php
get_footer();