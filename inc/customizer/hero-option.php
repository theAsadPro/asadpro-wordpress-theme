<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */

/**
 * =======================================
 * Hero Customizer Section
 * =======================================
 */
$wp_customizer->add_section( 'asadPro_hero', array(
    'panel'    => 'asadPro_settings',
    'title'    => __( 'Hero Contents', 'asadPro' ),
    'priority' => 2,
) );

/**
 * =======================================
 *      Hero Welcome Test 1st Part
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_WelcomeText', array(
    'default'   => __( 'Welcome, Do you need a professional', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_WelcomeText_control', array(
    'label'       => __( 'Welcome Text', 'asadPro' ),
    'description' => __( 'Welcome Text here', 'asadPro' ),
    'section'     => 'asadPro_hero',
    'settings'    => 'asadPro_WelcomeText',
    'type'        => 'textarea',
) );

/**
 * =======================================
 *         Typed Texts 01 - 04 -> START <-
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_typed1', array(
    'default'   => __( 'Full Stack Web Devloper?', 'asadPro' ),
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_typed1_control', array(
    'label'    => __( 'Typed 01', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_typed1',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'asadPro_typed2', array(
    'default'   => __( 'WP and Shopify Developer?', 'asadPro' ),
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_typed2_control', array(
    'label'    => __( 'Typed 02', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_typed2',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'asadPro_typed3', array(
    'default'   => __( 'Marketing and SEO Expert?', 'asadPro' ),
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_typed3_control', array(
    'label'    => __( 'Typed 03', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_typed3',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'asadPro_typed4', array(
    'default'   => __( 'I Am The Person To Help.', 'asadPro' ),
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_typed4_control', array(
    'label'    => __( 'Typed 04', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_typed4',
    'type'     => 'text',
) );
/**
 * =======================================
 *         Typed Texts 01 - 04 -> END <-
 * =======================================
 */

/**
 * =======================================
 *          Description Texts
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_hero_desc', array(
    'default'   => __( 'Now, You are in the right place.
    I can build your websites and web applications as.', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_hero_desc_control', array(
    'label'    => __( 'Hero Description', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_hero_desc',
    'type'     => 'textarea',
) );

/**
 * =======================================
 *          CTA Button -> START <-
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_heroCta', array(
    'default'   => 'Download Resume',
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'asadPro_heroCta_control', array(
    'label'       => __( 'CTA Button', 'asadPro' ),
    'description' => __( 'Change texts of the CTA button', 'asadPro' ),
    'section'     => 'asadPro_hero',
    'settings'    => 'asadPro_heroCta',
    'type'        => 'text',
) );

$wp_customizer->add_setting( 'asadPro_heroCtaUrl', array(
    'default'   => 'http://asadpro.com/contact',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_heroCtaUrl_control', array(
    'label'    => __( 'CTA URL', 'asadPro' ),
    'section'  => 'asadPro_hero',
    'settings' => 'asadPro_heroCtaUrl',
    'type'     => 'url',
) );
/**
 * =======================================
 *          CTA Button -> END <-
 * =======================================
 */

// ============================*****=================================
// ============================ -> END <- ================================
// ============================*****=================================

/**
 * =======================================
 * Callbacks
 * =======================================
 */