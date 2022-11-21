<?php
/**
 * asadPro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package asadPro
 */

define( '_S_VERSION', time() );

/**
 * @functions-global.php is defining global constants
 * @package asadPro
 */
require_once get_theme_file_path( 'inc/functions-global.php' );

/**
 * @functions-global.php is defining global constants
 * @package asadPro
 */
require_once ASADPRO_INC . 'functions-essential.php';

/**
 * @File name and descriptions
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'APRO_Theme_Setup.php';

/**
 * @File name and descriptions
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'APRO_Scripts.php';

/**
 * @File name and descriptions
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'APRO_Options.php';

/**
 * @File name and descriptions
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'APRO_Customizer.php';

/**
 * @upgradetopro button and section in customizer
 * @package asadPro
 */
require_once ASADPRO_INC . 'upgradetopro/Upgrade_Pro_Init.php';

/**
 * @ARO_Faqs
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'ARO_Faqs.php';

/**
 * @Portfolio
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'ARO_Portfolio.php';
/**
 * @ARO_Testimonial
 * @package asadPro
 */
require_once ASADPRO_CLASS . 'ARO_Testimonial.php';
