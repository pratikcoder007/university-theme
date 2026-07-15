<?php
/**
 * The header for our theme.
 *
 * Displays the <head> section and everything up to the main content.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

	<!-- Top Header -->
	<div class="header-top">

		<div class="container">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'top_menu',
					'container'      => false,
					'menu_class'     => 'top-menu',
					'fallback_cb'    => false,
				)
			);
			?>

		</div>

	</div>

	<!-- Main Header -->
	<div class="header-main">

		<div class="container">

			<div class="header-content">

				<div class="site-logo">

					<?php
					if ( has_custom_logo() ) {

						the_custom_logo();

					} else {
						?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

							<?php bloginfo( 'name' ); ?>

						</a>

						<?php
					}
					?>

				</div>

				<button
					id="hamburger"
					class="hamburger"
					type="button"
					aria-label="<?php esc_attr_e( 'Toggle Menu', 'university-theme' ); ?>"
				>

					<span></span>
					<span></span>
					<span></span>

				</button>

				<nav
					id="navMenu"
					class="nav-menu"
				>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary_menu',
							'container'      => false,
							'menu_class'     => 'primary-menu',
							'fallback_cb'    => false,
						)
					);
					?>

				</nav>

			</div>

		</div>

	</div>

</header>

<main id="primary" class="site-main">