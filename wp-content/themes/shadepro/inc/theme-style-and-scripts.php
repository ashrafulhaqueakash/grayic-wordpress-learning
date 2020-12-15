<?php

/**
 * Enqueue scripts and styles.
 */
function shadepro_scripts()
{
	wp_enqueue_style('google-font-dm-sans', get_template_directory_uri() . '/assets/css/font-circular-std.css', array(), null);
	wp_enqueue_style('Font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '4.7.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), 'null');
	wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), null);
	wp_enqueue_style('shadepro-core', get_template_directory_uri() . '/assets/css/core.css', array(), SHADE_THEME_VERSION);
	wp_enqueue_style('shadepro-gutenberg', get_template_directory_uri() . '/assets/css/gutenberg.css', array(), SHADE_THEME_VERSION);
	wp_enqueue_style('shadepro-custom', get_template_directory_uri() . '/assets/css/shadepro-style.css', array(), SHADE_THEME_VERSION);
	wp_enqueue_style('shadepro-style', get_stylesheet_uri(), array(), SHADE_THEME_VERSION);
	wp_enqueue_style('shadepro-responsive', get_template_directory_uri() . '/assets/css/shadepro-responsive.css', array(), SHADE_THEME_VERSION);

	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script('packery', get_template_directory_uri() . '/assets/js/packery-mode.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
	wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array('jquery'), null, true);
	wp_enqueue_script('shadepro-main', get_template_directory_uri() . '/assets/js/shadepro-main.js', array('jquery'), SHADE_THEME_VERSION, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'shadepro_scripts');


/**
 * Registers an editor stylesheet for the theme.
 */
function shadepro_theme_add_editor_styles()
{

	add_editor_style(get_template_directory_uri() . '/assets/css/font-circular-std.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/editor-style.css');
}
add_action('admin_init', 'shadepro_theme_add_editor_styles');
