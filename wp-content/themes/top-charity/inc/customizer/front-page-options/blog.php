<?php

/**
 * Blog Section
 *
 * @package Top_Charity
 */

$wp_customize->add_section(
	'top_charity_blog_section',
	array(
		'panel'    => 'top_charity_front_page_options',
		'title'    => esc_html__( 'Blog Section', 'top-charity' ),
		'priority' => 70,
	)
);

// Blog Section - Enable Section.
$wp_customize->add_setting(
	'top_charity_enable_blog_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'top_charity_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Top_Charity_Toggle_Switch_Custom_Control(
		$wp_customize,
		'top_charity_enable_blog_section',
		array(
			'label'    => esc_html__( 'Enable Blog Section', 'top-charity' ),
			'section'  => 'top_charity_blog_section',
			'settings' => 'top_charity_enable_blog_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'top_charity_enable_blog_section',
		array(
			'selector' => '#top_charity_blog_section .section-link',
			'settings' => 'top_charity_enable_blog_section',
		)
	);
}

// Blog Section - Section Subtitle.
$wp_customize->add_setting(
	'top_charity_blog_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_blog_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'top-charity' ),
		'section'         => 'top_charity_blog_section',
		'settings'        => 'top_charity_blog_subtitle',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_blog_section_enabled',
	)
);

// Blog Section - Section Title.
$wp_customize->add_setting(
	'top_charity_blog_title',
	array(
		'default'           => __( 'News and Articles', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_blog_title',
	array(
		'label'           => esc_html__( 'Section Title', 'top-charity' ),
		'section'         => 'top_charity_blog_section',
		'settings'        => 'top_charity_blog_title',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_blog_section_enabled',
	)
);

// Blog Section - Content Type.
$wp_customize->add_setting(
	'top_charity_blog_content_type',
	array(
		'default'           => 'category',
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_blog_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'top-charity' ),
		'section'         => 'top_charity_blog_section',
		'settings'        => 'top_charity_blog_content_type',
		'type'            => 'select',
		'active_callback' => 'top_charity_is_blog_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'top-charity' ),
			'category' => esc_html__( 'Category', 'top-charity' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Blog Section - Select Post.
	$wp_customize->add_setting(
		'top_charity_blog_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'top_charity_blog_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'top-charity' ), $i ),
			'section'         => 'top_charity_blog_section',
			'settings'        => 'top_charity_blog_content_post_' . $i,
			'active_callback' => 'top_charity_is_blog_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => top_charity_get_post_choices(),
		)
	);
}

// Blog Section - Select Category.
$wp_customize->add_setting(
	'top_charity_blog_content_category',
	array(
		'sanitize_callback' => 'top_charity_sanitize_select',
	)
);

$wp_customize->add_control(
	'top_charity_blog_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'top-charity' ),
		'section'         => 'top_charity_blog_section',
		'settings'        => 'top_charity_blog_content_category',
		'active_callback' => 'top_charity_is_blog_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => top_charity_get_post_cat_choices(),
	)
);

// Blog Section - Button Label.
$wp_customize->add_setting(
	'top_charity_blog_button_label',
	array(
		'default'           => __( 'Read More', 'top-charity' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'top_charity_blog_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'top-charity' ),
		'section'         => 'top_charity_blog_section',
		'settings'        => 'top_charity_blog_button_label',
		'type'            => 'text',
		'active_callback' => 'top_charity_is_blog_section_enabled',
	)
);
