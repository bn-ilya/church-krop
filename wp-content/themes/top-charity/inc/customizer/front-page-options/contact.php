<?php

/**
 * Contact Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_contact_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'Contact Section', 'top-charity' ),
		'priority' => 80,
	)
);

// Contact Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_contact_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_contact_section',
		array(
			'label'    => esc_html__( 'Enable Contact Section', 'top-charity' ),
			'section'  => 'top_charity_contact_section',
			'settings' => 'top_charity_enable_contact_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_contact_section',
		array(
			'selector' => '#top_charity_contact_section .section-link',
			'settings' => 'top_charity_enable_contact_section',
		)
	);
}

// Contact Section - Background Image.
$wp_customize->add_setting(
	'top_charity_contact_bg_image',
	array(
		'sanitize_callback' => 'top_charity_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'top_charity_contact_bg_image',
		array(
			'label'           => esc_html__( 'Background Image', 'top-charity' ),
			'section'         => 'top_charity_contact_section',
			'settings'        => 'top_charity_contact_bg_image',
			'active_callback' => 'top_charity_is_contact_section_enabled',
		)
	)
);

// Contact Section - Contact Image.
$wp_customize->add_setting(
	'top_charity_contact_image',
	array(
		'sanitize_callback' => 'top_charity_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'top_charity_contact_image',
		array(
			'label'           => esc_html__( 'Contact Image', 'top-charity' ),
			'section'         => 'top_charity_contact_section',
			'settings'        => 'top_charity_contact_image',
			'active_callback' => 'top_charity_is_contact_section_enabled',
		)
	)
);

// Contact Section - Section Title.
$wp_customize->add_setting(
	'top_charity_contact_title',
	array(
		'default'           => __( 'Get in touch', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_contact_title',
	array(
		'label'           => esc_html__( 'Section Title', 'top-charity' ),
		'section'         => 'top_charity_contact_section',
		'settings'        => 'top_charity_contact_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_contact_section_enabled',
	)
);

// Contact Section - Section Subtitle.
$wp_customize->add_setting(
	'top_charity_contact_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_contact_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'top-charity' ),
		'section'         => 'top_charity_contact_section',
		'settings'        => 'top_charity_contact_subtitle',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_contact_section_enabled',
	)
);

// Contact Section - Form Shortcode.
$wp_customize->add_setting(
	'top_charity_form_shortcode',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_form_shortcode',
	array(
		'label'           => esc_html__( 'Form Shortcode', 'top-charity' ),
		'description'     => sprintf( top_charity_santize_allow_tag( '<a href="%1$s" target="_blank">Click here </a> to get shortcode for contact form.', 'top-charity' ), admin_url( 'admin.php?page=wpcf7' ) ),
		'section'         => 'top_charity_contact_section',
		'settings'        => 'top_charity_form_shortcode',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_contact_section_enabled',
	)
);
