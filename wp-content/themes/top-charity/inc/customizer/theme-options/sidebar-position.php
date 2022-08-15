<?php

/**
 * Sidebar Position
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'top-charity' ),
		'panel' => 'top_charity_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'top_charity_sidebar_position',
	array(
		'sanitize_callback' => 'top_charity_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'top_charity_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'top-charity' ),
		'section' => 'top_charity_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'top-charity' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'top-charity' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'top-charity' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'top_charity_post_sidebar_position',
	array(
		'sanitize_callback' => 'top_charity_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'top_charity_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'top-charity' ),
		'section' => 'top_charity_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'top-charity' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'top-charity' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'top-charity' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'top_charity_page_sidebar_position',
	array(
		'sanitize_callback' => 'top_charity_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'top_charity_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'top-charity' ),
		'section' => 'top_charity_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'top-charity' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'top-charity' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'top-charity' ),
		),
	)
);
