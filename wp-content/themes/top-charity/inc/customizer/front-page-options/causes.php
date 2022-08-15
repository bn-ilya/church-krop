<?php

if ( ! class_exists( 'Give' ) ) {
	return;
}

// Cause Section.
$wp_customize->add_section(
	'top_charity_causes_section',
	array(
		'title'    => esc_html__( 'Cause Section', 'top-charity' ),
		'panel'    => 'top_charity_front_page_options',
		'priority' => 40,
	)
);

// Cause Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_causes_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_causes_section',
		array(
			'label'    => esc_html__( 'Enable Cause Section', 'top-charity' ),
			'section'  => 'top_charity_causes_section',
			'settings' => 'top_charity_enable_causes_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_causes_section',
		array(
			'selector' => '#top_charity_causes_section .section-link',
			'settings' => 'top_charity_enable_causes_section',
		)
	);
}

// Cause Section - Section Subtitle.
$wp_customize->add_setting(
	'top_charity_causes_subtitle',
	array(
		'default'           => __( 'Give your help today', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_causes_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'top-charity' ),
		'section'         => 'top_charity_causes_section',
		'settings'        => 'top_charity_causes_subtitle',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_causes_section_enabled',
	)
);

// Cause Section - Section Title.
$wp_customize->add_setting(
	'top_charity_causes_title',
	array(
		'default'           => __( 'Help Poor people', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_causes_title',
	array(
		'label'           => esc_html__( 'Section Title', 'top-charity' ),
		'section'         => 'top_charity_causes_section',
		'settings'        => 'top_charity_causes_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_causes_section_enabled',
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Cause Section - Select Donation Form.
	$wp_customize->add_setting(
		'top_charity_causes_donation_form_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_causes_donation_form_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Form %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_causes_section',
			'settings'        => 'top_charity_causes_donation_form_' . $i,
			'active_callback' => 'top_charity_is_causes_section_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_post_donation_form_choices(),
		)
	);
}

// Cause Section - Button Label.
$wp_customize->add_setting(
	'top_charity_causes_button_label',
	array(
		'default'           => __( 'Donate Now', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'top_charity_causes_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'top-charity' ),
		'section'         => 'top_charity_causes_section',
		'settings'        => 'top_charity_causes_button_label',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_causes_section_enabled',
	)
);
