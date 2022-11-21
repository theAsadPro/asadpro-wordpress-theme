<?php
class APRO_Customizer_Color_Ctrl {

    public $html_selector;
    public $theme_mod_id;
    public $style_property;

    public function __construct( $html_selector, $theme_mod_id, $style_property ) {

        $this->html_selector = $html_selector;
        $this->theme_mod_id = $theme_mod_id;
        $this->style_property = $style_property;
        $this->style_value = get_theme_mod( $this->theme_mod_id );

        add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );

    }

    public function load_styles() {
        $final_style = <<<EOD
                            {$this->html_selector} {
                                    {$this->style_property}: {$this->style_value};
                                }
                            EOD;
        wp_add_inline_style( 'asadpro-theme-style', $final_style );
    }
}
// new customizer_color_ctrl();