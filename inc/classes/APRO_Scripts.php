<?php
class APRO_Scripts {
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'asadpro_scripts' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'asadpro_customize_controls_enqueue_scripts' ) );
        add_action( 'customize_preview_init', array( $this, 'asadpro_customize_preview_init' ) );
    }

    public function asadpro_scripts() {
        /**
         * =======================================
         * Initialize Theme CSS Files
         * =======================================
         */
        $this->script_css( 'asadpro-bootstrap', ASADPRO_ASSETS_LIB . 'bootstrap/css/bootstrap.min.css', array() );
        $this->script_css( 'asadpro-aos', ASADPRO_ASSETS_PLUGIN . 'aos/aos.css', array() );
        $this->script_css( 'asadpro-swiper', ASADPRO_ASSETS_PLUGIN . 'swiper/swiper-bundle.min.css', array() );
        $this->script_css( 'asadpro-custom-fonts', ASADPRO_FONTS . 'custom-fonts.css', array() );
        $this->script_css( 'asadpro-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap', array() );
        $this->script_css( 'asadpro-icons', ASADPRO_ASSETS_LIB . 'asadPro-icons.css', array() );
        $this->script_css( 'asadpro-solar-system', ASADPRO_CSS . 'solar-system.min.css', array() );

        wp_enqueue_style( 'asadpro-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'asadpro-style', 'rtl', 'replace' );
        $this->script_css( 'asadpro-theme-style', ASADPRO_THEME_DIR . 'style-asadpro.css', array( 'asadpro-style' ) );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        /**
         * =======================================
         * Initialize Theme Javascript Files
         * =======================================
         */

        $this->script_js_head( 'asadpro-aos', ASADPRO_ASSETS_PLUGIN . 'aos/aos.js', array() );
        $this->script_js( 'asadpro-popper', ASADPRO_ASSETS_PLUGIN . 'popper/popper.min.js', array() );
        $this->script_js( 'asadpro-bootstrap', ASADPRO_ASSETS_LIB . 'bootstrap/js/bootstrap.min.js', array() );

        //mouse circle follow
        $this->script_css( 'asadpro-mouse-circle', ASADPRO_ASSETS_PLUGIN . 'mouse-circle/mouse-circle.css', array() );
        $this->script_js_head( 'asadpro-mouse-circle', ASADPRO_ASSETS_PLUGIN . 'mouse-circle/mouse-circle.js', array() );

        $this->script_js_head( 'asadpro-cookie-banner-config', ASADPRO_JS . 'config.cookie.banner.js', array() );
        // $this->script_js( 'smooth-scrollbar', ASADPRO_ASSETS_PLUGIN . 'smooth-scrollbar/smooth-scrollbar.js', array() );
        // $this->script_js( 'config.smooth-scrollbar', ASADPRO_JS . 'config.smooth-scrollbar.js', array( 'smooth-scrollbar' ) );

        //go top
        $this->script_js_head( 'asadpro-gotop', ASADPRO_ASSETS_PLUGIN . 'go-top/config.gotop.js', array() );
        $this->script_css( 'asadpro-gotop', ASADPRO_ASSETS_PLUGIN . 'go-top/gotop.css', array() );

        //typed js
        $this->script_js_head( 'asadpro-typed', ASADPRO_ASSETS_PLUGIN . 'typed/typed.js', array() );
        $this->script_js_head( 'asadpro-typed-config', ASADPRO_JS . 'config.typed.js', array( 'asadpro-typed' ) );

        // config animations
        $this->script_js_head( 'asadpro-config-animations', ASADPRO_JS . 'config.animations.js', array( 'asadpro-aos' ) );

        //portfolio isotope filter
        $this->script_js( 'asadpro-isotope', ASADPRO_ASSETS_PLUGIN . 'isotope/isotope.pkgd.min.js', array() );
        $this->script_js( 'asadpro-isotope-config', ASADPRO_JS . 'config.isotope.portfolio.js', array( 'asadpro-isotope' ) );

        //swiper Slider
        $this->script_js( 'asadpro-swiper', ASADPRO_ASSETS_PLUGIN . 'swiper/swiper-bundle.min.js', array() );
        $this->script_js( 'asadpro-swiper-config', ASADPRO_JS . 'config.swiper.js', array( 'asadpro-swiper' ) );

        //main js
        $this->script_js( 'asadpro-main', ASADPRO_JS . 'main.js', array() );

        /**
         * =======================================
         * Localize Typed texts from customizer
         * =======================================
         */
        wp_localize_script( 'asadpro-typed-config', 'heroTyped', $this->customizerData() );

    }

    /**
     * =======================================
     * Get Data from customizer and make an
     * array/object to localize
     * =======================================
     */
    public function customizerData() {

        return array(
            'one'   => esc_html( get_theme_mod( 'asadPro_typed1' ) ),
            'two'   => esc_html( get_theme_mod( 'asadPro_typed2' ) ),
            'three' => esc_html( get_theme_mod( 'asadPro_typed3' ) ),
            'four'  => esc_html( get_theme_mod( 'asadPro_typed4' ) ),
        );
    }

    function asadpro_customize_controls_enqueue_scripts() {
        if ( class_exists( 'APRO_Customizer' ) ) {

            $this->script_js( 'asadpro-customizer-control', ASADPRO_JS . 'customizer.control.js', array( 'jquery', 'customize-preview' ) );
        }
    }

    function asadpro_customize_preview_init() {
        if ( class_exists( 'APRO_Customizer' ) ) {
            $this->script_js( 'asadpro-customizer', ASADPRO_JS . 'customizer.js', array( 'jquery', 'customize-preview' ) );
        }
    }

    public function script_css( $handler, $path, $dep ) {
        wp_enqueue_style( $handler, $path, $dep, _S_VERSION, 'all' );

    }

    public function script_js_head( $handler, $path, $dep ) {
        wp_enqueue_script( $handler, $path, $dep, _S_VERSION, false );
    }

    public function script_js( $handler, $path, $dep ) {
        wp_enqueue_script( $handler, $path, $dep, _S_VERSION, true );
    }

}
new APRO_Scripts();