<?php
/**
 * Register Courses Custom Post Type.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Courses Custom Post Type.
 *
 * @return void
 */
function university_register_courses_cpt() {

    $labels = array(
        'name'                  => esc_html__( 'Courses', 'university-theme' ),
        'singular_name'         => esc_html__( 'Course', 'university-theme' ),
        'menu_name'             => esc_html__( 'Courses', 'university-theme' ),
        'name_admin_bar'        => esc_html__( 'Course', 'university-theme' ),
        'add_new'               => esc_html__( 'Add New', 'university-theme' ),
        'add_new_item'          => esc_html__( 'Add New Course', 'university-theme' ),
        'edit_item'             => esc_html__( 'Edit Course', 'university-theme' ),
        'new_item'              => esc_html__( 'New Course', 'university-theme' ),
        'view_item'             => esc_html__( 'View Course', 'university-theme' ),
        'view_items'            => esc_html__( 'View Courses', 'university-theme' ),
        'search_items'          => esc_html__( 'Search Courses', 'university-theme' ),
        'not_found'             => esc_html__( 'No Courses Found', 'university-theme' ),
        'not_found_in_trash'    => esc_html__( 'No Courses Found in Trash', 'university-theme' ),
        'all_items'             => esc_html__( 'All Courses', 'university-theme' ),
        'archives'              => esc_html__( 'Course Archives', 'university-theme' ),
        'attributes'            => esc_html__( 'Course Attributes', 'university-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array(
            'slug' => 'courses',
        ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
        ),
    );

    register_post_type( 'courses', $args );
}

add_action( 'init', 'university_register_courses_cpt' );