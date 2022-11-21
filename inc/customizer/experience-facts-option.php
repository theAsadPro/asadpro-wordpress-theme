<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'expertience_facts_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Expertience Facts - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'expertience_facts_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'expertience_facts_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'expertience_facts_selective_refresh', array(
    'selector'        => '#some-facts .editSection',
    'settings'        => 'expertience_facts_display_section',
    'render_callback' => function () {
        return "";
    },
) );