<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */

/**
 * =======================================
 *      Hero BG Customizer Section
 * =======================================
 */
$wp_customizer->add_section( 'asadPro_hero_background', array(
    'panel'    => 'asadPro_settings',
    'title'    => __( 'Hero Typography & Colors', 'asadPro' ),
    'priority' => 3,
) );

$wp_customizer->add_setting( 'asadPro_heroBG_solidColor_text', array(
    'default'   => '#ffffff',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadPro_heroBG_solidColor_text_control',
        array(
            'label'    => __( 'Text\'s Color', 'asadPro' ),
            'section'  => 'asadPro_hero_background',
            'settings' => 'asadPro_heroBG_solidColor_text',
            // 'active_callback' => 'herobg_type_solid_color_callback',
        )
    )
);

$wp_customizer->add_setting( 'asadPro_heroBG_solidColor_highlight', array(
    'default'   => '#ef1d4f',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadPro_heroBG_solidColor_highlight_control',
        array(
            'label'    => __( 'Highlight Color', 'asadPro' ),
            'section'  => 'asadPro_hero_background',
            'settings' => 'asadPro_heroBG_solidColor_highlight',
            // 'active_callback' => 'herobg_type_solid_color_callback',
        )
    )
);

/**
 * =======================================
 *         Navigation Align ->START<-
 * =======================================
 */
$wp_customizer->add_setting( 'asadpro_hero_text_align', array(
    'default'   => 'center',
    'transport' => 'postMessage',
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'asadpro_hero_text_align_control', array(
    'label'       => __( 'Hero Content\'s Align', 'asadPro' ),
    'description' => __( 'Select position of main Menu' ),
    'settings'    => 'asadpro_hero_text_align',
    'section'     => 'asadPro_hero_background',
    'type'        => 'radio',
    'choices'     => array(
        'start'  => __( 'Left' ),
        'center' => __( 'Center' ),
        'end'    => __( 'Right' ),
    ),
    // 'active_callback' => 'herobg_type_callback',
 ) );

/**
 * =======================================
 *          Background Type
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_heroBg', array(
    'default'   => 1,
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_heroBg_control', array(
    'label'       => __( 'Default Background', 'asadPro' ),
    'description' => __( 'Un-check it for more option.' ),
    'section'     => 'asadPro_hero_background',
    'settings'    => 'asadPro_heroBg',
    'type'        => 'checkbox',
    // 'active_callback' => 'herobg_callback',
 ) );

$wp_customizer->add_setting( 'asadPro_solarSystemBG_Color', array(
    'default'   => '#121212',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadPro_solarSystemBG_Color_control',
        array(
            'label'           => __( 'Solar System Background Color', 'asadPro' ),
            'section'         => 'asadPro_hero_background',
            'settings'        => 'asadPro_solarSystemBG_Color',
            'active_callback' => function () {
                if ( herobg_type_callback() == false ) {
                    return true;
                }
                return false;
            },
        )
    )
);

/**
 * =======================================
 *      background Type Select Dropdown
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_heroBGTypes', array(
    'default'   => 'image',
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_heroBGTypes_control', array(
    'label'           => __( 'Background Type', 'asadPro' ),
    'description'     => __( 'Hero section background type' ),
    'settings'        => 'asadPro_heroBGTypes',
    'section'         => 'asadPro_hero_background',
    'type'            => 'select',
    'choices'         => array(
        'image'       => __( 'Image' ),
        'video'       => __( 'Video' ),
        'solid_color' => __( 'Solid Color' ),
    ),
    'active_callback' => 'herobg_type_callback',
) );

/**
 * =======================================
 * Hero Section Edit
 * =======================================
 */

$wp_customizer->selective_refresh->add_partial( 'hero_section_selective_refresh', array(
    'selector'        => '#homepage .editSection',
    'settings'        => 'asadPro_heroBG_solidColor_text',
    'render_callback' => function () {
        return "";
    },
) );

/**
 * @ herobg-img.php
 * @ Hero area background image option settings
 * @package asadPro
 */
require_once ASADPRO_CUSTOMIZER . 'hero-bg-options/herobg-img.php';

/**
 * @ herobg-solid-color.php
 * @ Hero area background solid color option settings
 * @package asadPro
 */
require_once ASADPRO_CUSTOMIZER . 'hero-bg-options/herobg-solid-color.php';

/**
 * @ herobg-video.php
 * @ Hero area background video option settings
 * @package asadPro
 */
require_once ASADPRO_CUSTOMIZER . 'hero-bg-options/herobg-video.php';

// ============================*****=================================
// ============================ -> END <- ================================
// ============================*****=================================

/**
 * =======================================
 *              Callbacks
 * =======================================
 */

function herobg_type_callback() {
    if ( get_theme_mod( 'asadPro_heroBg' ) != 1 ) {
        return true;
    }
    return false;
}