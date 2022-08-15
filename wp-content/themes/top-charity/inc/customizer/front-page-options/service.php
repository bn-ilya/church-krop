<?php

/**
 * Service Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_service_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'Service Section', 'top-charity' ),
		'priority' => 30,
	)
);

// Service Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_service_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable Service Section', 'top-charity' ),
			'section'  => 'top_charity_service_section',
			'settings' => 'top_charity_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_service_section',
		array(
			'selector' => '#top_charity_service_section .section-link',
			'settings' => 'top_charity_enable_service_section',
		)
	);
}

// Service Section - Section Title.
$wp_customize->add_setting(
	'top_charity_service_title',
	array(
		'default'           => __( 'What We Do For You', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_service_title',
	array(
		'label'           => esc_html__( 'Section Title', 'top-charity' ),
		'section'         => 'top_charity_service_section',
		'settings'        => 'top_charity_service_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_service_section_enabled',
	)
);

// Service Section - Section Subtitle.
$wp_customize->add_setting(
	'top_charity_service_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_service_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'top-charity' ),
		'section'         => 'top_charity_service_section',
		'settings'        => 'top_charity_service_subtitle',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_service_section_enabled',
	)
);

// Service Section - Button Label.
$wp_customize->add_setting(
	'top_charity_service_button_label',
	array(
		'default'           => __( 'Read More', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_service_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'top-charity' ),
		'section'         => 'top_charity_service_section',
		'settings'        => 'top_charity_service_button_label',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_service_section_enabled',
	)
);

// Service Section - Content Type.
$wp_customize->add_setting(
	'top_charity_service_content_type',
	array(
		'default'           => 'page',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_service_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'top-charity' ),
		'section'         => 'top_charity_service_section',
		'settings'        => 'top_charity_service_content_type',
		'type'            => 'select',
		'active_callback' => 'top_charity_is_service_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'top-charity' ),
			'post' => esc_html__( 'Post', 'top-charity' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Service Section - Services Icons.
	$wp_customize->add_setting(
		'top_charity_service_icon_' . $i,
		array(
			'sanitize_callback' => 'top_charity_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'top_charity_service_icon_' . $i,
			array(
				'label'           => sprintf( esc_html__( 'Service Icon %d', 'top-charity' ), $i ),
				'section'         => 'top_charity_service_section',
				'settings'        => 'top_charity_service_icon_' . $i,
				'active_callback' => 'top_charity_is_service_section_enabled',
			)
		)
	);

	// Service Section - Select Post.
	$wp_customize->add_setting(
		'top_charity_service_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_service_content_post_' . $i,
		array(
			'label'           => esc_html__( 'Select Post ', 'top-charity' ) . $i,
			'section'         => 'top_charity_service_section',
			'settings'        => 'top_charity_service_content_post_' . $i,
			'active_callback' => 'top_charity_is_service_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_post_choices(),
		)
	);

	// Service Section - Select Page.
	$wp_customize->add_setting(
		'top_charity_service_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_service_content_page_' . $i,
		array(
			'label'           => esc_html__( 'Select Page ', 'top-charity' ) . $i,
			'section'         => 'top_charity_service_section',
			'settings'        => 'top_charity_service_content_page_' . $i,
			'active_callback' => 'top_charity_is_service_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_page_choices(),
		)
	);
}
