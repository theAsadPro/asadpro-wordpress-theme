<?php
class APRO_Settings_Scripts {
    public function __construct() {
        add_action( 'admin_enqueue_scripts', array( $this, 'asadpro_settings_scripts' ) );
        add_action( 'wp_print_styles', array( $this, 'remove_css' ) );
        add_action( 'wp_print_scripts', array( $this, 'remove_js' ) );

    }
    public function asadpro_settings_scripts( $screen ) {

        if ( 'toplevel_page_asadpro_option' != $screen ) {
            return;
        }

        $this->admin_js( 'asadpro_settings_script', ASADPRO_JS . 'admin.asadpro.settings.js', array( 'jquery' ) );
        $this->admin_css( 'asadpro_settings_style', ASADPRO_CSS . 'admin.asadpro.settings.css', array() );

        $this->admin_js( 'asadpro_settings_toastify', ASADPRO_ASSETS_PLUGIN . 'toastify/toastify.js', array() );
        $this->admin_css( 'asadpro_toastify_style', ASADPRO_ASSETS_PLUGIN . 'toastify/toastify.css', array() );

        $this->admin_css( 'asadpro_on_off_style', ASADPRO_ASSETS_PLUGIN . 'toggle-switch/toggle-switch.css', array() );

        wp_localize_script( 'asadpro_settings_script', 'APRO_OPT_SET', $this->adminAjaxData() );
    }

    public function admin_css( $handler, $path, $dep ) {
        wp_register_style( $handler, $path, $dep, _S_VERSION, 'all' );
        wp_enqueue_style( $handler );

    }

    public function admin_js( $handler, $path, $dep ) {
        wp_register_script( $handler, $path, $dep, _S_VERSION, true );
        wp_enqueue_script( $handler );
    }

    public function remove_css() {

        if ( get_option( 'asadpro_mouse_follow' ) != 'on' ) {
            wp_dequeue_style( 'asadpro-mouse-circle' );
        }

        if ( get_option( 'asadpro_go_top' ) != 'on' ) {
            wp_dequeue_style( 'asadpro-gotop' );
        }
    }
    public function remove_js() {

        if ( get_option( 'asadpro_mouse_follow' ) != 'on' ) {
            wp_dequeue_script( 'asadpro-mouse-circle' );
        }

        if ( get_option( 'asadpro_go_top' ) != 'on' ) {
            wp_dequeue_script( 'asadpro-gotop' );
        }
    }

    /**
     * =======================================
     * create nounce and secure ajax
     * =======================================
     */

    private function adminAjaxData() {
        //create a nounce
        $nource = wp_create_nonce( 'asadpro_nonce' );

        //return array object
        return array(
            'secure_url'   => admin_url( 'admin-ajax.php' ),
            'verification' => $nource,
        );
    }
}
new APRO_Settings_Scripts();