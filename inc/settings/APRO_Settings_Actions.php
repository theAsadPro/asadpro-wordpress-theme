<?php
class APRO_Settings_Actions {
    public function __construct() {
        add_action( 'wp_ajax_asadpro_settings_action', array( $this, 'asadpro_settings_action' ) );
    }
    public function asadpro_settings_action() {

        check_ajax_referer( 'asadpro_nonce', 'verify' );

        if ( !isset( $_POST['fields'] ) ) {
            return;
        }

        $settings = $_POST['fields'];

        print_r( $settings );

        update_option( $settings['option'], $settings['value'] );

        echo 'success';

        die();
    }
}

new APRO_Settings_Actions();