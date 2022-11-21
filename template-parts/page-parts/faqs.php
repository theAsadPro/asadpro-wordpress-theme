<section id="faqs">
    <div class="faqs-wrap">
        <div class="container py-4">
        <div class="text-end editSection"></div>
            <div class="section-header text-center pb-5">
                <h4 class="subtitle"><span>Frequently Asked Questions</span></h4>
                <h1 class="section-title">FAQ</h1>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <!-- FAQ Item start -->
                <?php
                    $args = array(
                        'post_type'     => 'faqs',
                        'post_per_page' => '5',
                    );

                    $qry = new WP_Query( $args );
                    $num = 0;
                    while ( $qry->have_posts() ):
                        $num++;
                        $qry->the_post();
                    ?>
	                <div class="accordion-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50"
	                    data-aos-easing="ease-in-out" data-aos-once="true">

	                    <h2 class="accordion-header" id="flush-heading<?php echo $num; ?>">
	                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
	                            data-bs-target="#flush-collapse<?php echo $num; ?>" aria-expanded="false"
	                            aria-controls="flush-collapse<?php echo $num; ?>">
	                            <?php esc_html_e( the_title() );?>
	                        </button>
	                    </h2>
	                    <div id="flush-collapse<?php echo $num; ?>" class="accordion-collapse collapse"
	                        aria-labelledby="flush-heading<?php echo $num; ?>" data-bs-parent="#accordionFlushExample">
	                        <div class="accordion-body">
	                            <?php esc_html_e( the_content() );?>
	                        </div>
	                    </div>

	                </div>
	                <?php endwhile;?>
                <!-- FAQ Item End -->
            </div>
        </div>
    </div>
</section>