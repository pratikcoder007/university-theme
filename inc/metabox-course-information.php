<?php
/**
 * Course Information Meta Box.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register course information meta box.
 *
 * @return void
 */
function university_register_course_meta_box() {

    add_meta_box(
        'university_course_information',
        esc_html__( 'Course Information', 'university-theme' ),
        'university_course_meta_box_callback',
        'courses',
        'normal',
        'default'
    );
}

add_action( 'add_meta_boxes', 'university_register_course_meta_box' );

/**
 * Meta box callback.
 *
 * @param WP_Post $post Current post object.
 *
 * @return void
 */
function university_course_meta_box_callback( $post ) {

    wp_nonce_field(
        'university_save_course_meta',
        'university_course_meta_nonce'
    );

    $duration = get_post_meta( $post->ID, '_course_duration', true );
    $fee      = get_post_meta( $post->ID, '_course_fee', true );
    $level    = get_post_meta( $post->ID, '_course_level', true );
    $deadline = get_post_meta( $post->ID, '_course_deadline', true );
    $featured = get_post_meta( $post->ID, '_featured_course', true );
    ?>

    <p>

        <label for="course_duration">
            <strong><?php esc_html_e( 'Course Duration', 'university-theme' ); ?></strong>
        </label>

        <input
            type="text"
            id="course_duration"
            name="course_duration"
            class="widefat"
            value="<?php echo esc_attr( $duration ); ?>"
        >

    </p>

    <p>

        <label for="course_fee">
            <strong><?php esc_html_e( 'Course Fee', 'university-theme' ); ?></strong>
        </label>

        <input
            type="number"
            id="course_fee"
            name="course_fee"
            class="widefat"
            value="<?php echo esc_attr( $fee ); ?>"
        >

    </p>

    <p>

        <label for="course_level">
            <strong><?php esc_html_e( 'Course Level', 'university-theme' ); ?></strong>
        </label>

        <select
            id="course_level"
            name="course_level"
            class="widefat"
        >

            <option value="">
                <?php esc_html_e( 'Select Level', 'university-theme' ); ?>
            </option>

            <option value="Beginner" <?php selected( $level, 'Beginner' ); ?>>
                <?php esc_html_e( 'Beginner', 'university-theme' ); ?>
            </option>

            <option value="Intermediate" <?php selected( $level, 'Intermediate' ); ?>>
                <?php esc_html_e( 'Intermediate', 'university-theme' ); ?>
            </option>

            <option value="Advanced" <?php selected( $level, 'Advanced' ); ?>>
                <?php esc_html_e( 'Advanced', 'university-theme' ); ?>
            </option>

        </select>

    </p>

    <p>

        <label for="course_deadline">
            <strong><?php esc_html_e( 'Admission Deadline', 'university-theme' ); ?></strong>
        </label>

        <input
            type="date"
            id="course_deadline"
            name="course_deadline"
            class="widefat"
            value="<?php echo esc_attr( $deadline ); ?>"
        >

    </p>

    <p>

        <label>

            <input
                type="checkbox"
                name="featured_course"
                value="1"
                <?php checked( $featured, '1' ); ?>
            >

            <?php esc_html_e( 'Featured Course', 'university-theme' ); ?>

        </label>

    </p>

    <?php
}

/**
 * Save course meta.
 *
 * @param int $post_id Post ID.
 *
 * @return void
 */
function university_save_course_meta( $post_id ) {

    /*
     * Verify nonce.
     */
    if (
        ! isset( $_POST['university_course_meta_nonce'] ) ||
        ! wp_verify_nonce(
            sanitize_text_field( wp_unslash( $_POST['university_course_meta_nonce'] ) ),
            'university_save_course_meta'
        )
    ) {
        return;
    }

    /*
     * Prevent autosave.
     */
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    /*
     * Capability check.
     */
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    /*
     * Save Course Duration.
     */
    if ( isset( $_POST['course_duration'] ) ) {

        update_post_meta( $post_id, '_course_duration', sanitize_text_field( wp_unslash( $_POST['course_duration'] ) ) );
    }

    /*
     * Save Course Fee.
     */
    if ( isset( $_POST['course_fee'] ) ) {

        update_post_meta( $post_id, '_course_fee', floatval( wp_unslash( $_POST['course_fee'] ) ) );
    }

    /*
     * Save Course Level.
     */
    if ( isset( $_POST['course_level'] ) ) {

        update_post_meta( $post_id, '_course_level', sanitize_text_field( wp_unslash( $_POST['course_level'] ) ) );
    }

    /*
     * Save Admission Deadline.
     */
    if ( isset( $_POST['course_deadline'] ) ) {

        update_post_meta( $post_id, '_course_deadline', sanitize_text_field( wp_unslash( $_POST['course_deadline'] ) ) );
    }

    /*
     * Save Featured Course.
     */
    update_post_meta( $post_id, '_featured_course', isset( $_POST['featured_course'] ) ? '1' : '0' );
}

add_action( 'save_post_courses', 'university_save_course_meta' );