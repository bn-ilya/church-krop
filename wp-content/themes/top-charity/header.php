<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_Charity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site ascendoor-site-wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'top-charity' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="header-main-wrapper">
				<?php
				if ( get_theme_mod( 'top_charity_enable_topbar', false ) === true ) {
					$contact_number = get_theme_mod( 'top_charity_contact_number', '' );
					$email_id       = get_theme_mod( 'top_charity_email_address', '' );
					?>
					<div class="top-header-part">
						<div class="ascendoor-wrapper">
							<div class="top-header-part-wrapper">
								<div class="top-header-left-part">
									<div class="top-header-contact">
										<?php if ( ! empty( $contact_number ) ) { ?>
											<div class="header-contact-inner">
												<span class="contact-details">
													<span class="contact-no">
														<a href="tel:<?php echo esc_attr( $contact_number ); ?>"><i class="fas fa-phone-alt"></i><?php echo esc_html( $contact_number ); ?></a>
													</span>
												</span>
											</div>
											<?php
										}
										if ( ! empty( $email_id ) ) {
											?>
											<div class="header-contact-inner email-address">
												<span class="contact-details">
													<span class="contact-no">
														<a href="mailto:<?php echo esc_attr( $email_id ); ?>"><i class="far fa-envelope"></i><?php echo esc_html( $email_id ); ?></a>
													</span>
												</span>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="top-header-right-part">
									<div class="socail-search">
										<div class="social-icons">
											<?php
											if ( has_nav_menu( 'social' ) ) {
												wp_nav_menu(
													array(
														'menu_class'     => 'menu social-links',
														'link_before'    => '<span class="screen-reader-text">',
														'link_after'     => '</span>',
														'theme_location' => 'social',
													)
												);
											}
											?>
										</div>
										<div class="header-search">
											<div class="header-search-wrap">
												<a href="#" title="Search" class="header-search-icon">
													<i class="fa fa-search"></i>
												</a>
												<div class="header-search-form">
													<?php get_search_form(); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="bottom-header-outer-wrapper">
					<div class="bottom-header-part">
						<div class="ascendoor-wrapper">
							<div class="bottom-header-part-wrapper">
								<div class="bottom-header-left-part">
									<div class="site-branding">
										<?php if ( has_custom_logo() ) { ?>
											<div class="site-logo">
												<?php the_custom_logo(); ?>
											</div>
										<?php } ?>
										<div class="site-identity">
											<?php
											if ( is_front_page() && is_home() ) :
												?>
												<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php
											else :
												?>
												<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
												<?php
											endif;
											$top_charity_description = get_bloginfo( 'description', 'display' );
											if ( $top_charity_description || is_customize_preview() ) :
												?>
												<p class="site-description">
													<?php
													echo esc_html( $top_charity_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?>
												</p>
												<?php
											endif;
											?>
										</div>
									</div><!-- .site-branding -->
								</div>
								<div class="bottom-header-right-part">
									<div class="navigation-part">
										<nav id="site-navigation" class="main-navigation">
											<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
												<span></span>
												<span></span>
												<span></span>
											</button>
											<div class="main-navigation-links">
												<?php
												if ( has_nav_menu( 'primary' ) ) {
													wp_nav_menu(
														array(
															'theme_location' => 'primary',
														)
													);
												}
												?>
												<?php
												if ( get_theme_mod( 'top_charity_enable_topbar', false ) === true ) {
													$contact_number = get_theme_mod( 'top_charity_contact_number', '' );
													$email_id       = get_theme_mod( 'top_charity_email_address', '' );
													?>
													<div class="top-header-inside-part">
														<div class="top-header-contact">
															<?php if ( ! empty( $contact_number ) ) { ?>
																<div class="header-contact-inner">
																	<span class="contact-details">
																		<span class="contact-no">
																			<a href="tel:<?php echo esc_attr( $contact_number ); ?>"><i class="fas fa-phone-alt"></i><?php echo esc_html( $contact_number ); ?></a>
																		</span>
																	</span>
																</div>
																<?php
															}
															if ( ! empty( $email_id ) ) {
																?>
																<div class="header-contact-inner email-address">
																	<span class="contact-details">
																		<span class="contact-no">
																			<a href="mailto:<?php echo esc_attr( $email_id ); ?>"><i class="far fa-envelope"></i><?php echo esc_html( $email_id ); ?></a>
																		</span>
																	</span>
																</div>
															<?php } ?>
														</div>
														<?php
														if ( get_theme_mod( 'top_charity_enable_social_menu', true ) === true ) {
															?>
															<div class="social-icons">
																<?php
																if ( has_nav_menu( 'social' ) ) {
																	wp_nav_menu(
																		array(
																			'menu_class'        => 'menu social-links',
																			'link_before'       => '<span class="screen-reader-text">',
																			'link_after'        => '</span>',
																			'theme_location'    => 'social',
																		)
																	);
																}
																?>
															</div>
															<?php
														}
														?>
													</div>
												<?php } ?>
											</div>
										</nav><!-- #site-navigation -->
									</div>
									<div class="header-custom-btn-search">
										<?php
										$menu_button = get_theme_mod( 'top_charity_menu_custom_button_label', '' );
										$button_url  = get_theme_mod( 'top_charity_menu_custom_button_url', '#' );
										if ( ! empty( $menu_button ) ) {
											?>
											<div class="ascendoor-custom-button">
												<a class="ascendoor-button" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $menu_button ); ?></a>
											</div>
										<?php } ?>
										<div class="header-search">
											<div class="header-search-wrap">
												<a href="#" title="Search" class="header-search-icon">
													<i class="fa fa-search"></i>
												</a>
												<div class="header-search-form">
													<?php get_search_form(); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<?php
		if ( ! is_front_page() || is_home() ) {

			if ( is_front_page() ) {

				require get_template_directory() . '/sections/sections.php';
				top_charity_homepage_sections();
			}

			?>

			<div id="content" class="site-content">
				<div class="ascendoor-wrapper">
					<div class="ascendoor-page">
					<?php } ?>
