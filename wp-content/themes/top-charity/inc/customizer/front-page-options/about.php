<?php

/**
 * About Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_about_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'About Us Section', 'top-charity' ),
		'priority' => 20,
	)
);

// About Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_about_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_about_section',
		array(
			'label'    => esc_html__( 'Enable About Section', 'top-charity' ),
			'section'  => 'top_charity_about_section',
			'settings' => 'top_charity_enable_about_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_about_section',
		array(
			'selector' => '#top_charity_about_section .section-link',
			'settings' => 'top_charity_enable_about_section',
		)
	);
}

// About Section - Content Type.
$wp_customize->add_setting(
	'top_charity_about_content_type',
	array(
		'default'           => 'page',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_about_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_content_type',
		'type'            => 'select',
		'active_callback' => 'top_charity_is_about_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'top-charity' ),
			'post' => esc_html__( 'Post', 'top-charity' ),
		),
	)
);

// About Section - Content Type Post.
$wp_customize->add_setting(
	'top_charity_about_content_post',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'top_charity_about_content_post',
	array(
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_content_post',
		'label'           => esc_html__( 'Select Post', 'top-charity' ),
		'active_callback' => 'top_charity_is_about_section_and_content_type_post_enabled',
		'type'            => 'select',
		'choices'         => top_charity_get_post_choices(),
	)
);

// About Section - Content Type Page.
$wp_customize->add_setting(
	'top_charity_about_content_page',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'top_charity_about_content_page',
	array(
		'label'           => esc_html__( 'Select Page', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_content_page',
		'active_callback' => 'top_charity_is_about_section_and_content_type_page_enabled',
		'type'            => 'select',
		'choices'         => top_charity_get_page_choices(),
	)
);

// About Section - Section Text.
$wp_customize->add_setting(
	'top_charity_about_section_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_about_section_text',
	array(
		'label'           => esc_html__( 'About Text', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_section_text',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_about_section_enabled',
	)
);

// About Section - Button Label.
$wp_customize->add_setting(
	'top_charity_about_button_label',
	array(
		'default'           => __( 'Read More', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_about_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_button_label',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_about_section_enabled',
	)
);

// About Section - Video Label.
$wp_customize->add_setting(
	'top_charity_about_video_label',
	array(
		'default'           => __( 'Play Video', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_about_video_label',
	array(
		'label'           => esc_html__( 'Video Label', 'top-charity' ),
		'description'     => esc_html__( 'If the video link field is empty then it will not show video label in front section.', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_video_label',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_about_section_enabled',
	)
);

// About Section - Video Link.
$wp_customize->add_setting(
	'top_charity_about_video_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'top_charity_about_video_link',
	array(
		'label'           => esc_html__( 'Video Link', 'top-charity' ),
		'section'         => 'top_charity_about_section',
		'settings'        => 'top_charity_about_video_link',
		'type'            => 'url',
		'active_callback' => 'top_charity_is_about_section_enabled',
	)
);
