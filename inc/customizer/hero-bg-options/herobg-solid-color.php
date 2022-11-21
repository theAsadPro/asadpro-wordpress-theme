<?php

/**
 * =======================================
 *   Settings For Image Bg -> START <-
 * =======================================
 */

$wp_customizer->add_setting( 'asadPro_heroBG_solidColor', array(
    'default'   => '',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadPro_heroBG_solidColor_control',
        array(
            'label'           => __( 'Select background color', 'asadPro' ),
            'section'         => 'asadPro_hero_background',
            'settings'        => 'asadPro_heroBG_solidColor',
            'active_callback' => 'herobg_type_solid_color_callback',
        )
    )
);

/**
 * =======================================
 *    Settings For Image Bg -> END <-
 * =======================================
 */

/**
 * =======================================
 * Callbacks For Solid Color Background
 * =======================================
 */

function herobg_type_solid_color_callback() {
    if ( herobg_type_callback() == true && get_theme_mod( 'asadPro_heroBGTypes' ) == 'solid_color' ) {
        return true;
    }
    return false;
}