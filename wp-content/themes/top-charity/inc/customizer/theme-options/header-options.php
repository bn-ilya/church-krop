<?php

/**
 * Header Options
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_header_options',
	array(
		'panel' => 'top_charity_theme_options',
		'title' => esc_html__( 'Header Options', 'top-charity' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'top_charity_enable_topbar',
	array(
		'sanitize_callback' => 'top_charity_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'top-charity' ),
			'section' => 'top_charity_header_options',
		)
	)
);

// Header Options - Contact Number.
$wp_customize->add_setting(
	'top_charity_contact_number',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_contact_number',
	array(
		'label'           => esc_html__( 'Contact Number', 'top-charity' ),
		'section'         => 'top_charity_header_options',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_topbar_enabled',
	)
);

// Header Options - Email Address.
$wp_customize->add_setting(
	'top_charity_email_address',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_email_address',
	array(
		'label'           => esc_html__( 'Email Address', 'top-charity' ),
		'section'         => 'top_charity_header_options',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_topbar_enabled',
	)
);

// Header Options - Custom Button Label.
$wp_customize->add_setting(
	'top_charity_menu_custom_button_label',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_menu_custom_button_label',
	array(
		'label'    => esc_html__( 'Menu Custom Button Label', 'top-charity' ),
		'section'  => 'top_charity_header_options',
		'settings' => 'top_charity_menu_custom_button_label',
		'type'     => 'text',
	)
);

// Header Options - Custom Button URL.
$wp_customize->add_setting(
	'top_charity_menu_custom_button_url',
	array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'top_charity_menu_custom_button_url',
	array(
		'label'    => esc_html__( 'Menu Button URL', 'top-charity' ),
		'section'  => 'top_charity_header_options',
		'settings' => 'top_charity_menu_custom_button_url',
		'type'     => 'url',
	)
);
