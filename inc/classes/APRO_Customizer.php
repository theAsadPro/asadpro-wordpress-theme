<?php
/**
 * asadPro customizer panel and options
 * @package asadPro
 */
class APRO_Customizer {
    public function __construct() {
        add_action( 'customize_register', array( $this, 'APRO_customize_settings' ) );
        $this->default_theme_mods();
    }

    public function APRO_customize_settings( $wp_customizer ) {

        $wp_customizer->add_panel( 'asadPro_settings', array(
            'priority' => 3,
            'title'    => __( 'AsadPro - Theme Settings', 'asadPro' ),
        ) );

        /**
         * @header-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'header-option.php';

        /**
         * @hero-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'hero-option.php';

        /**
         * @hero-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'hero-option-background.php';

        /**
         * @footer-option-customizer and descriptions
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'footer-option.php';

        /****
         * =======================================
         * New panel for Homepage Settings
         * =======================================
         */
        $wp_customizer->add_panel( 'asadPro_homepage_settings', array(
            'priority' => 4,
            'title'    => __( 'AsadPro - Homepage Settings', 'asadPro' ),
        ) );

        /**
         * @header-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'homepage-option.php';

        /**
         * @service-cat-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'service-cat-option.php';

        /**
         * @about-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'about-option.php';

        /**
         * @experience-facts-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'experience-facts-option.php';

        /**
         * @testimonial-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'testimonial-option.php';

        /**
         * @technology-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'technology-option.php';

        /**
         * @portfolio-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'portfolio-option.php';

        /**
         * @faqs-option-customizer
         * @package ASADPRO
         */
        require_once ASADPRO_CUSTOMIZER . 'faqs-option.php';

    }

    private function default_theme_mods() {

        // header options
        $this->mod( 'asadPro_logoText', 'Asad<span>Pro</span>' );
        $this->mod( 'asadPro_logoSlogan', 'asadpro.com' );
        $this->mod( 'asadPro_headerCta', 'Let\'s Start' );
        $this->mod( 'asadPro_headerCtaUrl', 'http://asadpro.com/contact' );
        $this->mod( 'asadPro_headerCtaUrl', 'http://asadpro.com/contact' );

        // footer options
        $this->mod( 'asadPro_F_logoText', 'Asad<span>Pro</span>' );
        $this->mod( 'asadPro_footerCta', 'Let\'s Start' );
        $this->mod( 'asadPro_footerCtaUrl', 'http://asadpro.com/contact' );

        // hero options
        $this->mod( 'asadPro_WelcomeText', 'Welcome, Do you need a professional </br>' );
        $this->mod( 'asadPro_typed1', 'Full Stack Web Devloper?' );
        $this->mod( 'asadPro_typed2', 'WP and Shopify Developer?' );
        $this->mod( 'asadPro_typed3', 'Marketing and SEO Expert?' );
        $this->mod( 'asadPro_typed4', 'I Am The Person To Help.' );
        $this->mod( 'asadPro_hero_desc', 'Now, You are in the right place. <br/> I can build your websites and web applications as.' );
        $this->mod( 'asadPro_heroCta', 'Download Resume' );
        $this->mod( 'asadPro_heroCtaUrl', 'http://asadpro.com/contact' );

    }

    public function mod( $setting_name, $value ) {
        if ( !get_theme_mod( $setting_name ) ) {
            set_theme_mod( $setting_name, $value );
        }
    }

}

new APRO_Customizer();

//add inline styles with APRO_Customizer_Color_Ctrl class
require ASADPRO_CLASS . 'APRO_Customizer_Color_Ctrl.php';

if ( get_theme_mod( 'asadpro_nav_bg_transparent' ) == true ) {
//Navbar Background Color
    set_theme_mod( 'asadpro_nav_bg_color_final', 'transparent' );
    new APRO_Customizer_Color_Ctrl(
        '#navigation-logo',
        'asadpro_nav_bg_color_final',
        'background'
    );
} else {
    //Navbar Background Color
    set_theme_mod(
        'asadpro_nav_bg_color_final',
        get_theme_mod( 'asadpro_nav_bg_color' )
    );
    new APRO_Customizer_Color_Ctrl(
        '#navigation-logo',
        'asadpro_nav_bg_color_final',
        'background'
    );
}

new APRO_Customizer_Color_Ctrl(
    '#navigation-logo #main-menu ul li a',
    'asadpro_nav_menuItem_color',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#navigation-logo #main-menu ul li:hover a',
    'asadpro_nav_menuItem_hover_color',
    'color'
);

//Solar System Background Color
new APRO_Customizer_Color_Ctrl(
    '#navigation-logo .hire-me-btn a',
    'asadpro_nav_cta_text_color',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#navigation-logo .hire-me-btn a',
    'asadpro_nav_cta_bg_color',
    'background'
);
set_theme_mod(
    'asadpro_nav_cta_border_radius',
    get_theme_mod( 'asadpro_nav_cta_border_radius' ) . 'px'
);
new APRO_Customizer_Color_Ctrl(
    '#navigation-logo .hire-me-btn a',
    'asadpro_nav_cta_border_radius',
    'border-radius'
);

//Solar System Background Color
new APRO_Customizer_Color_Ctrl(
    'header',
    'asadPro_solarSystemBG_Color',
    'background'
);
new APRO_Customizer_Color_Ctrl(
    'header #homepage',
    'asadPro_solarSystemBG_Color',
    'background'
);

//Solid Color Background Color
new APRO_Customizer_Color_Ctrl(
    '#header-bg-image .header-bg-image-overlay',
    'asadPro_heroBG_image_overlay_color',
    'background'
);
new APRO_Customizer_Color_Ctrl(
    '#header-bg-image .header-bg-image-overlay',
    'asadPro_heroBG_image_overlay_opacity',
    'opacity'
);
new APRO_Customizer_Color_Ctrl(
    '#solidColor-overlay',
    'asadPro_heroBG_solidColor',
    'background'
);

new APRO_Customizer_Color_Ctrl(
    '#homepage .homepage-welcome-text',
    'asadPro_heroBG_solidColor_text',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#homepage .homepage-welcome-text p',
    'asadPro_heroBG_solidColor_text',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#homepage .homepage-welcome-text a.btn-danger',
    'asadPro_heroBG_solidColor_text',
    'color'
);

new APRO_Customizer_Color_Ctrl(
    '#homepage #typed',
    'asadPro_heroBG_solidColor_highlight',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#homepage .typed-cursor',
    'asadPro_heroBG_solidColor_highlight',
    'color'
);
new APRO_Customizer_Color_Ctrl(
    '#homepage .homepage-welcome-text a.btn-danger',
    'asadPro_heroBG_solidColor_highlight',
    'background'
);