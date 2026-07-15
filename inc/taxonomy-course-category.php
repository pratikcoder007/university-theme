<?php
/**
 * Register Course Categories taxonomy.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Course Categories taxonomy.
 *
 * @return void
 */
function university_register_course_category_taxonomy() {

    $labels = array(
        'name'                       => esc_html__( 'Course Categories', 'university-theme' ),
        'singular_name'              => esc_html__( 'Course Category', 'university-theme' ),
        'search_items'               => esc_html__( 'Search Course Categories', 'university-theme' ),
        'all_items'                  => esc_html__( 'All Course Categories', 'university-theme' ),
        'parent_item'                => esc_html__( 'Parent Course Category', 'university-theme' ),
        'parent_item_colon'          => esc_html__( 'Parent Course Category:', 'university-theme' ),
        'edit_item'                  => esc_html__( 'Edit Course Category', 'university-theme' ),
        'view_item'                  => esc_html__( 'View Course Category', 'university-theme' ),
        'update_item'                => esc_html__( 'Update Course Category', 'university-theme' ),
        'add_new_item'               => esc_html__( 'Add New Course Category', 'university-theme' ),
        'new_item_name'              => esc_html__( 'New Course Category Name', 'university-theme' ),
        'menu_name'                  => esc_html__( 'Course Categories', 'university-theme' ),
        'not_found'                  => esc_html__( 'No Course Categories Found', 'university-theme' ),
        'back_to_items'              => esc_html__( '← Back to Course Categories', 'university-theme' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array(
            'slug' => 'course-category',
        ),
    );

    register_taxonomy( 'course-category', array( 'courses' ), $args );
}

add_action( 'init', 'university_register_course_category_taxonomy' );