<?php
    class APRO_Detail_Control extends WP_Customize_Control {

    public function render_content() {?>
<span class="customize-control-title">
    <?php echo wp_kses_post( $this->label ); ?>
</span>

<?php if ( $this->description ) {?>
<span class="description customize-control-description">
    <?php echo wp_kses_post( $this->description ); ?>
</span>
<?php }
    }
}