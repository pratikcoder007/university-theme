<?php
/**
 * Front Page Template.
 *
 * @package University_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

get_template_part( 'template-parts/sections/hero' );
get_template_part( 'template-parts/sections/stats' );
get_template_part( 'template-parts/sections/why-choose' );
get_template_part( 'template-parts/sections/video' );
get_template_part( 'template-parts/sections/programmes' );
get_template_part( 'template-parts/sections/careers' );
get_template_part( 'template-parts/sections/cta' );
get_template_part( 'template-parts/sections/student-life' );
get_template_part( 'template-parts/sections/alumni' );
get_template_part( 'template-parts/sections/latest-news' );

get_footer();