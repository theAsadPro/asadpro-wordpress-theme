<?php
/**
 * asadPro customizer sections
 * @package asadPro
 */
$wp_customizer->add_section( 'asadPro_header', array(
    'panel'    => 'asadPro_settings',
    'title'    => __( 'Header & Navigation', 'asadPro' ),
    'priority' => 1,
) );

/**
 * =======================================
 *         Navigation Color ->START<-
 * =======================================
 */

$wp_customizer->add_setting( 'asadpro_nav_bg_transparent', array(
    'default'   => true,
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'asadpro_nav_bg_transparent_control', array(
    'label'    => __( 'Transparent Navbar Background', 'asadpro' ),
    'section'  => 'asadPro_header',
    'settings' => 'asadpro_nav_bg_transparent',
    'type'     => 'checkbox',
) );

$wp_customizer->add_setting( 'asadpro_nav_bg_color', array(
    'default'   => '#000000',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadpro_nav_bg_color_control',
        array(
            'label'           => __( 'NavBar Background Color', 'asadPro' ),
            'section'         => 'asadPro_header',
            'settings'        => 'asadpro_nav_bg_color',
            'active_callback' => 'asadpro_nav_bg_transparent_callback',

        )
    )
);

$wp_customizer->add_setting( 'asadpro_nav_menuItem_color', array(
    'default'   => '#fff',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadpro_nav_menuItem_color_control',
        array(
            'label'    => __( 'Menu Item Color', 'asadPro' ),
            'section'  => 'asadPro_header',
            'settings' => 'asadpro_nav_menuItem_color',
        )
    )
);

$wp_customizer->add_setting( 'asadpro_nav_menuItem_hover_color', array(
    'default'   => '#ef1d4f',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadpro_nav_menuItem_hover_color_control',
        array(
            'label'    => __( 'Menu Item Hover Color', 'asadPro' ),
            'section'  => 'asadPro_header',
            'settings' => 'asadpro_nav_menuItem_hover_color',
        )
    )
);

/**
 * =======================================
 *         Navigation Color ->END<-
 * =======================================
 */

/**
 * =======================================
 *         Navigation Align ->START<-
 * =======================================
 */
$wp_customizer->add_setting( 'asadpro_nav_align', array(
    'default'   => 'center',
    'transport' => 'postMessage',
    'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control( 'asadpro_nav_align_control', array(
    'label'       => __( 'Navigation Align', 'asadPro' ),
    'description' => __( 'Select position of main Menu' ),
    'settings'    => 'asadpro_nav_align',
    'section'     => 'asadPro_header',
    'type'        => 'radio',
    'choices'     => array(
        'start'  => __( 'Left' ),
        'center' => __( 'Center' ),
        'end'    => __( 'Right' ),
    ),
    // 'active_callback' => 'herobg_type_callback',
 ) );

/**
 * =======================================
 *         Navigation Align ->END<-
 *
 *              Logo ->START<-
 * =======================================
 */

$wp_customizer->add_setting( 'asadpro_logoType', array(
    'default'   => 'text',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadpro_logoType_control', array(
    'label'       => __( 'Logo Type', 'asadPro' ),
    'description' => __( 'Select logo type' ),
    'settings'    => 'asadpro_logoType',
    'section'     => 'asadPro_header',
    'type'        => 'radio',
    'choices'     => array(
        'text'  => __( 'Text' ),
        'image' => __( 'Image' ),
    ),
    // 'active_callback' => 'herobg_type_callback',
 ) );

$wp_customizer->add_setting( 'asadpro_logoType_text', array(
    'default'   => 'Asad<span>Pro</span>',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadpro_logoType_text_control', array(
    'label'           => __( 'Logo Text (HTML Allowed)', 'asadPro' ),
    'section'         => 'asadPro_header',
    'settings'        => 'asadpro_logoType_text',
    'type'            => 'text',
    'active_callback' => 'asadpro_logoType_text_callback',
) );

$wp_customizer->add_setting( 'asadpro_logoType_image_upload', array(
    'default'   => __( 'Upload Logo', 'asadPro' ),
    'transport' => 'postMessage',
) );

$wp_customizer->add_control(
    new WP_Customize_Image_Control( $wp_customizer, 'asadpro_logoType_image_upload_control',
        array(
            'label'           => __( 'Select Logo', 'asadPro' ),
            'section'         => 'asadPro_header',
            'settings'        => 'asadpro_logoType_image_upload',
            'active_callback' => 'asadpro_logoType_image_upload_callback',
        )
    )
);

$wp_customizer->selective_refresh->add_partial( 'logo_selective_refresh', array(
    'selector'        => '#navigation-logo .logo a',
    'settings'        => 'asadpro_logoType', //array() for multiple
    'render_callback' => function () {
        if ( get_theme_mod( 'asadpro_logoType' ) == 'text' ) {
            return get_theme_mod( 'asadpro_logoType_text' );
        }
        return "<img src='" . get_theme_mod( 'asadpro_logoType_image_upload' ) . "' alt='' />";
    },
) );

$wp_customizer->selective_refresh->add_partial( 'logo_image_selective_refresh', array(
    'selector'        => '#navigation-logo .logo a',
    'settings'        => 'asadpro_logoType_image_upload', //array() for multiple
    'render_callback' => function () {
        return "<img src='" . get_theme_mod( 'asadpro_logoType_image_upload' ) . "' alt='' />";
    },
) );

/**
 * =======================================
 * Selective refresh for logo
 * =======================================
 */

/**
 * =======================================
 *          Logo ->END<-
 * =======================================
 */

$wp_customizer->add_setting( 'asadPro_headerCtaDisplay', array(
    'default'   => 1,
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_headerCtaDisplay_control', array(
    'label'    => __( 'Display CTA Button', 'asadPro' ),
    'section'  => 'asadPro_header',
    'settings' => 'asadPro_headerCtaDisplay',
    'type'     => 'checkbox',
) );

$wp_customizer->add_setting( 'asadPro_headerCta', array(
    'default'   => 'Let\'s Start',
    'transport' => 'postMessage',
) );
$wp_customizer->add_control( 'asadPro_headerCta_control', array(
    'label'           => __( 'CTA Button', 'asadPro' ),
    'description'     => __( 'Change texts of the CTA button', 'asadPro' ),
    'section'         => 'asadPro_header',
    'settings'        => 'asadPro_headerCta',
    'type'            => 'text',
    'active_callback' => 'headerCtaDisplay',
) );

$wp_customizer->add_setting( 'asadPro_headerCtaUrl', array(
    'default'   => 'http://asadpro.com/contact',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_headerCtaUrl_control', array(
    'label'           => __( 'CTA URL', 'asadPro' ),
    'section'         => 'asadPro_header',
    'settings'        => 'asadPro_headerCtaUrl',
    'type'            => 'url',
    'active_callback' => 'headerCtaDisplay',
) );

$wp_customizer->add_setting( 'asadpro_nav_cta_text_color', array(
    'default'   => '#fff',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadpro_nav_cta_text_color_control',
        array(
            'label'           => __( 'CTA Button Text Color', 'asadPro' ),
            'section'         => 'asadPro_header',
            'settings'        => 'asadpro_nav_cta_text_color',
            'active_callback' => 'headerCtaDisplay',
        )
    )
);
$wp_customizer->add_setting( 'asadpro_nav_cta_bg_color', array(
    'default'   => '#ef1d4f',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadpro_nav_cta_bg_color_control',
        array(
            'label'           => __( 'CTA Button Background', 'asadPro' ),
            'section'         => 'asadPro_header',
            'settings'        => 'asadpro_nav_cta_bg_color',
            'active_callback' => 'headerCtaDisplay',
        )
    )
);

$wp_customizer->add_setting( 'asadpro_nav_cta_border_radius', array(
    'default'   => 25,
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadpro_nav_cta_border_radius_control', array(
    'label'           => __( 'Button Border Radius', 'asadPro' ),
    'section'         => 'asadPro_header',
    'settings'        => 'asadpro_nav_cta_border_radius',
    'type'            => 'range',
    'input_attrs'     => array(
        'min'  => 0,
        'max'  => 30,
        'step' => 3,
    ),
    'active_callback' => 'headerCtaDisplay',
) );

/**
 * =======================================
 * Selective refresh for Header Nav
 * CTA Button
 * =======================================
 */

$wp_customizer->selective_refresh->add_partial( 'headerCta_selective_refresh', array(
    'selector'        => '#navigation-logo .hire-me-btn a',
    'settings'        => 'asadPro_headerCtaDisplay', //array() for multiple
    'render_callback' => function () {
        return get_theme_mod( 'asadPro_headerCtaDisplay' );
    },
) );

// ============================*****=================================
// ============================ END ================================
// ============================*****=================================

function headerCtaDisplay() {
    if ( get_theme_mod( 'asadPro_headerCtaDisplay' ) == true ) {
        return true;
    }
    return false;
}

function asadpro_logoType_image_upload_callback() {
    if ( get_theme_mod( 'asadpro_logoType' ) == 'image' ) {
        return true;
    }
    return false;
}

function asadpro_logoType_text_callback() {
    if (  ( asadpro_logoType_image_upload_callback() ) == false ) {
        return true;
    }
    return false;
}

function asadpro_nav_bg_transparent_callback() {
    if ( get_theme_mod( 'asadpro_nav_bg_transparent' ) == false ) {
        return true;
    }
    return false;
}