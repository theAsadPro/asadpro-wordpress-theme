<?php

/**
 * =======================================
 *   Settings For Image Bg -> START <-
 * =======================================
 */

$wp_customizer->add_setting( 'asadPro_heroBG_video_url', array(
    'default'   => 'https://images.pexels.com/photos/1629236/pexels-photo-1629236.jpeg',
    'transport' => 'refresh',
) );

$wp_customizer->add_control( 'asadPro_heroBG_video_url_control', array(
    'label'           => __( 'Video URL', 'asadPro' ),
    'section'         => 'asadPro_hero_background',
    'settings'        => 'asadPro_heroBG_video_url',
    'type'            => 'url',
    'active_callback' => 'herobg_type_video_callback',
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

function herobg_type_video_callback() {
    if ( herobg_type_callback() == true && get_theme_mod( 'asadPro_heroBGTypes' ) == 'video' ) {
        return true;
    }
    return false;
}