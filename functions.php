<?php
/**
 * Theme functions.
 *
 * Loads all required theme files.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version.
 */
define( 'UNIVERSITY_THEME_VERSION', '1.0.0' );

/**
 * Theme path.
 */
define( 'UNIVERSITY_THEME_PATH', get_template_directory() );

/**
 * Theme URL.
 */
define( 'UNIVERSITY_THEME_URL', get_template_directory_uri() );

/**
 * Include theme files.
 */
require_once UNIVERSITY_THEME_PATH . '/inc/theme-support.php';
require_once UNIVERSITY_THEME_PATH . '/inc/enqueue.php';
require_once UNIVERSITY_THEME_PATH . '/inc/menus.php';
require_once UNIVERSITY_THEME_PATH . '/inc/helper.php';
require_once UNIVERSITY_THEME_PATH . '/inc/cpt-courses.php';
require_once UNIVERSITY_THEME_PATH . '/inc/customizer.php';
require_once UNIVERSITY_THEME_PATH . '/inc/customizer-helper.php';
require_once UNIVERSITY_THEME_PATH . '/inc/taxonomy-course-category.php';
require_once UNIVERSITY_THEME_PATH . '/inc/metabox-course-information.php';