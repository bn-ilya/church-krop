<?php

/**
 * Breadcrumb
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'top-charity' ),
		'panel' => 'top_charity_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'top_charity_enable_breadcrumb',
	array(
		'sanitize_callback' => 'top_charity_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'top-charity' ),
			'section' => 'top_charity_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'top_charity_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'top_charity_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'top-charity' ),
		'active_callback' => 'top_charity_is_breadcrumb_enabled',
		'section'         => 'top_charity_breadcrumb',
	)
);
