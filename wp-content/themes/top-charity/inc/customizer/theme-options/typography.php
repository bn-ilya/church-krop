<?php

/**
 * Typography
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_typography',
	array(
		'panel' => 'top_charity_theme_options',
		'title' => esc_html__( 'Typography', 'top-charity' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'top_charity_site_title_font',
	array(
		'default'           => 'Lato',
		'sanitize_callback' => 'top_charity_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'top_charity_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'top-charity' ),
		'section'  => 'top_charity_typography',
		'settings' => 'top_charity_site_title_font',
		'type'     => 'select',
		'choices'  => top_charity_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'top_charity_site_description_font',
	array(
		'default'           => 'Lato',
		'sanitize_callback' => 'top_charity_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'top_charity_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'top-charity' ),
		'section'  => 'top_charity_typography',
		'settings' => 'top_charity_site_description_font',
		'type'     => 'select',
		'choices'  => top_charity_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'top_charity_header_font',
	array(
		'default'           => 'Lato',
		'sanitize_callback' => 'top_charity_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'top_charity_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'top-charity' ),
		'section'  => 'top_charity_typography',
		'settings' => 'top_charity_header_font',
		'type'     => 'select',
		'choices'  => top_charity_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'top_charity_body_font',
	array(
		'default'           => 'Lato',
		'sanitize_callback' => 'top_charity_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'top_charity_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'top-charity' ),
		'section'  => 'top_charity_typography',
		'settings' => 'top_charity_body_font',
		'type'     => 'select',
		'choices'  => top_charity_get_all_google_font_families(),
	)
);
