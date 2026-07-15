<?php
/**
 * The template for displaying all pages.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();
	?>

	<section class="page-section">

		<div class="container">

			<article
				id="post-<?php the_ID(); ?>"
				<?php post_class(); ?>
			>

				<header class="entry-header">

					<h1 class="entry-title">

						<?php the_title(); ?>

					</h1>

				</header>

				<?php if ( has_post_thumbnail() ) : ?>

					<div class="page-thumbnail">

						<?php
						the_post_thumbnail(
							'large',
							array(
								'class' => 'img-fluid',
							)
						);
						?>

					</div>

				<?php endif; ?>

				<div class="entry-content">

					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'university-theme' ),
							'after'  => '</div>',
						)
					);
					?>

				</div>

			</article>

			<?php
			// Load comments if enabled.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>

		</div>

	</section>

<?php endwhile; ?>

<?php
get_footer();