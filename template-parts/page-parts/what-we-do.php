<section id="what-we-do">
    <div class="what-we-do-overlay">
        <div class="container">
            <div class="text-center editSection"></div>
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6 align-self-center">
                    <div class="section-header" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="10"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <div class="mini-title">
                            <?php if ( get_theme_mod( 'whatIdo_mini_title_display' ) == false ): echo "";else: ?>

                                <h4 class="subtitle"><span><?php echo get_theme_mod( 'whatIdo_section_mini_title', 'What I Do' ) ?></span>

                            </h4>

                            <?php endif;?>

                        </div>
                        <h2 class="section-title">
                            <?php echo get_theme_mod( 'whatIdo_section_headding', 'You share your ideas. <span class="highlight"> We get it </span> done.' ) ?>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-6 align-self-center">
                    <div class="section-description" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="10"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                <?php
                    $default = <<<EOD
                            Working with shopify, wordpress are the most experienced side of
                            me and if you want more smarter solution that is API based
                            headless cms development.
                            <br />
                            <br />
                            You can turn your existion shopify or wordpress website into
                            react app or headless app with latest technologies. they will be
                            most beautiful, cross device friendly and super fast. Also I can
                            work for data visialization with MS Power BI and can also build
                            wix websites.
                        EOD;
                ?>
<?php echo apply_filters( 'the_content', get_theme_mod( 'whatIdo_section_desc', $default ) ); ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>