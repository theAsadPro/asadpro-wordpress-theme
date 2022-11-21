<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'about_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'About - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'about_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'about_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'about_section',
    'settings' => 'about_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'about_selective_refresh', array(
    'selector'        => '#about-me .editSection',
    'settings'        => 'about_display_section',
    'render_callback' => function () {
        return "";
    },
) );