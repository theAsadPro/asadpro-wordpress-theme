<?php
    /**
     * The main template file
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package asadPro
     */

    get_header();
    if ( get_theme_mod( 'whatIdo_display_section' ) == true ) {
        get_template_part( 'template-parts/page-parts/what-we-do' );
    }

    //display this section on or off
    if ( get_theme_mod( 'serice_cat_display_section' ) == true ) {
        get_template_part( 'template-parts/page-parts/services' );
    }

    get_template_part( 'template-parts/page-parts/about' );

    //display this section on or off
    if ( get_theme_mod( 'expertience_facts_display_section' ) == true ) {
        get_template_part( 'template-parts/page-parts/experience-facts' );
    }

    //display this section on or off
    if ( get_theme_mod( 'testimonial_display_section' ) == true ) {
        get_template_part( 'template-parts/page-parts/testimonial' );
    }

    get_template_part( 'template-parts/page-parts/technology' );
    get_template_part( 'template-parts/page-parts/portfolio' );
    get_template_part( 'template-parts/page-parts/faqs' );
?>

<?php
// get_sidebar();
get_footer();