<?php
if ( ! get_theme_mod( 'top_charity_enable_cta_section', false ) ) {
	return;
}

$section_content                = array();
$section_content['title']       = get_theme_mod( 'top_charity_cta_title', '' );
$section_content['image']       = get_theme_mod( 'top_charity_cta_background_image', '' );
$section_content['description'] = get_theme_mod( 'top_charity_cta_description', '' );
$section_content['button']      = get_theme_mod( 'top_charity_cta_button', __( 'Volunteer', 'top-charity' ) );
$section_content['button_url']  = get_theme_mod( 'top_charity_cta_button_url', '#' );

$section_content = apply_filters( 'top_charity_cta_section_content', $section_content );

top_charity_render_cta_section( $section_content );

/**
 * Render cta section
 */
function top_charity_render_cta_section( $section_content ) {
	$default_color = get_theme_mod( 'primary_color', '#F75E2E' );
	$cta_bg_color  = get_theme_mod( 'top_charity_cta_background_color', $default_color );

	?>

	<section id="top_charity_cta_section" class="ascendoor-frontpage-section cta-section cta-style-2 section-has-background">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_cta_section' );
		endif;
		?>
		<div class="ascendoor-wrapper">
			<div class="cta-wrapper" style="background-color: <?php echo esc_attr( $cta_bg_color ); ?>;">
				<?php if ( ! empty( $section_content['image'] ) ) { ?>
					<div class="cta-background-img">
						<img src="<?php echo esc_url( $section_content['image'] ); ?>" alt="<?php echo esc_attr( $section_content['title'] ); ?>">
					</div>
				<?php } ?>
				<div class="cta-inside-wrapper">
					<div class="cta-detail">
						<h3 class="cta-title">
							<?php echo esc_html( $section_content['title'] ); ?>
						</h3>
						<p><?php echo esc_html( $section_content['description'] ); ?></p>
					</div>
					<?php if ( ! empty( $section_content['button'] ) ) { ?>
						<div class="cta-button">
							<a href="<?php echo esc_url( $section_content['button_url'] ); ?>" class="ascendoor-button ascendoor-button-border-alternate"><?php echo esc_html( $section_content['button'] ); ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<?php

}
