<?php

/**
 * Render homepage sections.
 */
function top_charity_homepage_sections() {
	$homepage_sections = array_keys( top_charity_get_homepage_sections() );

	foreach ( $homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}
