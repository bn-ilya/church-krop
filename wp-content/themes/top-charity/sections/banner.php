<?php
if ( ! get_theme_mod( 'top_charity_enable_banner_section', false ) ) {
	return;
}

$slider_content_ids  = array();
$slider_content_type = get_theme_mod( 'top_charity_banner_slider_content_type', 'post' );

for ( $i = 1; $i <= 3; $i++ ) {
	$slider_content_ids[] = get_theme_mod( 'top_charity_banner_slider_content_' . $slider_content_type . '_' . $i );
}
$banner_slider_args = array(
	'post_type'           => $slider_content_type,
	'post__in'            => array_filter( $slider_content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);
$banner_slider_args = apply_filters( 'top_charity_banner_section_args', $banner_slider_args );

top_charity_render_banner_section( $banner_slider_args );

/**
 * Render Banner Section.
 */
function top_charity_render_banner_section( $banner_slider_args ) {     ?>

	<section id="top_charity_banner_section" class="banner-section banner-style-1">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_banner_section' );
		endif;
		?>
		<div class="banner-section-wrapper">
			<?php
			$query = new WP_Query( $banner_slider_args );
			if ( $query->have_posts() ) :
				?>
				<div class="ascendoor-banner-wrapper banner-slider top-charity-carousel-navigation" data-slick='{"autoplay": false }'>
					<?php
					$i = 1;
					while ( $query->have_posts() ) :
						$query->the_post();
						$subtitle     = get_theme_mod( 'top_charity_banner_subtitle_' . $i, '' );
						$button_label = get_theme_mod( 'top_charity_banner_button_label_' . $i, '' );
						$button_link  = get_theme_mod( 'top_charity_banner_button_link_' . $i, '' );
						$button_link  = ! empty( $button_link ) ? $button_link : get_the_permalink();
						?>
						<div class="banner-single-outer">
							<div class="banner-single">
								<div class="banner-img">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
								<div class="banner-caption">
									<div class="ascendoor-wrapper">
										<div class="banner-catption-wrapper">
											<?php if ( ! empty( $subtitle ) ) { ?>
												<h4 class="caption-subtitle"><?php echo esc_html( $subtitle ); ?></h4>
											<?php } ?>
											<h3 class="banner-caption-title">
												<?php the_title(); ?>
											</h3>
											<div class="caption-description">
												<p>
													<?php echo wp_kses_post( wp_trim_words( get_the_content(), 20 ) ); ?>
												</p>
											</div>
											<?php if ( ! empty( $button_label ) ) { ?>
												<div class="banner-slider-btn">
													<a href="<?php echo esc_url( $button_link ); ?>" class="ascendoor-button"><?php echo esc_html( $button_label ); ?></a>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$i++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
			endif;
			?>
		</div>
	</section>

	<?php
}
