<?php

/**
 * Pagination
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_pagination',
	array(
		'panel' => 'top_charity_theme_options',
		'title' => esc_html__( 'Pagination', 'top-charity' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'top_charity_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'top-charity' ),
			'section'  => 'top_charity_pagination',
			'settings' => 'top_charity_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'top_charity_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'top-charity' ),
		'section'         => 'top_charity_pagination',
		'settings'        => 'top_charity_pagination_type',
		'active_callback' => 'top_charity_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'top-charity' ),
			'numeric' => __( 'Numeric', 'top-charity' ),
		),
	)
);
