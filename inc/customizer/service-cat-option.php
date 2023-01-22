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

//Services Items
/**
 * =======================================
 * section Services Items settings
 * =======================================
 */

//item 01
$wp_customizer->add_setting( 'serice_cat_item1', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    'default'   => 'option1',
) );

$wp_customizer->add_control( 'serice_cat_item1_control', array(
    'label'    => __( 'Item 01 (Ico, Title, Url)', 'asadpro' ),
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item1',
    'type'     => 'select',
    'choices'  => array(
        'option1' => __( 'Wordpress', 'asadpro' ),
        'option2' => __( 'Shopify', 'asadpro' ),
        'option3' => __( 'Headless', 'asadpro' ),
        'option4' => __( 'DataVisualization', 'asadpro' ),
        'option5' => __( 'SEO', 'asadpro' ),
        'option6' => __( 'WIX', 'asadpro' ),
        'option7' => __( 'Marketing', 'asadpro' ),
        'option8' => __( 'WooCommerce', 'asadpro' ),
        'option9' => __( 'WooCommerce', 'asadpro' ),
    ),
) );

$wp_customizer->add_setting( 'serice_cat_item1_text', array(
    'default'   => __( 'Title', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'serice_cat_item1_text_control', array(
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item1_text',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'serice_cat_item1_url', array(
    'default'   => __( 'URL', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'serice_cat_item1_url_control', array(
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item1_url',
    'type'     => 'url',
) );

//item 02
$wp_customizer->add_setting( 'serice_cat_item2', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    'default'   => 'option1',
) );

$wp_customizer->add_control( 'serice_cat_item2_control', array(
    'label'    => __( 'Item 02 (Ico, Title, Url)', 'asadpro' ),
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item2',
    'type'     => 'select',
    'choices'  => array(
        'option1' => __( 'Wordpress', 'asadpro' ),
        'option2' => __( 'Shopify', 'asadpro' ),
        'option3' => __( 'Headless', 'asadpro' ),
        'option4' => __( 'DataVisualization', 'asadpro' ),
        'option5' => __( 'SEO', 'asadpro' ),
        'option6' => __( 'WIX', 'asadpro' ),
        'option7' => __( 'Marketing', 'asadpro' ),
        'option8' => __( 'WooCommerce', 'asadpro' ),
        'option9' => __( 'WooCommerce', 'asadpro' ),
    ),
) );

$wp_customizer->add_setting( 'serice_cat_item2_text', array(
    'default'   => __( 'Title', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'serice_cat_item2_text_control', array(
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item2_text',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'serice_cat_item2_url', array(
    'default'   => __( 'URL', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'serice_cat_item2_url_control', array(
    'section'  => 'serice_cat_section',
    'settings' => 'serice_cat_item1_url',
    'type'     => 'url',
) );
