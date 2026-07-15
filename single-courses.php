<?php
/**
 * The template for displaying single Course posts.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();

	$duration = get_post_meta( get_the_ID(), '_course_duration', true );
	$fee      = get_post_meta( get_the_ID(), '_course_fee', true );
	$level    = get_post_meta( get_the_ID(), '_course_level', true );
	$deadline = get_post_meta( get_the_ID(), '_course_deadline', true );
	$featured = get_post_meta( get_the_ID(), '_featured_course', true );
	?>

	<section class="single-course">

		<div class="container">

			<div class="course-content">

				<?php if ( has_post_thumbnail() ) : ?>

					<div class="course-thumbnail">

						<?php the_post_thumbnail( 'large' ); ?>

					</div>

				<?php endif; ?>

				<header class="course-header">

					<h1 class="course-title">

						<?php the_title(); ?>

					</h1>

				</header>

				<div class="course-description">

					<?php the_content(); ?>

				</div>

				<div class="course-information">

					<h2>

						<?php esc_html_e( 'Course Information', 'university-theme' ); ?>

					</h2>

					<table class="course-table">

						<tbody>

							<tr>

								<th>
									<?php esc_html_e( 'Duration', 'university-theme' ); ?>
								</th>

								<td>
									<?php echo esc_html( $duration ); ?>
								</td>

							</tr>

							<tr>

								<th>
									<?php esc_html_e( 'Fee', 'university-theme' ); ?>
								</th>

								<td>
									<?php echo esc_html( $fee ); ?>
								</td>

							</tr>

							<tr>

								<th>
									<?php esc_html_e( 'Level', 'university-theme' ); ?>
								</th>

								<td>
									<?php echo esc_html( $level ); ?>
								</td>

							</tr>

							<tr>

								<th>
									<?php esc_html_e( 'Admission Deadline', 'university-theme' ); ?>
								</th>

								<td>
									<?php echo esc_html( $deadline ); ?>
								</td>

							</tr>

							<tr>

								<th>
									<?php esc_html_e( 'Featured Course', 'university-theme' ); ?>
								</th>

								<td>

									<?php
									echo esc_html(
										'1' === $featured ?
										__( 'Yes', 'university-theme' ) :
										__( 'No', 'university-theme' )
									);
									?>

								</td>

							</tr>

							<tr>

								<th>

									<?php esc_html_e( 'Course Categories', 'university-theme' ); ?>

								</th>

								<td>

									<?php
									echo wp_kses_post( get_the_term_list( get_the_ID(), 'course-category', '', ', ' ) );
									?>

								</td>

							</tr>

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</section>

	<?php

endwhile;

get_footer();