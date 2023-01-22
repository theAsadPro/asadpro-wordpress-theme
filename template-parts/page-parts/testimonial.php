<section id="testimonial">
<div class="text-center editSection"></div>
    <div class="testimonial-overlay">
        <div class="container" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="50"
            data-aos-easing="ease-in-out" data-aos-once="true">
            <div id="testimonial-slider-wrapper" class="testimonial-slider-wrapper">
                <div class="testimonial-slider">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                                $args = array(
                                    'post_type'     => 'testimonials',
                                    'post_per_page' => 10,
                                );
                                $qry = new WP_Query( $args );

                                while ( $qry->have_posts() ):
                                    $qry->the_post();
                                ?>

						                            <!-- Slider Item Start -->
						                            <div class="swiper-slide">
						                                <div class="testimonial-slider-item">
						                                    <div class="testimonial-slider-inside">
						                                        <div class="testimonial-slider-title">
						                                            <h3><?php the_title();?></h3>
						                                            <div class="rating">
						                                                <?php
                                                                                $str = '<i class="icon-star-full"></i> ';
                                                                                $meta = get_post_meta( $post->ID, 'rating', true );
                                                                                echo str_repeat( $str, $meta );
                                                                            ?>
						                                            </div>
						                                        </div>
						                                        <div class="row justify-content-md-center">
						                                            <div class="col col-lg-8">
						                                                <div class="testimonial-slider-client">
						                                                    <?php the_post_thumbnail( 'thumbnail' );?>
						                                                </div>
						                                                <div class="testimonial-slider-content">
						                                                    <?php the_content();?>
						                                                    <h4>
						                                                        <?php
                                                                                        $meta = get_post_meta( $post->ID, 'client', true );
                                                                                        echo $meta;
                                                                                    ?>
						                                                    </h4>
						                                                </div>
						                                            </div>
						                                            <div class="col-md-auto">
						                                                <div class="testimonial-slider-footer">
						                                                    <div class="location">
						                                                        <i class="icon-home_pin"></i>
						                                                        <?php
                                                                                        $meta = get_post_meta( $post->ID, 'country', true );
                                                                                        echo $meta;
                                                                                    ?>
						                                                    </div>
						                                                    <div class="project_age">
						                                                        <?php
                                                                                        $meta = get_post_meta( $post->ID, 'date_year', true );
                                                                                        echo $meta;
                                                                                    ?>
						                                                    </div>
						                                                </div>
						                                            </div>
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                            <!-- Slider Item End -->
						                            <?php endwhile;?>
                            <!-- Slider Item Start -->
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <div class="testimonial-slider-shape">
                        <img src="<?php echo ASADPRO_IMG ?>testimonial-shape.png" alt="testimonial-shape.png" />
                    </div>
                </div>
                <div class="testimonial-slider-navigation">
                    <a href="" class="swiper-button-prev"><i class="icon-arrow_left"></i></a>
                    <a href="" class="swiper-button-next"><i class="icon-arrow_right"></i></a>
                </div>
            </div>
            <div class="text-center pt-5">
                <a href="<?php echo esc_url( get_theme_mod( 'testimonial_cta_url', '#' ) ) ?>" type="button" id="testimonial-cta" class="btn btn-lg btn-danger">
                    <?php echo get_theme_mod( 'testimonial_cta_text', 'More Reviews' ) ?>
                </a>
            </div>
        </div>
    </div>
</section>