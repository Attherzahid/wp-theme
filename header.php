<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Muslim_Matrimonial
 */
$siteUrl = get_site_url();
$themeUrl = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Fav Icon-->
    <link href="<?php echo $themeUrl ?>/assets/img/webp/fav.webp" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $themeUrl ?>/assets/img/webp/fav.webp" rel="apple-touch-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class('mb-0'); ?>>
<input type="text" value="<?php echo get_site_url() ?>" id="site-url" hidden>
<?php wp_body_open(); ?>
<div class="preloader">
    <div class="loading_bar">
        <span class="loading"></span>
    </div>
    <div class="title_wrapper">
        <img class="logo" src="<?php echo $themeUrl ?>/assets/img/webp/logo_preloader.webp" alt="">
        <h1 class="main-title text-center">Muslim Matrimonial</h1>
        <h2 class="secondary-title text-center">Find your Perfect Match the Halal way</h2>
    </div>
</div>
<?php //if(!is_page('register') || !is_page('login')) : ?>
<header class="header">
    <div class="header_top">
        <div class="container">
            <ul class="list_contact">
                <li><a href="tel:+923486819713"><img src="<?php echo $themeUrl ?>/assets/img/webp/phone.webp" alt="" loading="lazy">+92 348 6819713</a></li>
                <li><a href="mailto:info@muslimmatrimonial.com.pk"><img src="<?php echo $themeUrl ?>/assets/img/webp/envelope.webp" alt="" loading="lazy">info@muslimmatrimonial.com.pk</a></li>
            </ul>
            <ul class="list_social">
                <li><a href="https://wa.me/+923486819713"><img src="<?php echo $themeUrl ?>/assets/img/webp/whatsapp.webp" alt="" loading="lazy"></a></li>
                <li><a href="https://www.facebook.com/MuslimMatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/facebook.webp" alt="" loading="lazy"></a></li>
                <li><a href="https://www.instagram.com/muslimmatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/instagram.webp" alt="" loading="lazy"></a></li>
                <li><a href="https://www.youtube.com/channel/UCjJXh4Wq8t7id8LtZXzzw9A"><img src="<?php echo $themeUrl ?>/assets/img/webp/youtube.webp" alt="" loading="lazy"></a></li>
                <li><a href="https://www.linkedin.com/company/muslim-matrimonial/"><img src="<?php echo $themeUrl ?>/assets/img/webp/linkedin.webp" alt="" loading="lazy"></a></li>
                <li><a href="https://www.pinterest.com/muslimmatrimonial02/"><img src="<?php echo $themeUrl ?>/assets/img/webp/pinterest.webp" alt="" loading="lazy"></a></li>
            </ul>
        </div>
    </div>
    <div class="header_bottom">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="mobile_menu_wrapper">
                    <a class="navbar-brand" href="<?php echo $siteUrl ?>"><img src="<?php echo $themeUrl ?>/assets/img/webp/logo.webp" alt="" loading="lazy"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
					<?php if (is_user_logged_in()): ?>
                            <a href="<?php echo $siteUrl ?>/account" class="user_dashboard" type="button" aria-label="User Dashboard">
								<img src="<?php echo $themeUrl ?>/assets/img/webp/user_avatar.webp" alt="">
							</a>
                        <?php else: ?>
                            <a href="<?php echo $siteUrl ?>/login" class="user_dashboard" type="button" aria-label="User Dashboard">
								<img src="<?php echo $themeUrl ?>/assets/img/webp/user_avatar.webp" alt="">
							</a>
                        <?php endif; ?>
                    
                </div>
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_front_page() ? 'active' : '' ?>" aria-current="page" href="<?php echo $siteUrl ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_page('elite-matrimoial') ? 'active' : '' ?>" href="<?php echo $siteUrl ?>/elite-matrimoial">Elite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_page('personalized') ? 'active' : '' ?>" href="<?php echo $siteUrl ?>/personalized">Personalized</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_page('event') ? 'active' : '' ?>" href="<?php echo $siteUrl ?>/event">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_page('about-us') ? 'active' : '' ?>" href="<?php echo $siteUrl ?>/about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo is_page('contact-us') ? 'active' : '' ?>" href="<?php echo $siteUrl ?>/contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="more_pages" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="inner_pages">
                                <li><a class="dropdown-item" href="<?php echo $siteUrl ?>/why-choose-us">Why Choose Us</a></li>
                                <li><a class="dropdown-item" href="<?php echo $siteUrl ?>/payment-methods">Payment Methods</a></li>
                                <li><a class="dropdown-item" href="<?php echo $siteUrl ?>/testimonials">Testimonials</a></li>
                                <li><a class="dropdown-item" href="<?php echo $siteUrl ?>/faq">FAQ</a></li>
<!--                                <li><a class="dropdown-item" href="--><?php //echo $siteUrl ?><!--/blog">Blog</a></li>-->
                            </ul>
                        </li>
                    </ul>
                    <div class="btn_wrapper">
                        <?php if (is_user_logged_in()): ?>
                            <a href="<?php echo $siteUrl ?>/user" class="btn btn-outline-primary">My Account</a>
                        <?php else: ?>
                            <a href="<?php echo $siteUrl ?>/login" class="btn btn-outline-primary">Login</a>
                            <a href="<?php echo $siteUrl ?>/register" class="btn btn-primary">Sign Up</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php //endif; ?>
<main class="main">
