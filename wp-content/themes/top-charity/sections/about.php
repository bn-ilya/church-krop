<?php

if ( ! get_theme_mod( 'top_charity_enable_about_section', false ) ) {
	return;
}

$content_id = array();

$content_type = get_theme_mod( 'top_charity_about_content_type', 'page' );
if ( in_array( $content_type, array( 'post', 'page' ) ) ) {

	if ( 'post' === $content_type ) {
		$content_id[] = get_theme_mod( 'top_charity_about_content_post' );
	} else {
		$content_id[] = get_theme_mod( 'top_charity_about_content_page' );
	}
	$args = array(
		'post_type'           => $content_type,
		'post__in'            => array_filter( $content_id ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 1 ),
		'ignore_sticky_posts' => true,
	);
	$args = apply_filters( 'top_charity_about_section_content', $args );

	top_charity_render_about_section( $args );
}

/**
 * Render About Us Section
 */

function top_charity_render_about_section( $args ) {
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		$section_text = get_theme_mod( 'top_charity_about_section_text', '' );
		$button_label = get_theme_mod( 'top_charity_about_button_label', __( 'Read More', 'top-charity' ) );
		$video_label  = get_theme_mod( 'top_charity_about_video_label', __( 'Play Video', 'top-charity' ) );
		$video_link   = get_theme_mod( 'top_charity_about_video_link', '' );
		while ( $query->have_posts() ) :
			$query->the_post();
			?>
			<section id="top_charity_about_section" class="ascendoor-frontpage-section about-section about-image-right about-style-2">
				<?php
				if ( is_customize_preview() ) :
					top_charity_section_link( 'top_charity_about_section' );
				endif;
				?>
				<div class="ascendoor-wrapper">
					<div class="about-section-wrapper">
						<div class="section-image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="section-text section-header-subtitle">
							<h3 class="section-title"><?php the_title(); ?></h3>
							<?php if ( ! empty( $section_text ) ) : ?>
								<p class="section-subtitle"><?php echo esc_html( $section_text ); ?></p>
							<?php endif; ?>
							<p class="description"><?php echo wp_kses_post( wp_trim_words( get_the_content(), 50 ) ); ?></p>
							<div class="section-button">
								<a href="<?php the_permalink(); ?>" class="ascendoor-button"><?php echo esc_html( $button_label ); ?></a>
								<?php if ( ! empty( $video_link ) ) : ?>
									<span class="video-btn">
										<a class="ascendoor-video-popup ascendoor-play-btn" href="<?php echo esc_url( $video_link ); ?>">
											<i class="fas fa-play"></i>
											<span class="video-btn-txt"><?php echo esc_html( $video_label ); ?></span>
										</a>
									</span>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
}
