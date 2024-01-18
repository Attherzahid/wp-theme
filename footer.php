<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Muslim_Matrimonial
 */
$siteUrl = get_site_url();
$themeUrl = get_template_directory_uri();
?>
</main>
<?php if(!is_page('register') || !is_page('login')) : ?>
    <footer class="footer">
        <div class="obj_footer_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big_bottom.webp" alt="" loading="lazy"></div>
        <div class="footer_top">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-9 col-xxl-8 p-0">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?php echo $siteUrl ?>" class="logo">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/logo_light.webp" alt="">
                                </a>
                                <h5 class="title">Registered By Govt Of Pakistan</h5>
                                <p class="lead">Muslim Matrimonial offers you the opportunity
                                    to simply accelerate this process by finding out
                                    which is your life partner.</p>
                                <ul class="list_social m-0">
                                    <li><a href="https://wa.me/+923486819713"><img src="<?php echo $themeUrl ?>/assets/img/webp/whatsapp.webp" alt="" loading="lazy"></a></li>
                                    <li><a href="https://www.facebook.com/MuslimMatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/facebook.webp" alt="" loading="lazy"></a></li>
                                    <li><a href="https://www.instagram.com/muslimmatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/instagram.webp" alt="" loading="lazy"></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCjJXh4Wq8t7id8LtZXzzw9A"><img src="<?php echo $themeUrl ?>/assets/img/webp/youtube.webp" alt="" loading="lazy"></a></li>
                                    <li><a href="https://www.linkedin.com/company/muslim-matrimonial/"><img src="<?php echo $themeUrl ?>/assets/img/webp/linkedin.webp" alt="" loading="lazy"></a></li>
                                    <li><a href="https://www.pinterest.com/muslimmatrimonial02/"><img src="<?php echo $themeUrl ?>/assets/img/webp/pinterest.webp" alt="" loading="lazy"></a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="mt-4 mt-md-2">
                                    <h5 class="nav_title pt-4 pt-sm-0">Useful Links</h5>
                                    <ul class="nav flex-column m-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="<?php echo $siteUrl ?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/elite-matrimoial">Elite Matrimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/personalized">Personalized Matchmaking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/event">Why Not Event</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/about-us">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/contact-us">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/why-choose-us">Why Choose Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/payment-methods">Payment Methods</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/testimonials">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $siteUrl ?>/faq">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="mt-4 mt-md-2">
                                    <h5 class="nav_title pt-4 pt-sm-0">Contact</h5>
                                    <ul class="nav flex-column m-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="mailto:info@muslimmatrimonial.com.pk">info@muslimmatrimonial.com.pk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tel:+923486819713">+92 348 6819713</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tel:02136605555">021 36605555</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://maps.app.goo.gl/FMBnhL811VohCmQu7" target="_blank">Plot no 60, Usmania Society,<br>
                                                Nazimabad, Karachi.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xxl-4 p-0">
                        <div class="alert alert-secondary mt-4 mt-lg-3 mb-0" role="alert">
                            "We here by declare that muslimmatrimonial.com.pk
                            website is not a dating website and it is strictly for
                            matrimonial purpose only."

                            <p class="lead">Marry each other for the sake of ALLAH</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <p class="text-center">© All Rights Reserved Muslim Matrimonial Powered By <a href="#">PWA</a> 2022</p>
            </div>
        </div>
        <div class="obj_ribbon"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt=""></div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/footer_background.webp" alt="" loading="lazy">
    </footer>
<?php endif; ?>


<?php wp_footer(); ?>

</body>
</html>
