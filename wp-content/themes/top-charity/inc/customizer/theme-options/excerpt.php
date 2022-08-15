<?php

/**
 * Excerpt
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_excerpt_options',
	array(
		'panel' => 'top_charity_theme_options',
		'title' => esc_html__( 'Excerpt', 'top-charity' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'top_charity_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'top_charity_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'top-charity' ),
		'section'     => 'top_charity_excerpt_options',
		'settings'    => 'top_charity_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);
