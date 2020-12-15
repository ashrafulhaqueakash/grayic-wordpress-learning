<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// theme version
if(! defined('SHADE_THEME_VERSION') ){
    define('SHADE_THEME_VERSION', wp_get_theme()->get('Version'));
} 

// Define the DHRUBOK Folder
if( ! defined( 'SHADE_DIR' ) ) {
	define('SHADE_DIR', get_template_directory() );
}

// Define the DHRUBOK Partials Folder
if( ! defined( 'SHADE_PARTIALS_DIR' ) ) {
	define('SHADE_PARTIALS_DIR', trailingslashit( SHADE_DIR ) . 'partials' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_ASSETS_DIR' ) ) {
	define('SHADE_ASSETS_DIR', trailingslashit( SHADE_DIR ) . 'assets' );
}


// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_INC_DIR' ) ) {
	define('SHADE_INC_DIR', trailingslashit( SHADE_DIR ) . 'inc' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_FRAMEWORK_DIR' ) ) {
	define('SHADE_FRAMEWORK_DIR', trailingslashit( SHADE_INC_DIR ) . 'framework' );
}

// Define the Libs Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_LIBS_DIR' ) ) {
	define('SHADE_LIBS_DIR', trailingslashit( SHADE_DIR ) . 'libs' );
}

// Define the Shortcodes Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_SHORTCODES_DIR' ) ) {
	define('SHADE_SHORTCODES_DIR', trailingslashit( SHADE_INC_DIR ) . 'shortcodes' );
}

// Define the Classes Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_CLASSES_DIR' ) ) {
	define('SHADE_CLASSES_DIR', trailingslashit( SHADE_INC_DIR ) . 'classes' );
}

// Define the Widgets Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_WIDGETS_DIR' ) ) {
	define('SHADE_WIDGETS_DIR', trailingslashit( SHADE_INC_DIR ) . 'widgets' );
}


// Define the PLUGINS Folder of the DHRUBOK Directory
if( ! defined( 'SHADE_INC_PLUGINS_DIR' ) ) {
	define('SHADE_INC_PLUGINS_DIR', trailingslashit( SHADE_INC_DIR ) . 'plugins' );
}
