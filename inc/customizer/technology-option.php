<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'technology_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Technology - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'technology_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'technology_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'technology_section',
    'settings' => 'technology_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'technology_selective_refresh', array(
    'selector'        => '#techonlogy .editSection',
    'settings'        => 'technology_display_section',
    'render_callback' => function () {
        return "";
    },
) );