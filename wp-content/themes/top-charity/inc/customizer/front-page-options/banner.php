<?php

/**
 * Banner Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_banner_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'top-charity' ),
		'priority' => 10,
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'top-charity' ),
			'section'  => 'top_charity_banner_section',
			'settings' => 'top_charity_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_banner_section',
		array(
			'selector' => '#top_charity_banner_section .section-link',
			'settings' => 'top_charity_enable_banner_section',
		)
	);
}

// Banner Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'top_charity_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'top-charity' ),
		'section'         => 'top_charity_banner_section',
		'settings'        => 'top_charity_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'top_charity_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'top-charity' ),
			'post' => esc_html__( 'Post', 'top-charity' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Banner Section - Banner Subtitle.
	$wp_customize->add_setting(
		'top_charity_banner_subtitle_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'top_charity_banner_subtitle_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Subtitle %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_banner_section',
			'settings'        => 'top_charity_banner_subtitle_' . $i,
			'type'            => 'text',
			'active_callback' => 'top_charity_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Select Banner Post.
	$wp_customize->add_setting(
		'top_charity_banner_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_banner_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_banner_section',
			'settings'        => 'top_charity_banner_slider_content_post_' . $i,
			'active_callback' => 'top_charity_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_post_choices(),
		)
	);

	// Banner Section - Select Banner Page.
	$wp_customize->add_setting(
		'top_charity_banner_slider_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_banner_slider_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_banner_section',
			'settings'        => 'top_charity_banner_slider_content_page_' . $i,
			'active_callback' => 'top_charity_is_banner_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_page_choices(),
		)
	);

	// Banner Section - Button Label.
	$wp_customize->add_setting(
		'top_charity_banner_button_label_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'top_charity_banner_button_label_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Label %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_banner_section',
			'settings'        => 'top_charity_banner_button_label_' . $i,
			'type'            => 'text',
			'active_callback' => 'top_charity_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Link.
	$wp_customize->add_setting(
		'top_charity_banner_button_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'top_charity_banner_button_link_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Link %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_banner_section',
			'settings'        => 'top_charity_banner_button_link_' . $i,
			'type'            => 'url',
			'active_callback' => 'top_charity_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Horizontal Line.
	$wp_customize->add_setting(
		'top_charity_banner_horizontal_line_' . $i,
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Top_Charity_Customize_Horizontal_Line(
			$wp_customize,
			'top_charity_banner_horizontal_line_' . $i,
			array(
				'section'         => 'top_charity_banner_section',
				'settings'        => 'top_charity_banner_horizontal_line_' . $i,
				'active_callback' => 'top_charity_is_banner_slider_section_enabled',
				'type'            => 'hr',
			)
		)
	);
}
