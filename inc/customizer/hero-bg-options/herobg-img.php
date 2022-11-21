<?php

/**
 * =======================================
 *   Settings For Image Bg -> START <-
 * =======================================
 */
$wp_customizer->add_setting( 'asadPro_heroBG_image', array(
    'default'   => 'img_link',
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_heroBG_image_control', array(
    'label'           => __( 'Select Image', 'asadPro' ),
    'section'         => 'asadPro_hero_background',
    'settings'        => 'asadPro_heroBG_image',
    'type'            => 'radio',
    'choices'         => array(
        'upload'   => __( 'Upload Image' ),
        'img_link' => __( 'Image Link' ),
    ),
    'active_callback' => 'herobg_type_image_callback',
) );

$wp_customizer->add_setting( 'asadPro_heroBG_image_upload', array(
    'default'   => __( 'Upload Image', 'asadPro' ),
    'transport' => 'refresh',
) );

$wp_customizer->add_control(
    new WP_Customize_Image_Control( $wp_customizer, 'asadPro_heroBG_image_upload_control',
        array(
            'label'           => __( 'Select Image', 'asadPro' ),
            'section'         => 'asadPro_hero_background',
            'settings'        => 'asadPro_heroBG_image_upload',
            'active_callback' => 'herobg_type_image_upload_callback',
        )
    )
);

$wp_customizer->add_setting( 'asadPro_heroBG_image_url', array(
    'default'   => 'https://images.pexels.com/photos/1629236/pexels-photo-1629236.jpeg',
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_heroBG_image_url_control', array(
    'label'           => __( 'Image URL', 'asadPro' ),
    'section'         => 'asadPro_hero_background',
    'settings'        => 'asadPro_heroBG_image_url',
    'type'            => 'url',
    'active_callback' => 'herobg_type_image_url_callback',
) );

$wp_customizer->add_setting( 'asadPro_heroBG_image_overlay_color', array(
    'default'   => '#000',
    'transport' => 'postMessage', //postMessage or refresh
    // 'type'      => 'option', // default -theme_mod
 ) );

$wp_customizer->add_control(
    new WP_Customize_Color_Control( $wp_customizer, 'asadPro_heroBG_image_overlay_color_control',
        array(
            'label'           => __( 'Background Overlay Color', 'asadPro' ),
            'section'         => 'asadPro_hero_background',
            'settings'        => 'asadPro_heroBG_image_overlay_color',
            'active_callback' => 'herobg_type_image_callback',
        )
    )
);

//opacity

$wp_customizer->add_setting( 'asadPro_heroBG_image_overlay_opacity', array(
    'default'   => '0.5',
    'transport' => 'postMessage',
) );

$wp_customizer->add_control( 'asadPro_heroBG_image_overlay_opacity_control', array(
    'label'           => __( 'Overlay Opacity', 'asadPro' ),
    'section'         => 'asadPro_hero_background',
    'settings'        => 'asadPro_heroBG_image_overlay_opacity',
    'type'            => 'range',
    'input_attrs'     => array(
        'min'  => 0.0,
        'max'  => 1.0,
        'step' => 0.025,
    ),
    'active_callback' => 'herobg_type_image_callback',
) );

/**
 * =======================================
 *    Settings For Image Bg -> END <-
 * =======================================
 */

/**
 * =======================================
 * Callbacks for Image background
 * =======================================
 */

function herobg_type_image_callback() {
    if ( herobg_type_callback() == true && get_theme_mod( 'asadPro_heroBGTypes' ) == 'image' ) {
        return true;
    }
    return false;
}

function herobg_type_image_upload_callback() {
    if ( herobg_type_image_callback() == true && get_theme_mod( 'asadPro_heroBG_image' ) == 'upload' ) {
        return true;
    }
    return false;
}

function herobg_type_image_url_callback() {
    if ( herobg_type_image_callback() == true && get_theme_mod( 'asadPro_heroBG_image' ) == 'img_link' ) {
        return true;
    }
    return false;
}