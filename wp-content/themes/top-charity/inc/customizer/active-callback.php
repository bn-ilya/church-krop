<?php

/**
 * Active Callbacks
 *
 * @package Top_Charity
 */

// Theme Options.
function top_charity_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_pagination' )->value() );
}
function top_charity_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_breadcrumb' )->value() );
}

// Header Options.
function top_charity_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'top_charity_enable_topbar' )->value() );
}

// Banner Slider Section.
function top_charity_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_banner_section' )->value() );
}
function top_charity_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_banner_slider_content_type' )->value();
	return ( top_charity_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function top_charity_is_banner_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_banner_slider_content_type' )->value();
	return ( top_charity_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// About section.
function top_charity_is_about_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_about_section' )->value() );
}
function top_charity_is_about_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_about_content_type' )->value();
	return ( top_charity_is_about_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function top_charity_is_about_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_about_content_type' )->value();
	return ( top_charity_is_about_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Service section.
function top_charity_is_service_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_service_section' )->value() );
}
function top_charity_is_service_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_service_content_type' )->value();
	return ( top_charity_is_service_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function top_charity_is_service_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_service_content_type' )->value();
	return ( top_charity_is_service_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Causes section.
function top_charity_is_causes_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_causes_section' )->value() );
}

// Cta section.
function top_charity_is_cta_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_cta_section' )->value() );
}

// Team section.
function top_charity_is_team_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_team_section' )->value() );
}
function top_charity_is_team_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_team_content_type' )->value();
	return ( top_charity_is_team_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function top_charity_is_team_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_team_content_type' )->value();
	return ( top_charity_is_team_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Blog section.
function top_charity_is_blog_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_blog_section' )->value() );
}
function top_charity_is_blog_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_blog_content_type' )->value();
	return ( top_charity_is_blog_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function top_charity_is_blog_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'top_charity_blog_content_type' )->value();
	return ( top_charity_is_blog_section_enabled( $control ) && ( 'category' === $content_type ) );
}

// Contact section.
function top_charity_is_contact_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'top_charity_enable_contact_section' )->value() );
}
