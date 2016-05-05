<?php

/**
 * Registers color schemes for Fitness Space.
 * The order of colors in a colors array:
 * 1. Main Background Color.
 * 2. Page Background Color.
 * 3. Link Color.
 * 4. Main Text Color.
 * 5. Secondary Text Color.
 * 6. Hover Filter Color.
 */

function fitnessspace_get_color_schemes() {
	return apply_filters( 'fitnessspace_color_schemes', array(
		'default' => array(
			'label'  => __( 'default', 'fitnessspace' ),
			'colors' => array(
				'#ffffff',
				'#ffffff',
				'#91b851',
				'#2c2c2c',
				'#ffffff',
				'rgba(0,0,0,0.75)',
			),
		),
		'dark' => array(
			'label'  => __( 'Dark', 'fitnessspace' ),
			'colors' => array(
				'#2c2c2c',
				'#2c2c2c',
				'#91b851',
				'#ffffff',
				'#c1c1c1',
				'rgba(255,255,255,0.75)',
			),
		),
		'gray' => array(
			'label'  => __( 'Gray', 'fitnessspace' ),
			'colors' => array(
				'#616a73',
				'#4d545c',
				'#c7c7c7',
				'#f2f2f2',
				'#f2f2f2',
				'rgba(255,255,255,0.75)',
			),
		),
	) );
}
if ( ! function_exists( 'fitnessspace_get_color_scheme' ) ) :
function fitnessspace_get_color_scheme() {
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	$color_schemes       = fitnessspace_get_color_schemes();
	if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
		return $color_schemes[ $color_scheme_option ]['colors'];
	}
	return $color_schemes['default']['colors'];
}
endif; // fitnessspace_get_color_scheme
if ( ! function_exists( 'fitnessspace_get_color_scheme_choices' ) ) :
function fitnessspace_get_color_scheme_choices() {
	$color_schemes                = fitnessspace_get_color_schemes();
	$color_scheme_control_options = array();
	foreach ( $color_schemes as $color_scheme => $value ) {
		$color_scheme_control_options[ $color_scheme ] = $value['label'];
	}
	return $color_scheme_control_options;
}
endif; // fitnessspace_get_color_scheme_choices
if ( ! function_exists( 'fitnessspace_sanitize_color_scheme' ) ) :
function fitnessspace_sanitize_color_scheme( $value ) {
	$color_schemes = fitnessspace_get_color_scheme_choices();
	if ( ! array_key_exists( $value, $color_schemes ) ) {
		return 'default';
	}
	return $value;
}
endif; // fitnessspace_sanitize_color_scheme
/**
 * Enqueues front-end CSS for color scheme.
 *
 */
function fitnessspace_color_scheme_css() {
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	// Don't do anything if the default color scheme is selected.
	if ( 'default' === $color_scheme_option ) {
		return;
	}
	$color_scheme = fitnessspace_get_color_scheme();
	// Convert main text hex color to rgba.
	$color_textcolor_rgb = fitnessspace_hex2rgb( $color_scheme[3] );
	$color_filtercolor_rgb = fitnessspace_hex2rgb( $color_scheme[5] );
	
	// If the rgba values are empty return early.
	if ( empty( $color_textcolor_rgb ) ) {
		return;
	}
	// If we get this far, we have a custom color scheme.
	$colors = array(
		//'background_color'      => $color_scheme[0],
		'page_background_color' => $color_scheme[1],
		'link_color'            => $color_scheme[2],
		'main_text_color'       => $color_scheme[3],
		'secondary_text_color'  => $color_scheme[4],
		'hover_filter_color'    => $color_scheme[5],
		'border_color'          => vsprintf( 'rgba( %1$s, %2$s, %3$s, 0.2)', $color_textcolor_rgb ),
	);
	$color_scheme_css = fitnessspace_get_color_scheme_css( $colors );
	wp_add_inline_style( 'fitnessspace-style', $color_scheme_css );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_color_scheme_css' );
/**
 * Binds the JS listener to make Customizer color_scheme control.
 *
 * Passes color scheme data as colorScheme global.
 *
 */
function fitnessspace_customize_control_js() {
	wp_enqueue_script( 'color-scheme-control', get_template_directory_uri() . '/js/color-scheme-control.js', array( 'customize-controls', 'iris', 'underscore', 'wp-util' ), '20160412', true );
	wp_localize_script( 'color-scheme-control', 'colorScheme', fitnessspace_get_color_schemes() );
}
add_action( 'customize_controls_enqueue_scripts', 'fitnessspace_customize_control_js' );
/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 */
function fitnessspace_customize_preview_js() {
	wp_enqueue_script( 'fitnessspace-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20160412', true );
}
add_action( 'customize_preview_init', 'fitnessspace_customize_preview_js' );
/**
 * Returns CSS for the color schemes.
 */
function fitnessspace_get_color_scheme_css( $colors ) {
	$colors = wp_parse_args( $colors, array(
		'page_background_color' => '',
		'link_color'            => '',
		'main_text_color'       => '',
		'secondary_text_color'  => '',
		'hover_filter_color'    => '',
		'border_color'          => '',
	) );
	return <<<CSS
	/* Color Scheme */
	/* Background Color */
	/*body {
		background-color: {$colors['background_color']};
	}*/
	/* Page Background Color */
	.site {
		background-color: {$colors['page_background_color']};
	}
	
	/* Link Color */
	mark,
	ins,
	button:hover,
	button:focus,
	input[type="button"]:hover,
	input[type="button"]:focus,
	input[type="reset"]:hover,
	input[type="reset"]:focus,
	input[type="submit"]:hover,
	input[type="submit"]:focus,
	.pagination .prev:hover,
	.pagination .prev:focus,
	.pagination .next:hover,
	.pagination .next:focus,
	.widget_calendar tbody a,
	.page-links a:hover,
	.page-links a:focus {
		background-color: {$colors['link_color']};
	}
	.menu-toggle:hover,
	.menu-toggle:focus,
	a,
	.main-navigation a:hover,
	.main-navigation a:focus,
	.dropdown-toggle:hover,
	.dropdown-toggle:focus,
	.social-navigation a:hover:before,
	.social-navigation a:focus:before,
	.post-navigation a:hover .post-title,
	.post-navigation a:focus .post-title,
	.tagcloud a:hover,
	.tagcloud a:focus,
	.site-branding .site-title a:hover,
	.site-branding .site-title a:focus,
	.entry-title a:hover,
	.entry-title a:focus,
	.entry-footer a:hover,
	.entry-footer a:focus,
	.comment-metadata a:hover,
	.comment-metadata a:focus,
	.pingback .comment-edit-link:hover,
	.pingback .comment-edit-link:focus,
	.comment-reply-link,
	.comment-reply-link:hover,
	.comment-reply-link:focus,
	.required,
	.site-info a:hover,
	.site-info a:focus {
		color: {$colors['link_color']};
	}
	blockquote,
	.menu-toggle.toggled-on,
	.menu-toggle.toggled-on:hover,
	.menu-toggle.toggled-on:focus,
	.post-navigation,
	.post-navigation div + div,
	.pagination,
	.widget,
	.page-header,
	.page-links a,
	.comments-title,
	.comment-reply-title {
		border-color: {$colors['link_color']};
	}
	/* Main Text Color */
	mark,
	ins,
	button:hover,
	button:focus,
	input[type="button"]:hover,
	input[type="button"]:focus,
	input[type="reset"]:hover,
	input[type="reset"]:focus,
	input[type="submit"]:hover,
	input[type="submit"]:focus,
	.pagination .prev:hover,
	.pagination .prev:focus,
	.pagination .next:hover,
	.pagination .next:focus,
	.widget_calendar tbody a,
	.page-links a:hover,
	.page-links a:focus {
		background-color: {$colors['main_text_color']};
	}
	input[type="text"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="password"]:focus,
	input[type="search"]:focus,
	textarea:focus,
	.tagcloud a:hover,
	.tagcloud a:focus,
	.menu-toggle:hover,
	.menu-toggle:focus {
		border-color: {$colors['main_text_color']};
	}
	body,
	blockquote cite,
	blockquote small,
	.main-navigation a,
	.menu-toggle,
	.dropdown-toggle,
	.social-navigation a,
	.post-navigation a,
	.pagination a:hover,
	.pagination a:focus,
	.widget-title a,
	.site-branding .site-title a,
	.entry-title a,
	.page-links > .page-links-title,
	.comment-author,
	.comment-reply-title small a:hover,
	.comment-reply-title small a:focus {
		color: {$colors['main_text_color']};
	}
	/* Secondary Text Color */
	/**
	 * IE8 and earlier will drop any block with CSS3 selectors.
	 * Do not combine these styles with the next block.
	 */
	button,
	button[disabled]:hover,
	button[disabled]:focus,
	input[type="button"],
	input[type="button"][disabled]:hover,
	input[type="button"][disabled]:focus,
	input[type="reset"],
	input[type="reset"][disabled]:hover,
	input[type="reset"][disabled]:focus,
	input[type="submit"],
	input[type="submit"][disabled]:hover,
	input[type="submit"][disabled]:focus,
	.menu-toggle.toggled-on,
	.menu-toggle.toggled-on:hover,
	.menu-toggle.toggled-on:focus,
	.pagination:before,
	.pagination:after,
	.pagination .prev,
	.pagination .next,
	.page-links a {
		color: {$colors['secondary_text_color']};
	}
	body:not(.search-results) .entry-summary {
		color: {$colors['secondary_text_color']};
	}
	blockquote,
	.post-password-form label,
	a:hover,
	a:focus,
	a:active,
	.post-navigation .meta-nav,
	.image-navigation,
	.comment-navigation,
	.widget_recent_entries .post-date,
	.widget_rss .rss-date,
	.widget_rss cite,
	.site-description,
	.author-bio,
	.entry-footer,
	.entry-footer a,
	.sticky-post,
	.taxonomy-description,
	.entry-caption,
	.comment-metadata,
	.pingback .edit-link,
	.comment-metadata a,
	.pingback .comment-edit-link,
	.comment-form label,
	.comment-notes,
	.comment-awaiting-moderation,
	.logged-in-as,
	.form-allowed-tags,
	.site-info,
	.site-info a,
	.wp-caption .wp-caption-text,
	.gallery-caption,
	.widecolumn label,
	.widecolumn .mu_register label {
		color: {$colors['secondary_text_color']};
	}
	.widget_calendar tbody a:hover,
	.widget_calendar tbody a:focus {
		background-color: {$colors['secondary_text_color']};
	}
	/* Border Color */
	fieldset,
	pre,
	abbr,
	acronym,
	table,
	th,
	td,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="password"],
	input[type="search"],
	textarea,
	.main-navigation li,
	.main-navigation .primary-menu,
	.menu-toggle,
	.dropdown-toggle:after,
	.social-navigation a,
	.image-navigation,
	.comment-navigation,
	.tagcloud a,
	.entry-content,
	.entry-summary,
	.page-links a,
	.page-links > span,
	.comment-list article,
	.comment-list .pingback,
	.comment-list .trackback,
	.comment-reply-link,
	.no-comments,
	.widecolumn .mu_register .mu_alert {
		border-color: {$colors['main_text_color']}; /* Fallback for IE7 and IE8 */
		border-color: {$colors['border_color']};
	}
	hr,
	code {
		background-color: {$colors['main_text_color']}; /* Fallback for IE7 and IE8 */
		background-color: {$colors['border_color']};
	}
	@media screen and (min-width: 56.875em) {
		.main-navigation li:hover > a,
		.main-navigation li.focus > a {
			color: {$colors['link_color']};
		}
		.main-navigation ul ul:before {
			border-top-color: {$colors['border_color']};
			border-bottom-color: {$colors['border_color']};
		}
		.main-navigation ul ul:after {
			border-top-color: {$colors['page_background_color']};
			border-bottom-color: {$colors['page_background_color']};
		}
	}
CSS;
}
/**
 * Outputs an Underscore template for generating CSS for the color scheme.
 *
 * The template generates the css dynamically for instant display in the
 * Customizer preview.
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_color_scheme_css_template() {
	$colors = array(
		//'background_color'      => '{{ data.background_color }}',
		'page_background_color' => '{{ data.page_background_color }}',
		'link_color'            => '{{ data.link_color }}',
		'main_text_color'       => '{{ data.main_text_color }}',
		'secondary_text_color'  => '{{ data.secondary_text_color }}',
		'hover_filter_color'    => '{{ data.hover_filter_color }}',
		'border_color'          => '{{ data.border_color }}',
	);
	?>
	<script type="text/html" id="tmpl-fitnessspace-color-scheme">
		<?php echo fitnessspace_get_color_scheme_css( $colors ); ?>
	</script>
	<?php
}
add_action( 'customize_controls_print_footer_scripts', 'fitnessspace_color_scheme_css_template' );
/**
 * Enqueues front-end CSS for the page background color.
 *
 * @since Fitness Space 1.0
 *
 * @see wp_add_inline_style()
 */
function fitnessspace_page_background_color_css() {
	$color_scheme          = fitnessspace_get_color_scheme();
	$default_color         = $color_scheme[1];
	$page_background_color = get_theme_mod( 'page_background_color', $default_color );
	// Don't do anything if the current color is the default.
	if ( $page_background_color === $default_color ) {
		return;
	}
	$css = '
		/* Custom Page Background Color */
		.site {
			background-color: %1$s;
		}
		#masthead.sticky, .masthead-home.sticky{
			background-color: %1$s;
		}
		@media screen and (min-width: 56.875em) {
			.main-navigation ul ul li {
				background-color: %1$s;
			}
			.main-navigation ul ul:after {
				border-top-color: %1$s;
				border-bottom-color: %1$s;
			}
		}
	';
	wp_add_inline_style( 'fitnessspace-style', sprintf( $css, $page_background_color ) );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_page_background_color_css', 11 );
/**
 * Enqueues front-end CSS for the link color.
 *
 * @since Fitness Space 1.0
 *
 * @see wp_add_inline_style()
 */
function fitnessspace_link_color_css() {
	$color_scheme    = fitnessspace_get_color_scheme();
	$default_color   = $color_scheme[2];
	$link_color = get_theme_mod( 'link_color', $default_color );
	// Don't do anything if the current color is the default.
	if ( $link_color === $default_color ) {
		return;
	}
	$css = '
		/* Custom Link Color */
		mark,
		ins,
		button,
		button.green-button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.pagination .prev,
		.pagination .next,
		.pagination .prev:hover,
		.pagination .prev:focus,
		.pagination .next:hover,
		.pagination .next:focus,
		.pagination .nav-links:before,
		.pagination .nav-links:after,
		.widget_calendar tbody a,
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus,
		.page-links a,
		.page-links a:hover,
		.page-links a:focus {
			color: %1$s; !important;
		}
		.menu-toggle:hover,
		.menu-toggle:focus,
		a,
		.main-navigation a:hover,
		.main-navigation a:focus,
		.dropdown-toggle:hover,
		.dropdown-toggle:focus,
		.social-navigation a:hover:before,
		.social-navigation a:focus:before,
		.post-navigation a:hover .post-title,
		.post-navigation a:focus .post-title,
		.tagcloud a:hover,
		.tagcloud a:focus,
		.site-branding .site-title a:hover,
		.site-branding .site-title a:focus,
		.entry-title a:hover,
		.entry-title a:focus,
		.entry-footer a:hover,
		.entry-footer a:focus,
		.comment-metadata a:hover,
		.comment-metadata a:focus,
		.pingback .comment-edit-link:hover,
		.pingback .comment-edit-link:focus,
		.comment-reply-link,
		.comment-reply-link:hover,
		.comment-reply-link:focus,
		.required,
		.site-info a:hover,
		.site-info a:focus {
			color: %1$s;
		}
		mark,
		ins,
		button:hover,
		button:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		.pagination .prev:hover,
		.pagination .prev:focus,
		.pagination .next:hover,
		.pagination .next:focus,
		.widget_calendar tbody a,
		.page-links a:hover,
		.page-links a:focus {
			background-color: %1$s;
		}
		button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.pagination:before,
		.pagination:after,
		.pagination .prev,
		.pagination .next,
		.page-links a {
			background-color: %1$s;
		}
		.main-navigation .current-menu-item > a, .main-navigation .current-menu-ancestor > a, .main-navigation li:hover > a, .main-navigation li.focus > a, .site-branding .site-title a:hover, .site-branding .site-title a:focus
		{
			color: %1$s;
		}
	';
	wp_add_inline_style( 'fitnessspace-style', sprintf( $css, $link_color ) );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_link_color_css', 11 );
/**
 * Enqueues front-end CSS for the main text color.
 *
 * @since Fitness Space 1.0
 *
 * @see wp_add_inline_style()
 */
function fitnessspace_main_text_color_css() {
	$color_scheme    = fitnessspace_get_color_scheme();
	$default_color   = $color_scheme[3];
	$main_text_color = get_theme_mod( 'main_text_color', $default_color );
	// Don't do anything if the current color is the default.
	if ( $main_text_color === $default_color ) {
		return;
	}
	// Convert main text hex color to rgba.
	$main_text_color_rgb = fitnessspace_hex2rgb( $main_text_color );
	// If the rgba values are empty return early.
	if ( empty( $main_text_color_rgb ) ) {
		return;
	}
	// If we get this far, we have a custom color scheme.
	$border_color = vsprintf( 'rgba( %1$s, %2$s, %3$s, 0.2)', $main_text_color_rgb );
	$css = '
		/* Custom Main Text Color */
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		textarea:focus,
		.tagcloud a:hover,
		.tagcloud a:focus,
		.menu-toggle:hover,
		.menu-toggle:focus {
			border-color: %1$s;
		}
		body,
		blockquote cite,
		blockquote small,
		.main-navigation a,
		.menu-toggle,
		.dropdown-toggle,
		.social-navigation a,
		.post-navigation a,
		.pagination a:hover,
		.pagination a:focus,
		.widget-title a,
		.site-branding .site-title a,
		.entry-title a,
		.page-links > .page-links-title,
		.comment-author,
		.comment-reply-title small a:hover,
		.comment-reply-title small a:focus {
			color: %1$s
		}
		blockquote,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.post-navigation,
		.post-navigation div + div,
		.pagination,
		.widget,
		.page-header,
		.page-links a,
		.comments-title,
		.comment-reply-title {
			border-color: %1$s;
		}
		/* Border Color */
		fieldset,
		pre,
		abbr,
		acronym,
		table,
		th,
		td,
		input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		textarea,
		.main-navigation li,
		.main-navigation .primary-menu,
		.menu-toggle,
		.dropdown-toggle:after,
		.social-navigation a,
		.image-navigation,
		.comment-navigation,
		.tagcloud a,
		.entry-content,
		.entry-summary,
		.page-links a,
		.page-links > span,
		.comment-list article,
		.comment-list .pingback,
		.comment-list .trackback,
		.comment-reply-link,
		.no-comments,
		.widecolumn .mu_register .mu_alert {
			border-color: %1$s; /* Fallback for IE7 and IE8 */
			border-color: %2$s;
		}
		hr,
		code {
			background-color: %1$s; /* Fallback for IE7 and IE8 */
			background-color: %2$s;
		}
		body:not(.search-results) .entry-summary {
			color: %1$s;
		}
		blockquote,
		.post-password-form label,
		a:hover,
		a:focus,
		a:active,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.widget_recent_entries .post-date,
		.widget_rss .rss-date,
		.widget_rss cite,
		.site-description,
		.author-bio,
		.entry-footer,
		.entry-footer a,
		.sticky-post,
		.taxonomy-description,
		.entry-caption,
		.comment-metadata,
		.pingback .edit-link,
		.comment-metadata a,
		.pingback .comment-edit-link,
		.comment-form label,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.form-allowed-tags,
		.site-info,
		.site-info a,
		.wp-caption .wp-caption-text,
		.gallery-caption,
		.widecolumn label,
		.widecolumn .mu_register label {
			color: %1$s;
		}
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus {
			background-color: %1$s;
		}
	';
	wp_add_inline_style( 'fitnessspace-style', sprintf( $css, $main_text_color, $border_color ) );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_main_text_color_css', 11 );
/**
 * Enqueues front-end CSS for the secondary text color.
 *
 * @since Fitness Space 1.0
 *
 * @see wp_add_inline_style()
 */
function fitnessspace_secondary_text_color_css() {
	$color_scheme    = fitnessspace_get_color_scheme();
	$default_color   = $color_scheme[4];
	$secondary_text_color = get_theme_mod( 'secondary_text_color', $default_color );
	// Don't do anything if the current color is the default.
	if ( $secondary_text_color === $default_color ) {
		return;
	}
	$css = '
		/* Custom Secondary Text Color */
		/**
		 * IE8 and earlier will drop any block with CSS3 selectors.
		 * Do not combine these styles with the next block.
		 */
		#landing-nav a{
			color: %1$s
		}
		h1.classes, 
		h1.trainer-name,
		h2.trainer-title,
		button.trainer-button,
		.pricing-footer,
		.indv-blog-title,
		h1.section-title,
		.contact-bottom,
		.contact-socialmediaicons,
		.site-footer,
		.entry-header,
		.nav-img-list a .menu-image-title,
		{
			color:%1$s
		}
		mark,
		ins,
		button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.pagination .prev,
		.pagination .next,
		.pagination .prev:hover,
		.pagination .prev:focus,
		.pagination .next:hover,
		.pagination .next:focus,
		.pagination .nav-links:before,
		.pagination .nav-links:after,
		.widget_calendar tbody a,
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus,
		.page-links a,
		.page-links a:hover,
		.page-links a:focus {
			color:%1$s
		}
	';
	wp_add_inline_style( 'fitnessspace-style', sprintf( $css, $secondary_text_color ) );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_secondary_text_color_css', 11 );

?>