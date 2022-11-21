<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'testimonial_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Testimonial - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'testimonial_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'testimonial_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'testimonial_selective_refresh', array(
    'selector'        => '#testimonial .editSection',
    'settings'        => 'testimonial_display_section',
    'render_callback' => function () {
        return "";
    },
) );