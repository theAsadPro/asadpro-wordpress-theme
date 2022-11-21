<section id="homepage">
    <div class="homepage-overlay">
        <div class="container">
            <div class="text-center editSection"></div>
            <div class="homepage-welcome-text">
                <div class="col-auto text-<?php echo get_theme_mod( 'asadpro_hero_text_align', 'center' ) ?>">
                    <h1 class="display-3">
                        <span id="primary"><?php echo get_theme_mod( 'asadPro_WelcomeText' ) ?></span> <span
                            id="typed"></span>
                    </h1>
                    <p>
                        <?php echo get_theme_mod( 'asadPro_hero_desc' ); ?>
                    </p>
                    <a href="<?php echo esc_url( get_theme_mod( 'asadPro_heroCtaUrl' ) ); ?>"
                        class="btn btn-lg btn-danger"><?php esc_html_e( get_theme_mod( 'asadPro_heroCta' ) );?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="solidColor-overlay"></div>