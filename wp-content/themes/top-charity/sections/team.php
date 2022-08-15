<?php

if ( ! get_theme_mod( 'top_charity_enable_team_section', false ) ) {
	return;
}

$content_id   = $designation = $social_links = $section_content = array();
$content_type = get_theme_mod( 'top_charity_team_content_type', 'post' );

for ( $i = 1; $i <= 3; $i++ ) {
	$team_id                 = get_theme_mod( 'top_charity_team_content_' . $content_type . '_' . $i );
	$content_id[]            = $team_id;
	$designation[ $team_id ] = get_theme_mod( 'top_charity_team_designation_' . $i );
	$social_links_str        = get_theme_mod( 'top_charity_team_social_links_' . $i );
	if ( ! empty( $social_links_str ) ) {
		$social_links[ $team_id ] = explode( ',', get_theme_mod( 'top_charity_team_social_links_' . $i ) );
	}
}

$args = array(
	'post_type'           => $content_type,
	'post__in'            => array_filter( $content_id ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) :
		$query->the_post();
		$section_content[] = array(
			'id'            => get_the_ID(),
			'title'         => get_the_title(),
			'permalink'     => get_the_permalink(),
			'thumbnail_url' => get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ),
		);
	endwhile;
	wp_reset_postdata();
endif;

$section_content = apply_filters( 'top_charity_team_section_content', $section_content );

top_charity_render_team_section( $section_content, $designation, $social_links );

/**
 * Render Team Section.
 */
function top_charity_render_team_section( $section_content, $designation, $social_links ) {
	$section_title    = get_theme_mod( 'top_charity_team_section_title', __( 'Meet Our volunteers', 'top-charity' ) );
	$section_subtitle = get_theme_mod( 'top_charity_team_section_subtitle', '' );

	?>

	<section id="top_charity_team_section" class="ascendoor-frontpage-section team-section team-style-1">
		<?php
		if ( is_customize_preview() ) :
			top_charity_section_link( 'top_charity_team_section' );
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
				<div class="teams-wrapper">
					<?php
					foreach ( $section_content as $content ) {
						$team_id = $content['id'];
						?>
						<div class="team-single">
							<div class="team-img">
								<img src="<?php echo esc_html( $content['thumbnail_url'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
							</div>
							<div class="team-details">
								<h3 class="name"><?php echo esc_html( $content['title'] ); ?></h3>
								<?php if ( ! empty( $designation[ $team_id ] ) ) { ?>
									<span class="designation"><?php echo esc_html( $designation[ $team_id ] ); ?></span>
								<?php } ?>
								<?php if ( ! empty( $social_links[ $team_id ] ) ) { ?>
									<div class="teams-social">
										<?php foreach ( $social_links[ $team_id ] as $link ) { ?>
											<a href="<?php echo esc_url( $link ); ?>" target="_blank"></a>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
}
