<?php

/**
 * Archive Layout
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'top-charity' ),
		'panel' => 'top_charity_theme_options',
	)
);

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'top_charity_archive_column_layout',
	array(
		'default'           => 'column-3',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_archive_column_layout',
	array(
		'label'   => esc_html__( 'Select Column Layout', 'top-charity' ),
		'section' => 'top_charity_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'column-2' => __( 'Column 2', 'top-charity' ),
			'column-3' => __( 'Column 3', 'top-charity' ),
			'column-4' => __( 'Column 4', 'top-charity' ),
		),
	)
);
