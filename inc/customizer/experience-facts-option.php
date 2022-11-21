<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'expertience_facts_section', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'Experience Facts - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 *   ---> section display settings <---
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

/**
 * =======================================
 * mini title display setting
 * =======================================
 */
$wp_customizer->add_setting( 'expertience_facts_mini_title_display', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'expertience_facts_mini_title_display_control', array(
    'label'    => __( 'Display Mini Title', 'asadpro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_mini_title_display',
    'type'     => 'checkbox',
) );

$wp_customizer->add_setting( 'expertience_facts_section_mini_title', array(
    'default'   => __( 'Why Me', 'asadPro' ),
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'expertience_facts_section_mini_title_control', array(
    'label'    => __( 'Mini Title', 'asadPro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_section_mini_title',
    'type'     => 'text',
) );

/**
 * =======================================
 * section headding
 * =======================================
 */

$wp_customizer->add_setting( 'expertience_facts_section_headding', array(
    'default'   => __( 'Some <span class="highlight">facts of me</span> to choose', 'asadPro' ),
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'expertience_facts_section_headding_control', array(
    'label'    => __( 'Headding', 'asadPro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_section_headding',
    'type'     => 'text',
) );

/**
 * =======================================
 * section description
 * =======================================
 */

/**
 * =======================================
 *   section description display setting
 * =======================================
 */
$wp_customizer->add_setting( 'expertience_facts_section_desc_display', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'expertience_facts_section_desc_display_control', array(
    'label'    => __( 'Display Description', 'asadpro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_section_desc_display',
    'type'     => 'checkbox',
) );
$default = <<<EOD
            Working with shopify, wordpress are the most experienced side of me and if you want more smarter solution that is API based headless cms development.
            <br />
            <br />
            You can turn your existion shopify or wordpress website into react app or headless app with latest technologies. they will be most beautiful, cross device friendly and super fast. Also I can work for data visialization with MS Power BI and can also build wix websites.
        EOD;
$wp_customizer->add_setting( 'expertience_facts_section_desc', array(
    'default'   => $default,
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_section_desc_control', array(
    'label'    => 'Section Description',
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_section_desc',
    'type'     => 'textarea',
) );