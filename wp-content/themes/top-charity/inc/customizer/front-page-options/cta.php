<?php

/**
 * CTA Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_cta_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'CTA Section', 'top-charity' ),
		'priority' => 50,
	)
);

// CTA Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_cta_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_cta_section',
		array(
			'label'    => esc_html__( 'Enable CTA Section', 'top-charity' ),
			'section'  => 'top_charity_cta_section',
			'settings' => 'top_charity_enable_cta_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_cta_section',
		array(
			'selector' => '#top_charity_cta_section .section-link',
			'settings' => 'top_charity_enable_cta_section',
		)
	);
}

$default_color = get_theme_mod( 'primary_color', '#F75E2E' );

// CTA Section - Background Color.
$wp_customize->add_setting(
	'top_charity_cta_background_color',
	array(
		'default'           => $default_color,
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'top_charity_cta_background_color',
		array(
			'label'           => esc_html__( 'Background Color', 'top-charity' ),
			'section'         => 'top_charity_cta_section',
			'settings'        => 'top_charity_cta_background_color',
			'active_callback' => 'top_charity_is_cta_section_enabled',
		)
	)
);

// CTA Section - Background Image.
$wp_customize->add_setting(
	'top_charity_cta_background_image',
	array(
		'sanitize_callback' => 'top_charity_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'top_charity_cta_background_image',
		array(
			'label'           => esc_html__( 'Background Image', 'top-charity' ),
			'section'         => 'top_charity_cta_section',
			'settings'        => 'top_charity_cta_background_image',
			'active_callback' => 'top_charity_is_cta_section_enabled',
		)
	)
);

// CTA Section - Section Title.
$wp_customize->add_setting(
	'top_charity_cta_title',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_cta_title',
	array(
		'label'           => esc_html__( 'CTA Title', 'top-charity' ),
		'section'         => 'top_charity_cta_section',
		'settings'        => 'top_charity_cta_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_cta_section_enabled',
	)
);

// CTA Section - Section Description.
$wp_customize->add_setting(
	'top_charity_cta_description',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'top_charity_cta_description',
	array(
		'label'           => esc_html__( 'CTA Description', 'top-charity' ),
		'section'         => 'top_charity_cta_section',
		'settings'        => 'top_charity_cta_description',
		'type'            => 'textarea',
		'active_callback' => 'top_charity_is_cta_section_enabled',
	)
);

// CTA Section - Section Button.
$wp_customize->add_setting(
	'top_charity_cta_button',
	array(
		'default'           => __( 'Volunteer', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_cta_button',
	array(
		'label'           => esc_html__( 'CTA Button', 'top-charity' ),
		'section'         => 'top_charity_cta_section',
		'settings'        => 'top_charity_cta_button',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_cta_section_enabled',
	)
);

// CTA Section - Button Link.
$wp_customize->add_setting(
	'top_charity_cta_button_url',
	array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'top_charity_cta_button_url',
	array(
		'label'           => esc_html__( 'Button Link', 'top-charity' ),
		'section'         => 'top_charity_cta_section',
		'settings'        => 'top_charity_cta_button_url',
		'type'            => 'url',
		'active_callback' => 'top_charity_is_cta_section_enabled',
	)
);
