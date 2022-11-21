<?php

/**
 * ------------------------------------------------------------------------------------------------
 * Define constants.
 * ------------------------------------------------------------------------------------------------
 */

if ( !defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

define( 'ASADPRO_THEME_DIR', get_template_directory_uri() . '/' );

define( 'ASADPRO_THEMEROOT', get_template_directory() . '/' );

define( 'ASADPRO_ASSETS', ASADPRO_THEME_DIR . 'assets/' );

define( 'ASADPRO_JS', ASADPRO_ASSETS . 'js/' );
define( 'ASADPRO_CSS', ASADPRO_ASSETS . 'css/' );
define( 'ASADPRO_FONTS', ASADPRO_ASSETS . 'fonts/' );
define( 'ASADPRO_IMG', ASADPRO_ASSETS . 'img/' );

define( 'ASADPRO_ASSETS_LIB', ASADPRO_ASSETS . 'lib/' );
define( 'ASADPRO_ASSETS_PLUGIN', ASADPRO_ASSETS_LIB . 'plugins/' );

define( 'ASADPRO_INC', ASADPRO_THEMEROOT . 'inc/' );

define( 'ASADPRO_LIBR', ASADPRO_THEMEROOT . 'library/' );

define( 'ASADPRO_CLASS', ASADPRO_INC . 'classes/' );
define( 'ASADPRO_CUSTOMIZER', ASADPRO_INC . 'customizer/' );
define( 'ASADPRO_SETTINGS', ASADPRO_INC . 'settings/' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ASADPRO_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ASADPRO_content_width', 640 );
}

add_action( 'after_setup_theme', 'ASADPRO_content_width', 0 );