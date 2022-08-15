<?php

if ( ! get_theme_mod( 'top_charity_enable_service_section', false ) ) {
	return;
}

$content_ids  = array();
$content_type = get_theme_mod( 'top_charity_service_content_type', 'page' );

for ( $i = 1; $i <= 3; $i++ ) {
	$content_ids[] = get_theme_mod( 'top_charity_service_content_' . $content_type . '_' . $i );
}

$args = array(
	'post_type'           => $content_type,
	'post__in'            => array_filter( $content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);

$args = apply_filters( 'top_charity_service_section_args', $args );

top_charity_render_service_section( $args );

/**
 * Render Service Section.
 */
function top_charity_render_service_section( $args ) {
	$section_title        = get_theme_mod( 'top_charity_service_title', __( 'What We Do For You', 'top-charity' ) );
	$section_subtitle     = get_theme_mod( 'top_charity_service_subtitle', '' );
	$service_button_label = get_theme_mod( 'top_charity_service_button_label', __( 'Read More', 'top-charity' ) );
	?>

	<section id="top_charity_service_section" class="ascendoor-frontpage-section service-section service-style-1">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_service_section' );
		endif;
		?>
		<div class="ascendoor-wrapper">
			<?php if ( ! empty( $section_subtitle || $section_title ) ) { ?>
				<div class="section-header-subtitle">
					<p class="section-subtitle"><?php echo esc_html( $section_subtitle ); ?></p>
					<h3 class="section-title"><?php echo esc_html( $section_title ); ?></h3>
				</div>
				<?php
			}
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :
				?>
				<div class="section-body">
					<div class="service-section-wrapper">
						<?php
						$i = 1;
						while ( $query->have_posts() ) :
							$query->the_post();
							$service_icon = get_theme_mod( 'top_charity_service_icon_' . $i, '' );
							?>
							<div class="service-single">
								<?php if ( ! empty( $service_icon ) ) { ?>
									<div class="service-img">
										<img src="<?php echo esc_url( $service_icon ); ?>" alt="<?php the_title_attribute(); ?>">
									</div>
								<?php } ?>
								<div class="service-detail">
									<h3 class="service-title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<p>
										<?php echo wp_kses_post( wp_trim_words( get_the_content(), 20 ) ); ?>
									</p>
									<?php if ( ! empty( $service_button_label ) ) : ?>
										<div class="service-button">
											<a href="<?php the_permalink(); ?>" class="ascendoor-button ascendoor-button-noborder-noalternate"><?php echo esc_html( $service_button_label ); ?></a>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<?php
							$i++;
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php
}
