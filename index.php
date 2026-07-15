<?php
/**
 * Main template file.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section class="default-page">

	<div class="container">

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( has_post_thumbnail() ) : ?>

						<div class="post-thumbnail">

							<a href="<?php the_permalink(); ?>">

								<?php the_post_thumbnail( 'large' ); ?>

							</a>

						</div>

					<?php endif; ?>

					<header class="entry-header">

						<h2 class="entry-title">

							<a href="<?php the_permalink(); ?>">

								<?php the_title(); ?>

							</a>

						</h2>

					</header>

					<div class="entry-content">

						<?php the_excerpt(); ?>

					</div>

				</article>

			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>

		<?php else : ?>

			<p>

				<?php esc_html_e( 'No posts found.', 'university-theme' ); ?>

			</p>

		<?php endif; ?>

	</div>

</section>

<?php
get_footer();