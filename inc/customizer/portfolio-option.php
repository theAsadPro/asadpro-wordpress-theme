<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'portfolio_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Portfolio - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'portfolio_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'portfolio_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'portfolio_section',
    'settings' => 'portfolio_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'portfolio_selective_refresh', array(
    'selector'        => '#our-portfolio .editSection',
    'settings'        => 'portfolio_display_section',
    'render_callback' => function () {
        return "";
    },
) );