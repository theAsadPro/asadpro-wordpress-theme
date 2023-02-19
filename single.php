<?php
    /**
     * The template for displaying all single posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package asadPro
     */

    get_header();
    if ( !is_home() || !is_front_page() ):
?>
	<section id="breadcrumb">
		<div class="container py-3">
		<span id="breadcrumb-headding" class="display-3 mb-4">Blog</span>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php wp_title( '' );?></li>
				</ol>
			</nav>
		</div>
	</section>
	<?php endif;?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <main id="primary-content" class="site-main">

		<?php
            while ( have_posts() ):
                the_post();

                get_template_part( 'template-parts/default/content', get_post_type() );

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'asadpro' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'asadpro' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );
                /****
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ):
            comments_template();
            endif;
             **/
            endwhile; // End of the loop.
        ?>

	</main><!-- #main -->
	</div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>