<?php

/**
 * Front Page Options
 *
 * @package Top Charity
 */

$wp_customize->add_panel(
	'top_charity_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'top-charity' ),
		'priority' => 130,
	)
);

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';

// About Section.
require get_template_directory() . '/inc/customizer/front-page-options/about.php';

// Service Section.
require get_template_directory() . '/inc/customizer/front-page-options/service.php';

// Causes Section.
require get_template_directory() . '/inc/customizer/front-page-options/causes.php';

// CTA Section.
require get_template_directory() . '/inc/customizer/front-page-options/cta.php';

// Team Section.
require get_template_directory() . '/inc/customizer/front-page-options/team.php';

// Blog Section.
require get_template_directory() . '/inc/customizer/front-page-options/blog.php';

// Contact Section.
require get_template_directory() . '/inc/customizer/front-page-options/contact.php';
