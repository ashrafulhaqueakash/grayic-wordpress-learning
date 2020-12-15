<?php
// File Security Check
if (!defined('ABSPATH')) {
	exit;
}

//  Theme Constants
require_once trailingslashit(get_template_directory()) . 'inc/constants.php';
// Implement the Custom Header feature.
require SHADE_INC_DIR . '/custom-header.php';
// Theme Style and Scripts Enqueye
require_once SHADE_INC_DIR . '/theme-style-and-scripts.php';
// TGM Plugin Activation.
require SHADE_INC_DIR . '/plugins/install-plugins.php';
// TGM Plugin Activation.
require SHADE_INC_DIR . '/demo-setup.php';
// Functions which enhance the theme by hooking into WordPress.
require SHADE_INC_DIR . '/template-functions.php';
// Custom template tags for this theme.
require SHADE_INC_DIR . '/template-tags.php';
// Bufet Main Class
require_once SHADE_CLASSES_DIR . '/ShadeProMain.php';
require_once SHADE_CLASSES_DIR . '/ShadeProNavWalker.php';
// Theme Options
require_once SHADE_INC_DIR . '/theme-options.php';
// Custom Theme Options Styles
require_once SHADE_INC_DIR . '/custom-theme-options-styles.php';
// Theme Widgets
require_once SHADE_INC_DIR . '/widgets.php';
// ACf
require_once SHADE_INC_DIR . '/acf.php';
