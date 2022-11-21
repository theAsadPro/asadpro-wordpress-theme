<?php
wp_head();
get_header();
?>
<?php
echo '<div class="container mt-5"> Debug <hr>';

$option = get_theme_mod( 'asadpro_logoType' );
var_dump( $option );

echo '</div>';

wp_footer();
?>