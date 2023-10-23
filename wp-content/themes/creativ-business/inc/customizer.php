<?php
/**
 * Theme Customizer.
 *
 * @package Creativ Business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creativ_business_customize_register( $wp_customize ) {

	// Load custom control function.
	require get_template_directory() . '/inc/customizer/controls.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'Creativ_Business_Customize_Section_Upsell' );

	// Register section.
	$wp_customize->add_section(
		new Creativ_Business_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Creativ Business Pro', 'creativ-business' ),
				'pro_text' => esc_html__( 'Buy Pro', 'creativ-business' ),
				'pro_url'  => 'http://www.creativthemes.com/downloads/creativ-business-pro/',
				'priority'  => 10,
			)
		)
	);

	// Load customize helpers.
	require get_template_directory() . '/inc/layout-option.php';

	// Load customize sanitize.
	require get_template_directory() . '/inc/customizer/sanitize.php';

	// Load customize callback.
	require get_template_directory() . '/inc/customizer/callback.php';

	// Load customize option.
	require get_template_directory() . '/inc/customizer/option.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

}
add_action( 'customize_register', 'creativ_business_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since 1.0
 */
function creativ_business_customize_preview_js() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script( 'creativ-business-customizer', get_template_directory_uri() . '/assets/js/customizer' . $min . '.js', array( 'customize-preview' ), '1.1', true );

}
add_action( 'customize_preview_init', 'creativ_business_customize_preview_js' );

/**
 * Enqueue styles on customizer preview.
 */
function creativ_business_customizer_styles() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	if ( is_customize_preview() ) {
		// Add custom css for customizer
		wp_enqueue_style( 'creativ-business-customizer', get_template_directory_uri() . '/assets/css/customizer'. $min .'.css' );
	}
}
add_action( 'customize_controls_print_styles', 'creativ_business_customizer_styles' );


/**
 * Add update to pro button
 */
function creativ_business_update_button() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_register_script( 'creativ-business-update-button-scripts', get_template_directory_uri() . '/assets/js/update-pro'. $min .'.js', array("jquery"), '20120206', true  );

	wp_localize_script( 'creativ-business-update-button-scripts', 'updateButtonObj', array(

		'pro' => __('Update to PRO version','creativ-business')

	) );

	wp_enqueue_script( 'creativ-business-update-button-scripts' );
}
add_action( 'customize_controls_enqueue_scripts', 'creativ_business_update_button' );

if ( ! function_exists( 'creativ_business_inline_css' ) ) :
	// Add Custom Css
	function creativ_business_inline_css() {
		
		$color_layout = creativ_business_get_option( 'color_layout' );
		$color_hover_layout = creativ_business_get_option('color_hover_layout' );
		$color_layout_css = '';
		if ( ( '#3a85eb' == $color_layout ) && ( '#222' == $color_hover_layout ) ) {
			$color_layout = '';
		}

		if ( ! empty( $color_layout ) ) {
			$color_layout_css = '

			/*---------------------------------------------------
			Choose Theme Color
			---------------------------------------------------*/
			a,
			#site-navigation li a:hover, #site-navigation li a:focus, 
			#site-navigation li.current_page_item > a, 
			#site-navigation li.current-menu-item > a,
			.btn-default,
			.each-faq.open .faq-trigger:before, 
			.each-faq.open .faq-trigger h5,
			.team-item h4 a:hover, 
			.team-item h4 a:focus,
			#latest-post .entry-title a:hover, 
			#latest-post .entry-title a:focus,
			.entry-meta a:hover, 
			.entry-meta a:focus,
			span.comments-link a:hover:before, 
			span.comments-link a:focus:before, 
			span.byline a:hover:before, 
			span.byline a:focus:before,
			ul.address-block i,
			ul.address-block li a:hover, 
			ul.address-block li a:focus,
			.blog-archive-wrapper article .entry-title a:hover, 
			.blog-archive-wrapper article .entry-title a:focus,
			#secondary .widget a:hover, 
			#secondary .widget a:focus,
			#secondary .widget ul li:hover:before, 
			#footer-widgets .widget ul li:hover:before,
			.blog-archive-wrapper span.posted-on a:hover:before,
			.blog-archive-wrapper span.posted-on a:focus:before,
			.single-post-wrapper span.posted-on a:hover:before,
			.single-post-wrapper span.posted-on a:focus:before,
			#footer-widgets a:hover, 
			#footer-widgets a:focus, 
			.site-info a:hover, 
			.site-info a:focus,
			#site-navigation ul li.menu-item-has-children:hover > a,
			#site-navigation ul ul li.menu-item-has-children:hover > a,
			.testimonial-wrapper .position .client-name a:hover, 
			.testimonial-wrapper .position .client-name a:focus,
			.comment-reply-link,
			b.fn a:hover, 
			b.fn a:focus {
			    color: '.esc_attr( $color_layout ).';
			} 
			.ow-pt-price,
			span.sow-icon-elegantline {
			    color: '.esc_attr( $color_layout ).' !important;
			}
			.btn-primary,
			.slick-prev, 
			.slick-next,
			.slick-dots li.slick-active button:before,
			.progress-bar.custom_progress_bar,
			.statwrap span:not(.stat-count),
			button:focus, 
			input[type="button"]:focus, 
			input[type="reset"]:focus, 
			input[type="submit"]:focus, 
			button:active, input[type="button"]:active, 
			input[type="reset"]:active, 
			input[type="submit"]:active,
			.entry-title:after,
			#client-testimonial .slick-dots li.slick-active button:before,
			.wpcf7 input[type="submit"],
			button, input[type="button"], 
			input[type="reset"], 
			input[type="submit"],
			.site-main .navigation .nav-links .page-numbers, 
			.site-main .navigation .nav-links a,
			a.post-edit-link,
			.sow-features-feature:hover .sow-icon-container span,
			.panel-layout .widget-title:after, 
			.section-title:after,
			.slick-prev:focus, 
			.slick-next:focus,
			.backtotop,
			.sow-features-feature .sow-icon-container span, 
			.sow-icon-container span {
				background-color: '.esc_attr( $color_layout ).';
			}
			.ow-button-hover,
			.ow-pt-button a:hover, 
			.ow-pt-button a:focus {
				background-color: '.esc_attr( $color_layout ).' !important;
			}
			.sow-features-feature .sow-icon-container span, 
			.sow-icon-container span,
			.each-faq.open .faq-trigger,
			button:focus, 
			input[type="button"]:focus, 
			input[type="reset"]:focus, 
			input[type="submit"]:focus, 
			button:active, input[type="button"]:active, 
			input[type="reset"]:active, 
			input[type="submit"]:active,
			button, input[type="button"], 
			input[type="reset"], 
			input[type="submit"],
			.site-main .navigation .nav-links .page-numbers, 
			.site-main .navigation .nav-links a,
			input[type="text"]:focus, 
			input[type="email"]:focus, 
			input[type="url"]:focus, 
			input[type="password"]:focus, 
			input[type="search"]:focus, 
			input[type="number"]:focus, 
			input[type="tel"]:focus, 
			input[type="range"]:focus, 
			input[type="date"]:focus, 
			input[type="month"]:focus, 
			input[type="week"]:focus, 
			input[type="time"]:focus, 
			input[type="datetime"]:focus, 
			input[type="datetime-local"]:focus, 
			input[type="color"]:focus, textarea:focus,
			.sow-features-feature:hover .sow-icon-container span,
			.backtotop {
				border-color: '.esc_attr( $color_layout ).';
			}';
		}

		$css = $color_layout_css;	
		wp_add_inline_style( 'creativ-business-style', $css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'creativ_business_inline_css', 10 );
