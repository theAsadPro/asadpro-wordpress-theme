<section id="our-portfolio">
    <div class="our-portfolio py-5">
        <div class="container py-3">
        <div class="text-end editSection"></div>
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="section-header" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="10"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <h4 class="subtitle"><span>Our Projects And</span></h4>
                        <h1 class="section-title">
                            The <span class="highlight">Portfolios</span>. All of them are
                            done by us.
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-6 align-self-center">
                    <p class="section-description" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="10"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        I love to share a few works showcase in this section. Projects
                        from all category like wordpress, shopify, react, Headless CMS
                        and so on.
                        <br />
                        <br />
                        You can filter categories by clicking on the navigation given
                        below.
                    </p>
                    <div class="text-start pt-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="10"
                        data-aos-easing="ease-in-out" data-aos-once="true">
                        <a href="/" class="btn btn-lg btn-danger">All Portfolios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="portfolio-overlay pb-5">
        <div class="container pb-5">
            <div class="portfolio-navigation">
                <ul class="nav justify-content-center isotope-filter-butons">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#" data-filter="*">All</a>
                    </li>
                    <?php
                        $exclude_term = get_term_by( 'slug', 'plugin', 'portfolio-type' );
                        $portfolio_taxs = get_terms( array(
                            'taxonomy'   => 'portfolio-type',
                            'hide_empty' => false,
                            'exclude'    => $exclude_term->term_id,
                            'orderby'    => 'term_id',
                            'order'      => 'ASC',
                            'number'     => 6,
                        ) );

                        foreach ( $portfolio_taxs as $terms => $item ):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter=".<?php echo $item->slug ?>"><?php echo $item->name ?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div id="portfolio-content-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50"
                data-aos-easing="ease-in-out" data-aos-once="true">
                <div class="portfolio-contents">
                    <div class="portfolio row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-30">

                    <?php
                        $args = array(
                            'post_type'      => 'portfolios',
                            'posts_per_page' => 20,
                        );

                        $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ):
                            $loop->the_post();
                            $terms = get_the_terms( get_the_ID(), 'portfolio-type' );
                        ?>
				                    <div class="col portfolio-item post-transition<?php foreach ( $terms as $term => $item ) {echo ' ' . $item->slug . ' ';}?> ">
				                        <div class="portfolio-image">
				                            <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) )?>
				                            <div class="portfolio-links">
				                                <a href="<?php the_permalink();?>" class="stretched-link">Preview</a>
				                            </div>
				                        </div>
				                    </div>

				                    <?php

                                            //endwhile
                                    endwhile;?>

                    <?php
                        // resetpostdata
                    wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>