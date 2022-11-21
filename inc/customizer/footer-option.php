<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'asadPro_footer', array(
    'panel'    => 'asadPro_settings',
    'title'    => __( 'Footer', 'asadPro' ),
    'priority' => 1,
) );

$wp_customizer->add_setting( 'asadPro_logoText', array(
    'default'   => 'Asad<span>Pro</span>',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_logoText_control', array(
    'label'       => __( 'Logo Text', 'asadPro' ),
    'description' => __( 'You can use <span> tag for separate color', 'asadPro' ),
    'section'     => 'asadPro_footer',
    'settings'    => 'asadPro_logoText',
    'type'        => 'text',
) );

$wp_customizer->add_setting( 'asadPro_logoSlogan', array(
    'default'   => 'asadpro.com',
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'asadPro_logoSlogan_control', array(
    'label'    => __( 'Slogan', 'asadPro' ),
    'section'  => 'asadPro_footer',
    'settings' => 'asadPro_logoSlogan',
    'type'     => 'text',
) );

$wp_customizer->add_setting( 'asadPro_footerCta', array(
    'default'   => 'Let\'s Start',
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'asadPro_footerCta_control', array(
    'label'       => __( 'CTA Button', 'asadPro' ),
    'description' => __( 'Change texts of the CTA button', 'asadPro' ),
    'section'     => 'asadPro_footer',
    'settings'    => 'asadPro_footerCta',
    'type'        => 'text',
) );

$wp_customizer->add_setting( 'asadPro_footerCtaUrl', array(
    'default'   => 'http://asadpro.com/contact',
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'asadPro_footerCtaUrl_control', array(
    'label'    => __( 'CTA URL', 'asadPro' ),
    'section'  => 'asadPro_footer',
    'settings' => 'asadPro_footerCtaUrl',
    'type'     => 'url',
) );

// ============================*****=================================
// ============================ END ================================
// ============================*****=================================