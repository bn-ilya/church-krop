<?php

if ( ! get_theme_mod( 'top_charity_enable_blog_section', false ) ) {
	return;
}

$content_ids  = array();
$content_type = get_theme_mod( 'top_charity_blog_content_type', 'category' );

if ( $content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$content_ids[] = get_theme_mod( 'top_charity_blog_content_post_' . $i );
	}

	$args = array(
		'post_type'           => $content_type,
		'post__in'            => array_filter( $content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id = get_theme_mod( 'top_charity_blog_content_category' );
	$args           = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

$args = apply_filters( 'top_charity_blog_section_args', $args );

top_charity_render_blog_section( $args );

/**
 * Render Blog Section.
 */
function top_charity_render_blog_section( $args ) {
	$section_title    = get_theme_mod( 'top_charity_blog_title', __( 'News and Articles', 'top-charity' ) );
	$section_subtitle = get_theme_mod( 'top_charity_blog_subtitle', '' );
	$button_label     = get_theme_mod( 'top_charity_blog_button_label', __( 'Read More', 'top-charity' ) );

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		?>
		<section id="top_charity_blog_section" class="ascendoor-frontpage-section blog-section blog-style-1">
			<?php
			if ( is_customize_preview() ) :
				top_charity_section_link( 'top_charity_blog_section' );
			endif;
			?>
			<div class="ascendoor-wrapper">
				<?php if ( ! empty( $section_subtitle || $section_title ) ) { ?>
					<div class="section-header-subtitle">
						<p class="section-subtitle"><?php echo esc_html( $section_subtitle ); ?></p>
						<h3 class="section-title"><?php echo esc_html( $section_title ); ?></h3>
					</div>
				<?php } ?>
				<div class="section-body">
					<div class="blogs-wrapper">
						<?php
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
							<div class="blog-single">
								<div class="blog-img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'post-thumbnail' ); ?>
									</a>
								</div>
								<div class="blog-detail">
									<div class="blog-category">
										<?php the_category( '', '', get_the_ID() ); ?>
									</div>
									<h3 class="blog-title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="blog-meta"><?php echo esc_html( get_the_date() ); ?></div>
									<div class="blog-content">
										<div class="blog-excerpt">
											<?php echo wp_kses_post( wp_trim_words( get_the_content(), 25 ) ); ?>
										</div>
										<?php if ( ! empty( $button_label ) ) { ?>
											<div class="blog-button">
												<a href="<?php the_permalink(); ?>" class="ascendoor-button ascendoor-button-noborder-noalternate"><?php echo esc_html( $button_label ); ?></a>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
}
