<?php

if ( ! get_theme_mod( 'top_charity_enable_contact_section', false ) ) {
	return;
}

$section_content             = array();
$section_content['title']    = get_theme_mod( 'top_charity_contact_title', __( 'Get in touch', 'top-charity' ) );
$section_content['subtitle'] = get_theme_mod( 'top_charity_contact_subtitle', '' );
$section_content['bg_image'] = get_theme_mod( 'top_charity_contact_bg_image', '' );
$section_content['image']    = get_theme_mod( 'top_charity_contact_image', '' );

$section_content = apply_filters( 'top_charity_contact_section_content', $section_content );

top_charity_render_contact_section( $section_content );

/**
 * Render Contact Section
 */
function top_charity_render_contact_section( $section_content ) {
	$form_shortcode = get_theme_mod( 'top_charity_form_shortcode', '' );
	?>

	<section id="top_charity_contact_section" class="ascendoor-frontpage-section section-has-background joinus-section joinus-img-left">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_contact_section' );
		endif;
		?>
		<?php if ( ! empty( $section_content['bg_image'] ) ) { ?>
			<div class="joinus-background-img">
				<img src="<?php echo esc_url( $section_content['bg_image'] ); ?>" alt="<?php esc_attr_e( 'Contact Background Image', 'top-charity' ); ?>">
			</div>
		<?php } ?>
		<div class="ascendoor-wrapper">
			<div class="joinus-section-wrapper">
				<div class="form-part">
					<div class="section-header-subtitle">
						<h3 class="section-title"><?php echo esc_html( $section_content['title'] ); ?></h3>
						<p class="section-subtitle"><?php echo esc_html( $section_content['subtitle'] ); ?></p>
					</div>
					<?php if ( ! empty( $form_shortcode ) ) { ?>
						<div class="section-body">
							<div class="joinus-form-wrap">
								<?php echo do_shortcode( wp_kses_post( $form_shortcode ) ); ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php if ( ! empty( $section_content['image'] ) ) { ?>
					<div class="image-part">
						<img src="<?php echo esc_attr( $section_content['image'] ); ?>" alt="<?php esc_attr_e( 'Contact Image', 'top-charity' ); ?>">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<?php
}
