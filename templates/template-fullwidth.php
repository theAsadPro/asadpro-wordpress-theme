<?php
/**
 * Template Name: Full Width Template
 * Template Post Type: post, page
 *
 * @subpackage asadPro
 * @since asadPro 1.0
 */

get_header();

if ( have_posts() ):

    while ( have_posts() ):
        the_post();
        the_content();
    endwhile;
endif;

get_footer();