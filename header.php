<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package asadPro
     */

?>
<!doctype html>
<html                                    <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>

<body                                    <?php body_class();?>>
    <?php wp_body_open();?>

    <?php if ( get_option( 'asadpro_mouse_follow' ) == 'on' ): ?>
    <div id="mouse-follow">
        <div class="mouse-circle-fill"></div>
        <div class="mouse-circle-outline"></div>
    </div>
    <?php endif;?>

    <header                                                                   <?php if ( !is_home() || !is_front_page() ): ?> style="min-height: auto;"<?php endif;?>>
        <section id="navigation-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="logo d-flex justify-content-sm-center">

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php
                                    if ( get_theme_mod( 'asadpro_logoType' ) == 'text' ):
                                        echo get_theme_mod( 'asadpro_logoType_text', 'Asad<span>Pro</span>' );
                                    else:
                                ?>
                                <img src="<?php echo get_theme_mod( 'asadpro_logoType_image_upload' ) ?>" alt="" />
                                <?php endif;?>
                            </a>
                            <p>asadpro.com</p>
                        </div>
                    </div>
                    <?php
                        $navColm = ( get_theme_mod( 'asadPro_headerCtaDisplay', true ) ? 'col-lg-8' : 'col-lg-10' );
                    ?>
                    <div class="<?php echo $navColm; ?> col-md-9 col-sm-12">
                        <nav id="main-menu">
                            <?php
                                if ( get_option( 'asadpro_nav_align' ) ) {
                                    $menuClass = get_option( 'asadpro_nav_align' );
                                }
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                        'container'      => 'ul',
                                        'menu_class'     => 'nav justify-content-lg-' . $menuClass . ' justify-content-md-end justify-content-sm-center',
                                    )
                                );

                            ?>
                        </nav>
                    </div>

                    <?php if ( get_theme_mod( 'asadPro_headerCtaDisplay', true ) ): ?>
                    <div class="col-md-2 col-sm-12 d-md-none d-sm-block d-lg-block">
                        <div class="hire-me-btn text-center">
                            <a href="<?php echo esc_url( get_theme_mod( 'asadPro_headerCtaUrl' ) ) ?>"
                                class="btn btn-danger">
                                <?php esc_html_e( get_theme_mod( 'asadPro_headerCta' ) )?></a>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
        <?php if ( is_home() || is_front_page() ):

                $option = get_theme_mod( 'asadPro_heroBg' );

                if ( $option == true ) {

                    get_template_part( 'template-parts/homepage-hero-parts/default' );

                } else {

                    $option = get_theme_mod( 'asadPro_heroBGTypes' );

                    switch ( $option ) {

                    case 'image':
                        get_template_part( 'template-parts/homepage-hero-parts/image' );
                        break;

                    case 'video':
                        get_template_part( 'template-parts/homepage-hero-parts/video' );
                        break;

                    case 'solid_color':
                        get_template_part( 'template-parts/homepage-hero-parts/solid-color' );
                        break;

                    default:
                        get_template_part( 'template-parts/homepage-hero-parts/default' );
                        break;
                    }
                }

        endif;?>
    </header>