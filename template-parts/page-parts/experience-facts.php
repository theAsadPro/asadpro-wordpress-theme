<section id="some-facts">
    <div class="some-facts-overlay">
        <div class="container">
        <div class="text-end editSection"></div>
            <div class="section-header text-center">
                <div class="mini-title">
                    <?php if ( get_theme_mod( 'expertience_facts_mini_title_display' ) == false ): echo "";else: ?>
                        <h4 class="subtitle"><span><?php echo get_theme_mod( 'expertience_facts_section_mini_title', 'Why Me' ) ?></span></h4>
                    <?php endif;?>
                </div>
                <h1 class="section-title">
                <?php echo get_theme_mod( 'expertience_facts_section_headding', 'Some <span class="highlight">facts of me</span> to choose' ) ?>
                </h1>
            </div>
            <div class="section-description text-center">
                <?php if ( get_theme_mod( 'expertience_facts_section_desc_display' ) == false ): echo "";else: ?>
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
                EOD;?>
<?php echo apply_filters( 'the_content', get_theme_mod( 'expertience_facts_section_desc', $default ) ); ?>
<?php endif;?>
            </div>
            <div class="row">
                <div class="col-lg-4 p-md-5">
                    <div class="some-facts d-flex" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="50"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <div class="flex-shrink-0 align-self-center">
                            <div class="circle-icon text-white bg-accent-1 mt-10">
                                <i class="icon-add_task"></i>
                            </div>
                        </div>
                        <div class="some-facts-texts flex-grow ms-40">
                            <div class="h1 m-0">450+</div>
                            <div class="h6 mb-15">Successful projects</div>
                            <p class="font-size-15 m-0">
                                Almost 450+ projects are done with clients happiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-md-5">
                    <div class="some-facts d-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <div class="flex-shrink-0 align-self-center">
                            <div class="circle-icon text-white bg-accent-1 mt-10">
                                <i class="icon-sun"></i>
                            </div>
                        </div>
                        <div class="some-facts-texts flex-grow ms-40">
                            <div class="h1 m-0">7+</div>
                            <div class="h6 mb-15">Years Experience</div>
                            <p class="font-size-15 m-0">
                                I am working as a web expert from last 7+ years with huge
                                experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-md-5">
                    <div class="some-facts d-flex" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="50"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <div class="flex-shrink-0 align-self-center">
                            <div class="circle-icon text-white bg-accent-1 mt-10">
                                <i class="icon-fingerprint"></i>
                            </div>
                        </div>
                        <div class="some-facts-texts flex-grow ms-40">
                            <div class="h1 m-0">300+</div>
                            <div class="h6 mb-15">Happy Clients</div>
                            <p class="font-size-15 m-0">
                                My clients are from all over the world. (USA, Canada, UK,
                                Australia, UAE etc).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>