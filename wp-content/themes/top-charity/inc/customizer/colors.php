<?php

/**
 * Color Option
 *
 * @package Top_Charity
 */

// Primary Color.
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#F75E2E',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => __( 'Primary Color', 'top-charity' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);
