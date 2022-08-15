<?php

/**
 * Team Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_team_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'Team Section', 'top-charity' ),
		'priority' => 60,
	)
);

// Team Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_team_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_team_section',
		array(
			'label'    => esc_html__( 'Enable Team Section', 'top-charity' ),
			'section'  => 'top_charity_team_section',
			'settings' => 'top_charity_enable_team_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_team_section',
		array(
			'selector' => '#top_charity_team_section .section-link',
			'settings' => 'top_charity_enable_team_section',
		)
	);
}

// Team Section - Section Subtitle.
$wp_customize->add_setting(
	'top_charity_team_section_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_team_section_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'top-charity' ),
		'section'         => 'top_charity_team_section',
		'settings'        => 'top_charity_team_section_subtitle',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_team_section_enabled',
	)
);

// Team Section - Section Title.
$wp_customize->add_setting(
	'top_charity_team_section_title',
	array(
		'default'           => __( 'Meet Our volunteers', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_team_section_title',
	array(
		'label'           => esc_html__( 'Section Title', 'top-charity' ),
		'section'         => 'top_charity_team_section',
		'settings'        => 'top_charity_team_section_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_team_section_enabled',
	)
);

// Team Section - Content Type.
$wp_customize->add_setting(
	'top_charity_team_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_team_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'top-charity' ),
		'section'         => 'top_charity_team_section',
		'settings'        => 'top_charity_team_content_type',
		'type'            => 'select',
		'active_callback' => 'top_charity_is_team_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'top-charity' ),
			'post' => esc_html__( 'Post', 'top-charity' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Team Section - Select Post.
	$wp_customize->add_setting(
		'top_charity_team_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_team_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_team_section',
			'settings'        => 'top_charity_team_content_post_' . $i,
			'active_callback' => 'top_charity_is_team_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_post_choices(),
		)
	);

	// Team Section - Select Page.
	$wp_customize->add_setting(
		'top_charity_team_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_team_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_team_section',
			'settings'        => 'top_charity_team_content_page_' . $i,
			'active_callback' => 'top_charity_is_team_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_page_choices(),
		)
	);

	// Team Section - Designation.
	$wp_customize->add_setting(
		'top_charity_team_designation_' . $i,
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'top_charity_team_designation_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Designation %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_team_section',
			'settings'        => 'top_charity_team_designation_' . $i,
			'active_callback' => 'top_charity_is_team_section_enabled',
		)
	);

	// Team Section - Social Links.
	$wp_customize->add_setting(
		'top_charity_team_social_links_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new Top_Charity_Sortable_Repeater_Custom_Control(
			$wp_customize,
			'top_charity_team_social_links_' . $i,
			array(
				'label'           => sprintf( esc_html__( 'Social Icons %d', 'top-charity' ), $i ),
				'section'         => 'top_charity_team_section',
				'active_callback' => 'top_charity_is_team_section_enabled',
				'button_labels'   => array(
					'add' => __( 'Add', 'top-charity' ),
				),
			)
		)
	);
}
