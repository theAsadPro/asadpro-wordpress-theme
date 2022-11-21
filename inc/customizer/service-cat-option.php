<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'serice_cat_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Service category - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'serice_cat_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'serice_cat_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'serice_cat_selective_refresh', array(
    'selector'        => '#services .editSection',
    'settings'        => 'serice_cat_display_section',
    'render_callback' => function () {
        return "";
    },
) );