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

// projects details

// Experience One
//Number
$wp_customizer->add_setting( 'expertience_facts_item1', array(
    'default'   => __( '450+', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item1_control', array(
    'label'    => __( 'Experience 01', 'asadPro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item1',
    'type'     => 'text',
) );

//title
$wp_customizer->add_setting( 'expertience_facts_item1_title', array(
    'default'   => __( 'Successful projects', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item1_title_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item1_title',
    'type'     => 'text',
) );

//desc
$wp_customizer->add_setting( 'expertience_facts_item1_desc', array(
    'default'   => 'Almost 450+ projects are done with clients happiness.',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item1_desc_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item1_desc',
    'type'     => 'textarea',
) );

//number
$wp_customizer->add_setting( 'expertience_facts_item2', array(
    'default'   => __( '7+', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item2_control', array(
    'label'    => __( 'Experience 02', 'asadPro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item2',
    'type'     => 'text',
) );

//title
$wp_customizer->add_setting( 'expertience_facts_item2_title', array(
    'default'   => __( 'Years Experience', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item2_title_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item2_title',
    'type'     => 'text',
) );

//desc
$wp_customizer->add_setting( 'expertience_facts_item2_desc', array(
    'default'   => 'As a web expert from last 7+ years with huge experience.',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item2_desc_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item2_desc',
    'type'     => 'textarea',
) );

//number
$wp_customizer->add_setting( 'expertience_facts_item3', array(
    'default'   => __( '300+', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item3_control', array(
    'label'    => __( 'Experience 03', 'asadPro' ),
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item3',
    'type'     => 'text',
) );

//title
$wp_customizer->add_setting( 'expertience_facts_item3_title', array(
    'default'   => __( 'Happy Clients', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item3_title_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item3_title',
    'type'     => 'text',
) );

//desc
$wp_customizer->add_setting( 'expertience_facts_item3_desc', array(
    'default'   => 'All happy clients are from all over the world. (USA, Canada, UK, Australia, UAE etc).',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'expertience_facts_item3_desc_control', array(
    'section'  => 'expertience_facts_section',
    'settings' => 'expertience_facts_item3_desc',
    'type'     => 'textarea',
) );
