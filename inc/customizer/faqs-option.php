<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'faqs_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Faqs - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'faqs_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'faqs_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'faqs_section',
    'settings' => 'faqs_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'faqs_selective_refresh', array(
    'selector'        => '#faqs .editSection',
    'settings'        => 'faqs_display_section',
    'render_callback' => function () {
        return "";
    },
) );