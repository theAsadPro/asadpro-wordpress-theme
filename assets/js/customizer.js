/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

;(function ($) {

  wp.customize("asadpro_nav_bg_transparent", function (value) {
    value.bind(function (newVal) {
      console.log(newVal);
      var finalColor = wp.customize('asadpro_nav_bg_color');
      // console.log(finalColor.get());
      if( newVal==false ) {
        $("#navigation-logo").css( 'background' , finalColor.get());
          //Navbar background
          wp.customize("asadpro_nav_bg_color", function (value) {
            value.bind(function (newVal) {
              $("#navigation-logo").css( 'background' , newVal);
            });
          });
      } else {
        $("#navigation-logo").css( 'background' , 'transparent');
      }
    });
  });

  wp.customize("asadpro_nav_menuItem_hover_color", function (value) {
    value.bind(function (newVal) {
      var mainColor = wp.customize('asadpro_nav_menuItem_color');
      // console.log(finalColor.get());

      $("#navigation-logo #main-menu ul li a").mouseover(function () {
        $(this).css('color', newVal);
      });
      
      $("#navigation-logo #main-menu ul li a").mouseout(function () {
        $(this).css('color', mainColor.get());
      });

    });
  });

 //logo text
  wp.customize("asadpro_logoType_text", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .logo a").html( newVal);
    });
  });

 //Menu Item Color
  wp.customize("asadpro_nav_menuItem_color", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo #main-menu ul li a").css( 'color' , newVal);
    });
  });

  //homepage settings
  /**
  * =======================================
  * What i do settings
  * =======================================
  */
wp.customize("whatIdo_display_section", function (value) {
  value.bind(function (newVal) {
    if (newVal == false) {
      $("#what-we-do").css('display', 'none');        
    } else {
      $("#what-we-do").css('display', 'block');
    }
  });
});
  

wp.customize("whatIdo_mini_title_display", function (value) {
  value.bind(function (newVal) {
    var setting = wp.customize('whatIdo_section_mini_title');
    if (newVal == true) {        
      $("#what-we-do .mini-title").html('<h4 class="subtitle"><span>' + setting.get() + '</span></h4>');
      $("#what-we-do .mini-title").css('display', 'block');
    } else {      
      $("#what-we-do .mini-title").css('display', 'none');
      }
    });
});
  
wp.customize("whatIdo_section_mini_title", function (value) {
    value.bind(function (newVal) {
      $("#what-we-do .subtitle span").text(newVal);
    });
  });

  wp.customize("whatIdo_section_headding", function (value) {
    value.bind(function (newVal) {
      $("#what-we-do .section-title").html(newVal);
    });
  });

  wp.customize("whatIdo_section_desc", function (value) {
    value.bind(function (newVal) {
      $("#what-we-do .section-description").html(newVal);
    });
  });
  
/**
* =======================================
* Header CTA Button
* =======================================
*/
  wp.customize("asadPro_headerCta", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .hire-me-btn a").text(newVal);
    });
  });

  wp.customize("asadPro_headerCtaUrl", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .hire-me-btn a").attr("href", newVal);
    });
  });

  wp.customize("asadpro_nav_cta_text_color", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .hire-me-btn a").css("color", newVal);
    });
  });
  
  wp.customize("asadpro_nav_cta_bg_color", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .hire-me-btn a").css("background", newVal);
    });
  });
  
  wp.customize("asadpro_nav_cta_border_radius", function (value) {
    value.bind(function (newVal) {
      $("#navigation-logo .hire-me-btn a").css("border-radius", newVal+'px');
    });
  });



  /**
  * =======================================
  * Hero Section
  * =======================================
  */
  wp.customize("asadPro_WelcomeText", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text h1 #primary").html(newVal);
    });
  });
  
  //hero text align
  wp.customize("asadpro_hero_text_align", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text div.col-auto").attr('class', 'col-auto text-'+ newVal);
    });
  });

  wp.customize("asadPro_hero_desc", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text p").html(newVal);
    });
  });

  wp.customize("asadPro_heroCta", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text a.btn").text(newVal);
    });
  });

  wp.customize("asadPro_heroCtaUrl", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text a.btn").attr("href", newVal);
    });
  });

  //background solid color
  wp.customize("asadPro_heroBG_solidColor", function (value) {
    value.bind(function (newVal) {
      $("#solidColor-overlay").css("background", newVal);
    });
  });

  //solar system background color
  wp.customize("asadPro_solarSystemBG_Color", function (value) {
    value.bind(function (newVal) {
      $("header").css("background", newVal);
      $("header #homepage").css("background", newVal);
    });
  });

  //background image overlay color
  wp.customize("asadPro_heroBG_image_overlay_color", function (value) {
    value.bind(function (newVal) {
      $("#header-bg-image .header-bg-image-overlay").css("background", newVal);
    });
  });
  
  //background image overlay opacity
  wp.customize("asadPro_heroBG_image_overlay_opacity", function (value) {
    value.bind(function (newVal) {
      $("#header-bg-image .header-bg-image-overlay").css("opacity", newVal);
    });
  });  

  //text color
  wp.customize("asadPro_heroBG_solidColor_text", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text").css("color", newVal);
    });
  });

  //text color
  wp.customize("asadPro_heroBG_solidColor_text", function (value) {
    value.bind(function (newVal) {
      $("#homepage .homepage-welcome-text").css("color", newVal);
      $("#homepage .homepage-welcome-text p").css("color", newVal);
      $("#homepage .homepage-welcome-text a.btn-danger").css("color", newVal);
    });
  });
  
  //Highlight Brand Color
  wp.customize("asadPro_heroBG_solidColor_highlight", function (value) {
    value.bind(function (newVal) {
      $("#homepage #typed").css("color", newVal);
      $("#homepage .typed-cursor").css("color", newVal);
      $("#homepage .homepage-welcome-text a.btn-danger").css("background", newVal);
    });
  });

  //Navigation Align
  wp.customize("asadpro_nav_align", function (value) {
    value.bind(function (newVal) {
      $("#primary-menu").attr("class", 'nav justify-content-lg-'+ newVal +' justify-content-md-end justify-content-sm-center');
    });
  });


  /**
  * =======================================
  * What I do section
  * =======================================
  */
  



  //end
})(jQuery);
