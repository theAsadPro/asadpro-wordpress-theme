/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

;(function ($) {
  wp.customize.bind( 'ready', function () {

    /****
    * =======================================
    * control : asadpro_nav_bg_color_control 
    * is being controlled by 
    * asadpro_nav_bg_transparent : setting
    * =======================================
    */

    // select the control (asadpro_nav_bg_color_control) 
    wp.customize.control( 'asadpro_nav_bg_color_control', function( control ) {
      // console.log(control);
      // select the setting (asadpro_nav_bg_transparent) 
      // which will manage the asadpro_nav_bg_color_control
        var setting = wp.customize( 'asadpro_nav_bg_transparent' );
        control.active.set( false === setting.get() );
        //set value on changing setting
        setting.bind( function( value ) {
            control.active.set( false === value );
        } );
    } );
    // end of item


    /****
    * =======================================
    * control : asadpro_logoType_text_control 
    * is being controlled by 
    * asadpro_logoType : setting
    * =======================================
    */

    // select the control (asadpro_logoType_text_control)
    wp.customize.control( 'asadpro_logoType_text_control', function( control ) {
      // console.log(control);
      // select the setting (asadpro_logoType) 
      // which will manage the asadpro_logoType_text_control
        var setting = wp.customize( 'asadpro_logoType' );
        control.active.set( 'text' === setting.get() );
        setting.bind( function( value ) {
          control.active.set( 'text' === value );
      } );
    } );
    // end of item


    /****
    * =======================================
    * control : asadpro_logoType_image_upload_control 
    * is being controlled by 
    * asadpro_logoType : setting
    * =======================================
    */

    // select the control (asadpro_logoType_image_upload_control)
    wp.customize.control( 'asadpro_logoType_image_upload_control', function( control ) {
      // console.log(control);
      // select the setting (asadpro_logoType) 
      // which will manage the asadpro_logoType_image_upload_control
        var setting = wp.customize( 'asadpro_logoType' );
        control.active.set( 'image' === setting.get() );
        setting.bind( function( value ) {
          control.active.set( 'image' === value );
      } );
    } );
    // end of item

    
} );
//end of control bind ready
})(jQuery);
//end of jquery function
