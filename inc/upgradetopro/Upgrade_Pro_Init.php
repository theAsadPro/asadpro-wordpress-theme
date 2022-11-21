<?php
/**
 * asadPro customizer panel and options
 * @package asadPro
 */

class Upgrade_Pro_Init {

    public $textDomain = 'asadPro';
    public $themeName = 'AsadPro';
    public $themeUrl = 'https://asadpro.com/themes/asadpro';
    public $docUrl = 'https://asadpro.com/doc/asadpro';

    public function __construct() {
        add_action( 'customize_register', array( $this, 'APRO_Upgrade_Pro_settings' ) );
        $this->APRO_Upgrade_Pro_Instance();
    }

    public function APRO_Upgrade_Pro_Instance() {
        // Load custom sections.
        require get_template_directory() . '/inc/upgradetopro/helper-classes/APRO_Upgrade_Pro_Instance.php';
    }

    function APRO_Upgrade_Pro_settings( $wp_customize ) {

        if ( !class_exists( 'APRO_Detail_Control' ) ) {
            // Load custom sections.
            require get_template_directory() . '/inc/upgradetopro/helper-classes/APRO_Detail_Control.php';
        }

        $wp_customize->add_section( 'theme_info', array(
            'title'    => __( 'Demo & Documentation', $this->textDomain ),
            'priority' => 2,
        ) );

        /** Important Links */
        $wp_customize->add_setting( 'themeshop_theme_info',
            array(
                'default'           => '',
                'sanitize_callback' => 'wp_kses_post',
            )
        );

        $theme_info = '<p>';

        $theme_info .= sprintf( __( 'Theme Pro Demo: %1$sClick here.%2$s', $this->textDomain ), '<a href="' . esc_url( $this->themeUrl ) . '" target="_blank">', '</a>' );

        $theme_info .= '</p><p>';

        $theme_info .= sprintf( __( 'Documentation Link: %1$sClick here.%2$s', $this->textDomain ), '<a href="' . esc_url( $this->docUrl ) . '" target="_blank">', '</a>' );

        $theme_info .= '</p><p class="one-click-demo-import">';

        $theme_info .= sprintf( __( 'View Pro Version: %1$sView Details.%2$s', $this->textDomain ), '<a href="' . esc_url( $this->themeUrl ) . '" target="_blank">', '</a>' );

        $theme_info .= '</p>';

        $wp_customize->add_control( new APRO_Detail_Control( $wp_customize,
            'themeshop_theme_info',
            array(
                'section'     => 'theme_info',
                'description' => $theme_info,
            )
        )
        );

    }

}

new Upgrade_Pro_Init();