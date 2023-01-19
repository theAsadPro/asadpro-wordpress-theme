<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package asadPro
     */

?>

<footer>
    <?php if ( !is_page( 'contact' ) ): ?>
    <section id="contact-cta">
        <div class="contact-cta-overlay pb-5">
            <div class="container">
                <div class="contact-cta-contents">
                    <div class="section-header text-center">
                        <h1 class="section-title">Contact With Me</h1>
                        <a href="contact.html" class="btn btn-lg btn-light">Contact Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php endif;?>
    <section id="footer" class="overflow-hidden">
        <div class="footer-overlay                                   <?php if ( !is_page( 'contact' ) ): ?> pt-5<?php endif;?> " >
            <div class="container py-md-5">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <div class="logo">
                                    <a href="">
                                        <?php echo get_theme_mod( 'asadPro_F_logoText' ); ?>
                                    </a>
                                    <p>asadpro.com</p>
                                </div>
                            </div>
                            <p class="slogan">
                                Professinalism is my passion and mission. Assign me on your
                                project to test me. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolores quae aperiam labore distinctio
                                minima delectus praesentium.
                            </p>

                            <div class="copyright">
                                &copy; 2022-2023 asadpro.com, all rights reserved.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="footer-item">
                            <h2>Services</h2>
                            <div class="footer-nav">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">Wordpress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shopify</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Woocommerce</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Frontend</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="footer-item">
                            <h2>About</h2>
                            <div class="footer-nav">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Refund Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privecy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="footer-item">
                            <h2>Contact</h2>
                            <div class="footer-nav">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="icon-facebook"></i> Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="icon-skype"></i> Skype</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="icon-whatsapp"></i> Whatsapp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="mailto:asadpro.com@gmail.com?subject=Contact (asadPro)">asadpro.com@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-shopify"></i> Shopify
                    </div>
                </div>
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-wordpress"></i> Wordpress
                    </div>
                </div>
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-dribbble"></i> Dribbble
                    </div>
                </div>
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-database"></i> SQL
                    </div>
                </div>
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-behance"></i> Behance
                    </div>
                </div>
                <div class="col">
                    <div class="partner-single">
                        <i class="icon-youtube"></i> Youtube
                    </div>
                </div>
                <div class="overlay">Creator at</div>
            </div>
        </div>
    </section>
</footer>
<?php if ( get_option( 'asadpro_go_top' ) == 'on' ): ?>
<div id="go-top" class="go-down"><i class="icon-up"></i></div>
<?php endif;?>

<!---
        <div class="cookiesContent" id="cookiesPopup">
            <button class="close">✖</button>
            <img src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" alt="cookies-img" />
            <p>We use cookies for improving user experience, analytics and marketing.</p>
            <button class="accept" id="acceptcookies">It's Ok!</button>
        </div>
        --->

<?php wp_footer();?>

</body>

</html>