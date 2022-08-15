<?php

/**
 * Footer Options
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_footer_options',
	array(
		'panel' => 'top_charity_theme_options',
		'title' => esc_html__( 'Footer Options', 'top-charity' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'top-charity' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'top_charity_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'top_charity_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'top-charity' ),
		'section'  => 'top_charity_footer_options',
		'settings' => 'top_charity_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'top_charity_scroll_top',
	array(
		'sanitize_callback' => 'top_charity_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'top-charity' ),
			'section' => 'top_charity_footer_options',
		)
	)
);
