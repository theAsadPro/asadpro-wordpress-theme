<?php
    // Settings Page: AsadProOptions
    // Retrieving values: get_option( 'your_field_id' )
    class APRO_Options {

        public function __construct() {
            add_action( 'admin_menu', array( $this, 'asadpro_settings_page_menu' ) );
            $this->settings_scripts();
            $this->settings_save();
        }

        public function settings_scripts() {
            //init assests
            require_once ASADPRO_SETTINGS . 'APRO_Settings_Scripts.php';
        }

        public function settings_save() {
            //save settings
            require_once ASADPRO_SETTINGS . 'APRO_Settings_Actions.php';
        }

        public function asadpro_settings_page_menu() {

            global $asadpro_settings_page;

            $page_title = 'Theme Option - AsadPro';
            $menu_title = 'AsadPro Options';
            $capability = 'manage_options';
            $slug = 'asadpro_option';
            $callback = array( $this, 'display_settings_content_callback' );
            $icon = 'dashicons-shield';
            $position = 99;

            $asadpro_settings_page = add_menu_page(
                $page_title,
                $menu_title,
                $capability,
                $slug,
                $callback,
                $icon,
                $position
            );

            return $asadpro_settings_page;
        }

    public function display_settings_content_callback() {?>
<div class="wrap">
    <h1>AsadPro Options</h1>
    <h2>Welcome to theme option of asadpro Theme</h2>
    <hr>
    <!-- <h3>Header Options</h3> -->
    <h2><span class="dashicons dashicons-align-full-width"></span> Desktop Settings</h2>
    <hr>
    <table class="form-table" role="presentation">
        <tbody>
            <?php
                /****
                     * @setting_mouse_follow
                     * @package asadPro
                     */
                        require_once ASADPRO_SETTINGS . 'setting_mouse_follow.php';
                        /****
                         * @setting_go_to_top
                         * @package asadPro
                         */
                        require_once ASADPRO_SETTINGS . 'setting_go_to_top.php';
                        /****
                         * @setting_navigation
                         * @package asadPro
                         */
                        require_once ASADPRO_SETTINGS . 'setting_navigation.php';
                    ?>

        </tbody>
    </table>
    <hr>
    <table class="form-table" role="presentation">
        <tbody>
            <tr>
                <th scope="row" style="font-size:20px">Mobile Settings</th>
                <td></td>
            </tr>
            <?php
                /****
                         * @setting_mouse_follow.php
                         * @package asadPro
                         */
                        require_once ASADPRO_SETTINGS . 'mob_setting_mouse_follow.php';
                        /****
                         * @setting_mouse_follow.php
                         * @package asadPro
                         */
                        require_once ASADPRO_SETTINGS . 'mob_setting_go_to_top.php';
                    ?>
        </tbody>
    </table>

    <!---
    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
    </p>
    --->

</div>

<?php
    }

}
new APRO_Options();