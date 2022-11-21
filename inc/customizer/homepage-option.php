<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'what_i_do', array(
    'panel'    => 'asadPro_homepage_settings',
    'title'    => __( 'What I Do - Section', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 * section display settings
 * =======================================
 */
$wp_customizer->add_setting( 'whatIdo_display_section', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'whatIdo_display_section_control', array(
    'label'    => __( 'Show this section', 'asadpro' ),
    'section'  => 'what_i_do',
    'settings' => 'whatIdo_display_section',
    'type'     => 'checkbox',
) );

$wp_customizer->selective_refresh->add_partial( 'whatIdo_selective_refresh', array(
    'selector'        => '#what-we-do .editSection',
    'settings'        => 'whatIdo_display_section',
    'render_callback' => function () {
        return "";
    },
) );

/**
 * =======================================
 * mini title display setting
 * =======================================
 */
$wp_customizer->add_setting( 'whatIdo_mini_title_display', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'whatIdo_mini_title_display_control', array(
    'label'    => __( 'Display Mini Title', 'asadpro' ),
    'section'  => 'what_i_do',
    'settings' => 'whatIdo_mini_title_display',
    'type'     => 'checkbox',
) );

$wp_customizer->add_setting( 'whatIdo_section_mini_title', array(
    'default'   => __( 'What I Do', 'asadPro' ),
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'whatIdo_section_mini_title_control', array(
    'label'    => __( 'Mini Title', 'asadPro' ),
    'section'  => 'what_i_do',
    'settings' => 'whatIdo_section_mini_title',
    'type'     => 'text',
) );

/**
 * =======================================
 * section headding
 * =======================================
 */

$wp_customizer->add_setting( 'whatIdo_section_headding', array(
    'default'   => __( 'You share your ideas. <span class="highlight"> We get it </span> done.', 'asadPro' ),
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'whatIdo_section_headding_control', array(
    'label'    => __( 'Headding', 'asadPro' ),
    'section'  => 'what_i_do',
    'settings' => 'whatIdo_section_headding',
    'type'     => 'text',
) );

/**
 * =======================================
 * section description
 * =======================================
 */

$default = <<<EOD
            Working with shopify, wordpress are the most experienced side of me and if you want more smarter solution that is API based headless cms development.
            <br />
            <br />
            You can turn your existion shopify or wordpress website into react app or headless app with latest technologies. they will be most beautiful, cross device friendly and super fast. Also I can work for data visialization with MS Power BI and can also build wix websites.
        EOD;
$wp_customizer->add_setting( 'whatIdo_section_desc', array(
    'default'   => $default,
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'whatIdo_section_desc_control', array(
    'label'    => 'Section Description',
    'section'  => 'what_i_do',
    'settings' => 'whatIdo_section_desc',
    'type'     => 'textarea',
) );

/**
 * =======================================
 *         Navigation Color ->START<-
 * =======================================
 */

// ============================*****=================================
// ============================ END ================================
// ============================*****=================================
/***
function headerCtaDisplay() {
if ( get_theme_mod( 'asadPro_home_headerCtaDisplay' ) == true ) {
return true;
}
return false;
}
 **/
