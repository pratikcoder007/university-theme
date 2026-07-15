<?php
/**
 * Footer Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="site-footer">

	<div class="container">

		<div class="footer-top">

			<div class="footer-logo">

				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				}
				?>

			</div>

			<nav class="footer-navigation">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-menu',
						'fallback_cb'    => false,
					)
				);
				?>

			</nav>

			<div class="footer-social">

				<?php
				$social_links = array(
					'facebook' => 'footer_facebook',
					'instagram' => 'footer_instagram',
					'linkedin' => 'footer_linkedin',
					'youtube' => 'footer_youtube',
				);

				foreach ( $social_links as $network => $setting ) :

					$url = university_get_theme_mod( $setting );

					if ( empty( $url ) ) {
						continue;
					}
					?>

					<a
						href="<?php echo esc_url( $url ); ?>"
						target="_blank"
						rel="noopener noreferrer"
						class="social-link social-<?php echo esc_attr( $network ); ?>"
						aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>"
					>

						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-' . $network . '.svg' ); ?>"
							alt="<?php echo esc_attr( ucfirst( $network ) ); ?>"
						>

					</a>

				<?php endforeach; ?>

			</div>

		</div>

		<div class="footer-bottom">

			<p class="copyright">

				<?php
				echo do_shortcode(
					'[university_year]'
				);
				?>

				<?php
				$copyright = university_get_theme_mod(
					'footer_copyright',
					'All Rights Reserved.'
				);

				if ( ! empty( $copyright ) ) :
					?>

					<?php echo esc_html( $copyright ); ?>

				<?php endif; ?>

			</p>

		</div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>