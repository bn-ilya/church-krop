<?php

if ( ! class_exists( 'Give' ) || ! get_theme_mod( 'top_charity_enable_causes_section', false ) ) {
	return;
}

$content_ids = array();
for ( $i = 1; $i <= 3; $i++ ) {
	$content_ids[] = get_theme_mod( 'top_charity_causes_donation_form_' . $i );
}

$args = array(
	'post_type'           => 'give_forms',
	'post__in'            => array_filter( $content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'post_status'         => 'publish',
	'ignore_sticky_posts' => true,
);

$args = apply_filters( 'top_charity_causes_section_args', $args );

top_charity_render_causes_section( $args );

/**
 * Render Causes Section.
 */
function top_charity_render_causes_section( $args ) {
	$cause_subtitle     = get_theme_mod( 'top_charity_causes_subtitle', __( 'Give your help today', 'top-charity' ) );
	$cause_title        = get_theme_mod( 'top_charity_causes_title', __( 'Help Poor people', 'top-charity' ) );
	$cause_button_label = get_theme_mod( 'top_charity_causes_button_label', __( 'Donate Now', 'top-charity' ) );
	?>

	<section id="top_charity_causes_section" class="ascendoor-frontpage-section section-has-background causes-section causes-style-1">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_causes_section' );
		endif;
		?>
		<div class="ascendoor-wrapper">
			<?php if ( ! empty( $cause_subtitle || $cause_title ) ) { ?>
				<div class="section-header-subtitle">
					<p class="section-subtitle"><?php echo esc_html( $cause_subtitle ); ?></p>
					<h3 class="section-title"><?php echo esc_html( $cause_title ); ?></h3>
				</div>
				<?php
			}
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :
				?>
				<div class="section-body">
					<div class="causes-section-wrapper">
						<?php
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
							<div class="cause-single">
								<div class="cause-img">
									<?php the_post_thumbnail( 'post-thumbnail' ); ?>
								</div>
								<div class="cause-detail">
									<h3 class="cause-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<?php the_excerpt(); ?>
									<?php
									$form_id         = get_the_ID();
									$goal_stats      = give_goal_progress_stats( $form_id );
									$currency_symbol = give_currency_symbol();
									?>
									<div class="cause-progress">
										<div class="progress-bar">
											<div class="progress-bar-background">
												<span class="progressbar-completed" style="width:<?php echo esc_attr( $goal_stats['progress'] ); ?>%" ;></span>
											</div>
										</div>
										<div class="progress-detail">
											<span class="goal">
												<?php echo esc_html__( 'Goal: ', 'top-charity' ); ?>
												<span class="amount"><?php echo esc_html( $currency_symbol . $goal_stats['raw_goal'] ); ?></span>
											</span>
											<span class="goal">
												<?php echo esc_html__( 'Raised: ', 'top-charity' ); ?>
												<span class="amount"><?php echo esc_html( $currency_symbol . $goal_stats['raw_actual'] ); ?></span>
											</span>
										</div>
									</div>
									<?php if ( ! empty( $cause_button_label ) ) : ?>
										<div class="cause-button">
											<a href="<?php the_permalink(); ?>" class="ascendoor-button"><?php echo esc_html( $cause_button_label ); ?></a>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<?php
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
