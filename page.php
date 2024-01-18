<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Muslim_Matrimonial
 */

get_header();
$siteUrl = get_site_url();
$themeUrl = get_template_directory_uri();
?>



<?php
if (is_front_page()) : ?>
    <section class="hero">
        <video muted autoplay loop playsinline poster="<?php echo $themeUrl ?>/assets/img/webp/sections_background/hero_poster.webp">
            <source data-src="<?php echo $themeUrl ?>/assets/video/mp4/main.mp4">
            <source data-src="<?php echo $themeUrl ?>/assets/video/webm/main.webm">
        </video>
        <ul class="list_video_controls">
            <li>
                <button type="button" aria-label="First Video" data-time="0"></button>
            </li>
            <li>
                <button type="button" aria-label="Second Video" data-time="30"></button>
            </li>
            <li>
                <button type="button" aria-label="Third Video" data-time="50"></button>
            </li>
            <button type="button" aria-label="Last Pill" disabled="true"></button>
        </ul>
        <div class="obj_ribbon_s3">
            <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
            <div>
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <h1 class="main-title text-center text-white" data-aos="fade-up">Foreign Qualified Proposals</h1>
                    <p class="lead text-center text-white" data-aos="fade-up" data-aos-delay="200">Find your ideal match at Muslim Matrimonial - where professionally qualified profiles are carefully verified. Discover love's true match at Muslim Matrimonial: Verified, qualified profiles for your perfect union.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="form_wrapper" data-aos="fade-up" data-aos-delay="300">
                        <form action="proposals/">
                            <fieldset>
                                <legend class="m-0 pb-3">I am looking for</legend>
                                <div class="form-radio_wrapper">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" checked>
                                        <label class="form-check-label" for="gender_male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                                        <label class="form-check-label" for="gender_female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="m-0 pb-3">Select Education</legend>
                                <div class="form-radio_wrapper">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_MBBS" value="MBBS" checked>
                                        <label class="form-check-label" for="education_MBBS">
                                            MBBS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_BDS" value="BDS">
                                        <label class="form-check-label" for="education_BDS">
                                            BDS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_CA" value="CA">
                                        <label class="form-check-label" for="education_CA">
                                            CA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_ACCA" value="ACCA">
                                        <label class="form-check-label" for="education_ACCA">
                                            ACCA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_Engineer" value="Engineer">
                                        <label class="form-check-label" for="education_Engineer">
                                            Engineer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_PHD" value="PHD">
                                        <label class="form-check-label" for="education_PHD">
                                            PHD
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_MBA" value="MBA">
                                        <label class="form-check-label" for="education_MBA">
                                            MBA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="education" id="education_MPhil" value="MPhil">
                                        <label class="form-check-label" for="education_MPhil">
                                            MPhil
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-secondary ms-auto">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="">
    </section>
    <section class="case_category">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h1 class="main-title text-center" data-aos="fade-up">Elevate Your Journey with Muslim Matrimonial</h1>
                    <img class="title_separator" src="<?php echo $themeUrl ?>/assets/img/webp/separator.webp" alt="" data-aos="zoom-in">
                    <p class="lead text-center mb-0" data-aos="fade-up" data-aos-delay="200">Our platform is dedicated to facilitating meaningful connections for those seeking a life partner within the Muslim community. With a commitment to verified profiles and compatibility, we ensure your path to a harmonious union is exceptional and uplifting. Join us today and embark on your unique matrimonial journey!</p>
                </div>
            </div>
            <div class="mt-5 pt-4 pt-lg-5 position-relative tab_content_wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center text-lg-start mb-5">
                            <h2 class="secondary-title" data-aos="fade-up">Information 1 of 4</h2>
                            <div class="nav flex-column nav-pills me-md-3 align-items-center align-items-lg-start" id="case_category_tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-tab-1" data-bs-toggle="pill" data-bs-target="#case_category_content_1" type="button" role="tab" aria-controls="case_category_content_1" aria-selected="true" data-aos="fade-right">1. Case Classifications</button>
                                <button class="nav-link" id="v-pills-tab-2" data-bs-toggle="pill" data-bs-target="#case_category_content_2" type="button" role="tab" aria-controls="case_category_content_2" aria-selected="false" data-aos="fade-right" data-aos-delay="100">2. Worldwide Segments</button>
                                <button class="nav-link" id="v-pills-tab-3" data-bs-toggle="pill" data-bs-target="#case_category_content_3" type="button" role="tab" aria-controls="case_category_content_3" aria-selected="false" data-aos="fade-right" data-aos-delay="200">3. Cast Divisions</button>
                                <button class="nav-link" id="v-pills-tab-4" data-bs-toggle="pill" data-bs-target="#case_category_content_4" type="button" role="tab" aria-controls="case_category_content_4" aria-selected="false" data-aos="fade-right" data-aos-delay="300">4. Expert Counselors</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content h-100" id="case_category_content" data-aos="zoom-in" data-aos-delay="400">
                            <div class="tab-pane fade h-100 show active" id="case_category_content_1" role="tabpanel" aria-labelledby="case_category_content_1">
                                <div class="circle-slider">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/bullet-circle-1.webp" alt="" class="bullets">
                                    <ul class="industry-circle">
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Single Never<br>Married</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Late<br>Marriages</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Nikah<br>Break</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Divorce</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Divorce<br>with kid</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>2 Times<br>Divorces</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Widow</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>2nd Marriage<br>in presence of<br>the 1st wife</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Disability<br>Case</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Single Never<br>Married</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Late<br>Marriages</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Nikah<br>Break</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Divorce</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Divorce<br>with kid</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>2 Times<br>Divorces</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Widow</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>2nd Marriage<br>in presence of<br>the 1st wife</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Disability<br>Case</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade h-100" id="case_category_content_2" role="tabpanel" aria-labelledby="case_category_content_2">
                                <div class="circle-slider">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/bullet-circle-1.webp" alt="" class="bullets">
                                    <ul class="industry-circle">
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Pakistan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Abroad</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Gulf<br>Countries</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>European<br>Proposals</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>South<br>Africa</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>China</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Japan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Malaysia</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Mauritius</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Pakistan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Abroad</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Gulf<br>Countries</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>European<br>Proposals</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>South<br>Africa</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>China</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Japan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Malaysia</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Mauritius</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade h-100" id="case_category_content_3" role="tabpanel" aria-labelledby="case_category_content_3">
                                <div class="circle-slider">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/bullet-circle-1.webp" alt="" class="bullets">
                                    <ul class="industry-circle">
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Sindhi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Punjabi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Baloch</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Pathan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Urdu<br>speaking</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>Saraiki</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Syed<br>Bihari</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Kashmiri</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Fiqa e<br>Jafariya</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Sindhi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Punjabi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Baloch</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Pathan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Urdu<br>speaking</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>Saraiki</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Syed<br>Bihari</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Kashmiri</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Fiqa e<br>Jafariya</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade h-100" id="case_category_content_4" role="tabpanel" aria-labelledby="case_category_content_4">
                                <div class="circle-slider">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/bullet-circle-1.webp" alt="" class="bullets">
                                    <ul class="industry-circle">
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mughal</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mehar</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Rizvi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Iqra</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Bukhari</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Rajpoot</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Awan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Yasmeen</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mughal</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="1">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mughal</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="2">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mehar</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="3">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Rizvi</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="4">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Iqra</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="5">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Bukhari</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="6">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Rajpoot</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="7">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Awan</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="8">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Yasmeen</p>
                                            </div>
                                        </li>
                                        <li class="list-item" data-tab="9">
                                            <div class="inverse-rotate">
                                                <p>Mrs. Mughal</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="animate-icon"><img src="<?php echo $themeUrl ?>/assets/img/webp/logo_big.webp" alt="" class="mw-100 avolox-icon"></div>
                        </div>
                    </div>
                </div>
                <div class="arrows">
                    <button class="arrow-prev pe-2" type="button"><img src="<?php echo $themeUrl ?>/assets/img/webp/arrow_long_left.webp" alt=""></button>
                    <button class="arrow-next pe-2" type="button"><img src="<?php echo $themeUrl ?>/assets/img/webp/arrow_long_left.webp" alt=""></button>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'pakistani_proposal') : ?>
                <section class="proposals">
                    <div class="container">
                        <h1 class="main-title text-center" data-aos="fade-up">Featured Pakistani Proposals</h1>
                        <ul class="nav nav-pills" id="pills-tab-featured-pakistani" role="tablist" data-aos="fade-up" data-aos-delay="200">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-karachi-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-karachi-featured" type="button" role="tab" aria-controls="pills-karachi-featured" aria-selected="true">Karachi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-lahore-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-lahore-featured" type="button" role="tab" aria-controls="pills-lahore-featured" aria-selected="false">Lahore</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-islamabad-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-islamabad-featured" type="button" role="tab" aria-controls="pills-islamabad-featured" aria-selected="false">Islamabad</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="featured-pakistani_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade show active" id="pills-karachi-featured" role="tabpanel" aria-labelledby="pills-karachi-tab">
                            <?php if (have_rows('karachi_slides')) : ?>
                                <div class="slider">
                                    <?php while (have_rows('karachi_slides')) : the_row(); ?>
                                        <?php
                                        $user_email = get_sub_field('email_address');

                                        $user = get_user_by('email', $user_email);
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">' . $user->display_name . '</h5>
                                                        <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                        <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                                    </div>
                                                </div>
                                            </a>';
                                        ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : ?>
                                <?php echo "No Slides Found"; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane fade" id="pills-lahore-featured" role="tabpanel" aria-labelledby="pills-lahore-tab">
                            <?php if (have_rows('lahore_slides')) : ?>
                                <div class="slider">
                                    <?php while (have_rows('lahore_slides')) : the_row(); ?>
                                        <?php
                                        $user_email = get_sub_field('email_address');

                                        $user = get_user_by('email', $user_email);
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">' . $user->display_name . '</h5>
                                                        <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                        <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                                    </div>
                                                </div>
                                            </a>';
                                        ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : ?>
                                <?php echo "No Slides Found"; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane fade" id="pills-islamabad-featured" role="tabpanel" aria-labelledby="pills-islamabad-tab">
                            <?php if (have_rows('islamabad_slides')) : ?>
                                <div class="slider">
                                    <?php while (have_rows('islamabad_slides')) : the_row(); ?>
                                        <?php
                                        $user_email = get_sub_field('email_address');

                                        $user = get_user_by('email', $user_email);
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">' . $user->display_name . '</h5>
                                                        <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                        <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                                    </div>
                                                </div>
                                            </a>';
                                        ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : ?>
                                <?php echo "No Slides Found"; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="<?php echo $siteUrl ?>/proposals/?cat=featured-pakistani-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'section_proposals') : ?>
                <section class="proposals <?php if ( get_sub_field( 'is_section_dark' ) == 1 ) echo "proposals_dark" ?>">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center" data-aos="fade-up"><?php the_sub_field('main_title'); ?></h1>
                        <?php endif; ?>

                        <?php $categories = get_sub_field('categories'); ?>
                        <?php if (have_rows('categories')) : ?>
                            <ul class="nav nav-pills <?php if ($categories && count($categories) === 1) echo "d-none" ?>" id="pills-tab-pakistani" role="tablist" data-aos="fade-up" data-aos-delay="200">
                                <?php $i = 1; ?>
                                <?php while (have_rows('categories')) : the_row(); ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php if ($i == 1) echo "active" ?>" id="pills-<?php the_sub_field('single_category'); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php the_sub_field('single_category'); ?>" type="button" role="tab" aria-controls="pills-<?php the_sub_field('single_category'); ?>" aria-selected="true"><?php the_sub_field('single_category'); ?></button>
                                    </li>
                                    <?php $i++ ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('categories')) : ?>
                        <div class="tab-content" id="pakistani-tab" data-aos="fade-up" data-aos-delay="300">
                            <?php $i = 1; ?>
                            <?php while (have_rows('categories')) : the_row(); ?>
                                <div class="tab-pane fade <?php if ($i == 1) echo "active show" ?>" id="pills-<?php the_sub_field('single_category'); ?>" role="tabpanel" aria-labelledby="pills-<?php the_sub_field('single_category'); ?>-tab">
                                    <div class="slider">
                                        <?php
                                        $city = get_sub_field('single_category');

                                        $args = array(
                                            'meta_query' => array(
                                                array(
                                                    'key' => 'select_category', // Replace with your actual ACF field key
                                                    'value' => $city,
                                                    'compare' => '=',
                                                ),
                                            ),
                                        );

                                        $users_query = new WP_User_Query($args);

                                        // Check if any users were found
                                        if (!empty($users_query->results)) {
                                            foreach ($users_query->results as $user) {

                                                $user_id = $user->ID;
                                                $country = get_user_meta($user_id, 'country', true);
                                                $city = get_user_meta($user_id, 'city', true);
                                                $age = get_user_meta($user_id, 'age', true);
                                                $cast = get_user_meta($user_id, 'cast_in', true);
                                                $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                                $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                                echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">' . $user->display_name . '</h5>
                                                            <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                            <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                                        </div>
                                                    </div>
                                                </a>';
                                                // echo 'Username: ' . esc_html($user->user_login) . '<br>';
                                            }
                                        } else {
                                            echo 'No users found with the selected city.';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php $i++ ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>


                    <a href="<?php echo $siteUrl ?>/proposals?cat=punjab-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
                    <!-- <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div> -->
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="proposals proposals_dark">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Sindh Proposals</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-gulf" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-saudia-tab" data-bs-toggle="pill" data-bs-target="#pills-saudia" type="button" role="tab" aria-controls="pills-saudia" aria-selected="true">Saudia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-dubai-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai" type="button" role="tab" aria-controls="pills-dubai" aria-selected="false">Dubai</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-qatar-tab" data-bs-toggle="pill" data-bs-target="#pills-qatar" type="button" role="tab" aria-controls="pills-qatar" aria-selected="false">Qatar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-oman-tab" data-bs-toggle="pill" data-bs-target="#pills-oman" type="button" role="tab" aria-controls="pills-oman" aria-selected="false">Oman</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="shia_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade show active" id="pills-sindh-proposals" role="tabpanel" aria-labelledby="pills-sindh-proposals-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'city',
                                'value'   => 'karachi',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=sindh-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section>
    <section class="proposals">
        <div class="container">
            <h1 class="main-title text-center" data-aos="fade-up">Punjab Proposals</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-shia" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-syed-shia" type="button" role="tab" aria-controls="pills-syed-shia" aria-selected="true">Syed Shia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-non-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-non-syed-shia" type="button" role="tab" aria-controls="pills-non-syed-shia" aria-selected="false">Non Syed Shia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="gulf_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade show active" id="pills-saudia" role="tabpanel" aria-labelledby="pills-saudia-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'city',
                                'value'   => 'lahore',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-qatar" role="tabpanel" aria-labelledby="pills-qatar-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-oman" role="tabpanel" aria-labelledby="pills-oman-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=punjab-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="proposals proposals_dark">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Abroad Proposals</h1>
            <ul class="nav nav-pills" id="pills-tab-abroad" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-usa-tab" data-bs-toggle="pill" data-bs-target="#pills-usa" type="button" role="tab" aria-controls="pills-usa" aria-selected="true">USA</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-uk-tab" data-bs-toggle="pill" data-bs-target="#pills-uk" type="button" role="tab" aria-controls="pills-uk" aria-selected="false">UK</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-canada-tab" data-bs-toggle="pill" data-bs-target="#pills-canada" type="button" role="tab" aria-controls="pills-canada" aria-selected="false">Canada</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-australia-tab" data-bs-toggle="pill" data-bs-target="#pills-australia" type="button" role="tab" aria-controls="pills-australia" aria-selected="false">Australia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'usa',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-uk" role="tabpanel" aria-labelledby="pills-uk-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'uk',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-canada" role="tabpanel" aria-labelledby="pills-canada-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'canada',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-australia" role="tabpanel" aria-labelledby="pills-australia-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'australia',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=abroad-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section>
    <section class="proposals">
        <div class="container">
            <h1 class="main-title text-center" data-aos="fade-up">Gulf Countries Proposals</h1>
            <ul class="nav nav-pills" id="pills-tab-gulf" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-saudia2-tab" data-bs-toggle="pill" data-bs-target="#pills-saudia2" type="button" role="tab" aria-controls="pills-saudia2" aria-selected="true">Saudia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-dubai2-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai2" type="button" role="tab" aria-controls="pills-dubai2" aria-selected="false">Dubai</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-qatar2-tab" data-bs-toggle="pill" data-bs-target="#pills-qatar2" type="button" role="tab" aria-controls="pills-qatar2" aria-selected="false">Qatar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-oman2-tab" data-bs-toggle="pill" data-bs-target="#pills-oman2" type="button" role="tab" aria-controls="pills-oman2" aria-selected="false">Oman</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="gulf_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-saudia2" role="tabpanel" aria-labelledby="pills-saudia2-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'saudia',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-dubai2" role="tabpanel" aria-labelledby="pills-dubai2-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'dubai',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-qatar2" role="tabpanel" aria-labelledby="pills-qatar2-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'qatar',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-oman2" role="tabpanel" aria-labelledby="pills-oman2-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'oman',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=gulf-countries-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="proposals proposals_dark">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">European Proposals</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-pakistani" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-karachi-tab" data-bs-toggle="pill" data-bs-target="#pills-karachi" type="button" role="tab" aria-controls="pills-karachi" aria-selected="true">Karachi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-lahore-tab" data-bs-toggle="pill" data-bs-target="#pills-lahore" type="button" role="tab" aria-controls="pills-lahore" aria-selected="false">Lahore</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-islamabad-tab" data-bs-toggle="pill" data-bs-target="#pills-islamabad" type="button" role="tab" aria-controls="pills-islamabad" aria-selected="false">Islamabad</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pakistani_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-karachi" role="tabpanel" aria-labelledby="pills-karachi-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-lahore" role="tabpanel" aria-labelledby="pills-lahore-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'uk',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-islamabad" role="tabpanel" aria-labelledby="pills-islamabad-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=european-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section>
    <section class="proposals">
        <div class="container">
            <h1 class="main-title text-center" data-aos="fade-up">Shia Proposals</h1>
            <ul class="nav nav-pills" id="pills-tab-shia" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-syed-shia" type="button" role="tab" aria-controls="pills-syed-shia" aria-selected="true">Syed Shia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-non-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-non-syed-shia" type="button" role="tab" aria-controls="pills-non-syed-shia" aria-selected="false">Non Syed Shia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="shia_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade show active" id="pills-syed-shia" role="tabpanel" aria-labelledby="pills-syed-shia-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'sect_in',
                                'value'   => 'Shia Syed',
                                'compare' => '=',
                            ),

                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-non-syed-shia" role="tabpanel" aria-labelledby="pills-non-syed-shia-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'sect_in',
                                'value'   => 'Shia non syed',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=shia-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="proposals proposals_dark d-none">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Female Ready For 2nd Marriage</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-abroad" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-usa-tab" data-bs-toggle="pill" data-bs-target="#pills-usa" type="button" role="tab" aria-controls="pills-usa" aria-selected="true">USA</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-uk-tab" data-bs-toggle="pill" data-bs-target="#pills-uk" type="button" role="tab" aria-controls="pills-uk" aria-selected="false">UK</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-canada-tab" data-bs-toggle="pill" data-bs-target="#pills-canada" type="button" role="tab" aria-controls="pills-canada" aria-selected="false">Canada</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-australia-tab" data-bs-toggle="pill" data-bs-target="#pills-australia" type="button" role="tab" aria-controls="pills-australia" aria-selected="false">Australia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-uk" role="tabpanel" aria-labelledby="pills-uk-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'sect_in',
                                'value'   => 'Shia non syed',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-canada" role="tabpanel" aria-labelledby="pills-canada-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-australia" role="tabpanel" aria-labelledby="pills-australia-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals/female-ready-for-2nd-marriage" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section> <!--Hide because date not found!-->
    <section class="proposals d-none">
        <div class="container">
            <h1 class="main-title text-center" data-aos="fade-up">Other Proposals</h1>
            <ul class="nav nav-pills" id="pills-tab-other" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-south-africa-tab" data-bs-toggle="pill" data-bs-target="#pills-south-africa" type="button" role="tab" aria-controls="pills-south-africa" aria-selected="true">South Africa</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-china-tab" data-bs-toggle="pill" data-bs-target="#pills-china" type="button" role="tab" aria-controls="pills-china" aria-selected="false">China</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-japan-tab" data-bs-toggle="pill" data-bs-target="#pills-japan" type="button" role="tab" aria-controls="pills-japan" aria-selected="false">Japan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-malaysia-tab" data-bs-toggle="pill" data-bs-target="#pills-malaysia" type="button" role="tab" aria-controls="pills-malaysia" aria-selected="false">Malaysia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="other_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-south-africa" role="tabpanel" aria-labelledby="pills-south-africa-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'south-africa',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-china" role="tabpanel" aria-labelledby="pills-china-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'china',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-japan" role="tabpanel" aria-labelledby="pills-japan-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'Shia non syed',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-malaysia" role="tabpanel" aria-labelledby="pills-malaysia-tab">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'order'   => 'ASC',
                        'number' => 10,
                        'meta_query' => array(
                            'relation' => 'AND', // Use 'AND' for an AND condition.
                            array(
                                'key'     => 'country',
                                'value'   => 'Shia non syed',
                                'compare' => '=',
                            ),
                        ),
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals/other-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section> <!--Hide because date not found!-->
    <section class="proposals proposals_dark">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Short Hight & Disability Proposals</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-gulf" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-saudia-tab" data-bs-toggle="pill" data-bs-target="#pills-saudia" type="button" role="tab" aria-controls="pills-saudia" aria-selected="true">Saudia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-dubai-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai" type="button" role="tab" aria-controls="pills-dubai" aria-selected="false">Dubai</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-qatar-tab" data-bs-toggle="pill" data-bs-target="#pills-qatar" type="button" role="tab" aria-controls="pills-qatar" aria-selected="false">Qatar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-oman-tab" data-bs-toggle="pill" data-bs-target="#pills-oman" type="button" role="tab" aria-controls="pills-oman" aria-selected="false">Oman</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="gulf_proposal_countries" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade" id="pills-saudia" role="tabpanel" aria-labelledby="pills-saudia-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-qatar" role="tabpanel" aria-labelledby="pills-qatar-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-oman" role="tabpanel" aria-labelledby="pills-oman-tab">
                <div class="slider">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="..." loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/users/customers/1.webp" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rida</h5>
                                <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                <p class="card-text"><span class="age">32</span> yrs, <span class="cart">Memon</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo $siteUrl ?>/proposals?cat=short-hight-&-disability-proposals" class="btn btn-secondary mx-auto d-flex mt-5" style="max-width: 160px" data-aos="zoom-in" data-aos-delay="300">View More</a>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section> <!--Hide because date not found!-->
    <section class="about">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xxl-6 mx-auto">
                    <div class="img_gold_border" data-aos="fade-right">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/about_1.webp" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-12 col-xxl-6 mx-auto">
                    <h1 class="main-title" data-aos="fade-up" data-aos-delay="200">About Us</h1>
                    <p class="lead" data-aos="fade-up" data-aos-delay="300">At Muslim Matrimonial, we are dedicated to helping individuals find love, companionship, and the path to a lasting and meaningful marriage. Our personalized matchmaking services, handled with utmost professionalism and confidentiality, ensure you have access to verified profiles and swift proposal processing. We're here to facilitate the journey of building meaningful, enduring relationships. Join us in your quest for love and partnership.</p>
                    <p class="lead" data-aos="fade-up" data-aos-delay="350">Experience Tailored Matchmaking Excellence:<br>Our platform offers the advantage of personalized matchmaking services. We provide you with an experienced, professional matchmaker chosen to align perfectly with your unique profile and criteria. Handling your case with the utmost confidentiality and professionalism, they focus on providing you with only verified profiles.</p>
                    <ul class="list_counter">
                        <li><span class="title">5000+</span>Success Stories</li>
                        <li><span class="title">500+</span>Matchmakers</li>
                        <li><span class="title">50+</span>Experience</li>
                    </ul>
                    <button type="button" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="400">View More</button>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_3.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="success_ratio">
        <div class="container">
            <div class="content_wrapper">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <h1 class="main-title text-center m-0" data-aos="fade-up">Success Stories</h1>
                        <p class="lead text-center mb-0" data-aos="fade-up" data-aos-delay="200">Real people, real love, real happiness. Discover the magic of our matchmaking journey.</p>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <ul class="list_cards">
                            <li data-aos="fade-left" data-aos-delay="100">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="<?php echo $themeUrl ?>/assets/img/webp/success-story-1_result.webp" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mr. and Mrs. Noman</h5>
                                        <p class="card-text"><span class="city">Sydney</span>, <span class="country">Australia</span></p>
                                        <p class="card-text"><span class="cart">Sunni</span></p>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="fade-left" data-aos-delay="120">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="<?php echo $themeUrl ?>/assets/img/webp/success-story-2_result.webp" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mr. and Mrs. Baqar Siddique</h5>
                                        <p class="card-text"><span class="city">Faisalabad</span>, <span class="country">Pakistan</span></p>
                                        <p class="card-text"><span class="cart">Sunni</span></p>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="fade-left" data-aos-delay="240">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="<?php echo $themeUrl ?>/assets/img/webp/success-story-3_result.webp" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mr. and Mrs. Kashif</h5>
                                        <p class="card-text"><span class="city">Karachi</span>, <span class="country">Pakistan</span></p>
                                        <p class="card-text"><span class="cart">Sunni</span></p>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="fade-left" data-aos-delay="260">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="<?php echo $themeUrl ?>/assets/img/webp/success-story-4_result.webp" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mrs. Shahid Client Parents</h5>
                                        <p class="card-text"><span class="city">Burewala</span>, <span class="country">Pakistan</span></p>
                                        <p class="card-text"><span class="cart">Sunni</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mx-auto d-flex" data-aos="zoom-in" data-aos-delay="200">Learn More</button>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_4.webp" alt="" loading="lazy">
        <div class="obj_ribbon_s2 obj_ribbon_s2_top">
            <div>
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
            <div>
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container">
            <div class="content_wrapper">
                <div class="row align-items-center">
                    <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xxl-6 mx-auto">
                        <div class="img_gold_border" data-aos="fade-right">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/faq.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xxl-6 mx-auto">
                        <h1 class="main-title" data-aos="fade-up" data-aos-delay="200">Frequently Asked Questions</h1>
                        <div class="accordion" id="faq">
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="220">
                                <h2 class="accordion-header" id="heading_1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq_1" aria-expanded="false" aria-controls="faq_1">
                                        Where do you have proposals from? Will our data be kept confidential?
                                    </button>
                                </h2>
                                <div id="faq_1" class="accordion-collapse collapse show" aria-labelledby="heading_1" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        We cater to individuals worldwide, including Pakistan, abroad, and Gulf countries. Rest assured, your data will be kept highly confidential.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="240">
                                <h2 class="accordion-header" id="heading_2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_2" aria-expanded="true" aria-controls="faq_2">
                                        How can we find proposals easily?
                                    </button>
                                </h2>
                                <div id="faq_2" class="accordion-collapse collapse" aria-labelledby="heading_1" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        To find proposals easily, simply visit our website. Our consultants can be reached via the provided contact numbers, and they will guide you through the process.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="260">
                                <h2 class="accordion-header" id="heading_3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_3" aria-expanded="true" aria-controls="faq_3">
                                        How can we believe that if we provide money to others, they might block us?
                                    </button>
                                </h2>
                                <div id="faq_3" class="accordion-collapse collapse" aria-labelledby="heading_3" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        We understand this concern. It's important to note that we are a government-approved entity in Pakistan. Our dedicated staff, working diligently for you, receives a monthly salary. They dedicate six days per week, nine hours per day to ensure the completion of proposals, giving you peace of mind and the assurance of genuine service.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="280">
                                <h2 class="accordion-header" id="heading_4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_4" aria-expanded="true" aria-controls="faq_4">
                                        Can you initiate our process without any advance or registration fee? I would prefer to pay the complete amount after the proposals are finalized.
                                    </button>
                                </h2>
                                <div id="faq_4" class="accordion-collapse collapse" aria-labelledby="heading_4" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        Our dedicated staff, operating on a salary basis, exclusively focuses on verified, approved, and paid client profiles. We prioritize diligently working on the proposals of our paid clients, ensuring they are completed promptly and efficiently.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="accordion-header" id="heading_5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_5" aria-expanded="true" aria-controls="faq_5">
                                        Where should I make the payment?
                                    </button>
                                </h2>
                                <div id="faq_5" class="accordion-collapse collapse" aria-labelledby="heading_5" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        All payment details and methods are provided on our website. Please note that if payments are made to any other account not mentioned on our official platform, the company cannot be held responsible for such transactions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="330">
                                <h2 class="accordion-header" id="heading_6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_6" aria-expanded="true" aria-controls="faq_6">
                                        What guarantees do I have that a proposal will be arranged after registration?
                                    </button>
                                </h2>
                                <div id="faq_6" class="accordion-collapse collapse" aria-labelledby="heading_6" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        We strive to fulfill your proposal request within the designated service duration. In case your proposal cannot be arranged for any reason, our consultants will provide guidance. You can contact them via the number listed on our website. Kindly note that if, for any reason, the registration process cannot be pursued again.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="350">View More</button>
                    </div>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_6.webp" alt="" loading="lazy">
    </section>
    <section class="certificates">
        <div class="container">
            <div class="content_wrapper">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <h1 class="main-title text-center" data-aos="fade-up">Government-Registered Trustworthiness</h1>
                        <img class="title_separator" src="<?php echo $themeUrl ?>/assets/img/webp/separator.webp" alt="" data-aos="fade-up">
                        <p class="lead text-center mb-0" data-aos="fade-up" data-aos-delay="200">With official recognition from the Government of Pakistan, Muslim Matrimonial stands as a symbol of trustworthiness and integrity. Our Government registration assures you that your quest for love and companionship is supported by a reputable and law-abiding institution, offering you a secure and reliable path to meaningful relationships.</p>
                    </div>
                </div>
                <ul class="list_certificates">
                    <li data-aos="fade-left" data-aos-delay="100">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_frame_certificates.webp" alt="" loading="lazy" class="frame">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/certificates_1.webp" alt="" loading="lazy">
                    </li>
                    <li data-aos="fade-left" data-aos-delay="200">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_frame_certificates.webp" alt="" loading="lazy" class="frame">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/certificates_3.webp" alt="" loading="lazy">
                    </li>
                    <li data-aos="fade-left" data-aos-delay="300">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_frame_certificates.webp" alt="" loading="lazy" class="frame">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/certificates_4.webp" alt="" loading="lazy">
                    </li>
                    <li data-aos="fade-left" data-aos-delay="400">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_frame_certificates.webp" alt="" loading="lazy" class="frame">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/certificates_2.webp" alt="" loading="lazy">
                    </li>
                </ul>
                <button type="button" class="btn btn-secondary mx-auto d-flex" data-aos="fade-up" data-aos-delay="400">Learn More</button>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <h1 class="main-title text-center m-0" data-aos="fade-up">Contact Our Team</h1>
                    <p class="lead text-center mb-0" data-aos="fade-up" data-aos-delay="200">Have questions or need guidance? Contact us anytime - our friendly and professional team is ready to provide the help you need."Reach out to our dedicated team for any inquiries or assistance.</p>
                </div>
                <div class="col-md-12 col-lg-10 mx-auto">
                    <div class="content_wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contact_info" data-aos="fade-up" data-aos-delay="300">
                                    <h2 class="title text-white">Contact Information</h2>
                                    <ul class="list_contact">
                                        <li><a href="#"><img src="<?php echo $themeUrl ?>/assets/img/webp/clock.webp" alt="" loading="lazy">MON - THU | 11:00am to 09:00pm<br>SAT - SUN | 11:00am to 09:00pm</a></li>
                                        <li><a href="mailto:info@muslimmatrimonial.com.pk"><img src="<?php echo $themeUrl ?>/assets/img/webp/envelope_light.webp" alt="" loading="lazy">info@muslimmatrimonial.com.pk</a></li>
                                        <li><a href="#"><img src="<?php echo $themeUrl ?>/assets/img/webp/pin.webp" alt="" loading="lazy">Office Address: Plot # 60, Usmania Society Near Usmania Girls College Nazimabad, Karachi, Sindh, Pakistan.</a></li>
                                    </ul>
                                    <ul class="list_social">
                                        <li><a class="whatsapp" href="https://wa.me/+923486819713"><img src="<?php echo $themeUrl ?>/assets/img/webp/whatsapp.webp" alt="" loading="lazy"></a></li>
                                        <li><a class="facebook" href="https://www.facebook.com/MuslimMatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/facebook.webp" alt="" loading="lazy"></a></li>
                                        <li><a class="instagram" href="https://www.instagram.com/muslimmatrimonial.com.pk/"><img src="<?php echo $themeUrl ?>/assets/img/webp/instagram.webp" alt="" loading="lazy"></a></li>
                                        <li><a class="youtube" href="https://www.youtube.com/channel/UCjJXh4Wq8t7id8LtZXzzw9A"><img src="<?php echo $themeUrl ?>/assets/img/webp/youtube.webp" alt="" loading="lazy"></a></li>
                                        <li><a class="linkedin" href="https://www.linkedin.com/company/muslim-matrimonial/"><img src="<?php echo $themeUrl ?>/assets/img/webp/linkedin.webp" alt="" loading="lazy"></a></li>
                                        <li><a class="pinterest" href="https://www.pinterest.com/muslimmatrimonial02/"><img src="<?php echo $themeUrl ?>/assets/img/webp/pinterest.webp" alt="" loading="lazy"></a></li>
                                    </ul>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/office_location.webp" alt="" loading="lazy" class="bg">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="numbers_wrapper">
                                    <ul class="list_phone">
                                        <li data-aos="fade-left" data-aos-delay="300">
                                            <a href="https://wa.me/+923486819713">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Mughal
                                                    <span class="number">+92 348 6819713</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="320">
                                            <a href="https://wa.me/+923154723802">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Iqra
                                                    <span class="number">+92 315 4723802</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="300">
                                            <a href="https://wa.me/+923480845599">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Mehar
                                                    <span class="number">+92 348 0845599</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="320">
                                            <a href="https://wa.me/+447476438874">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Rajpoot, <span class="small">USA Consultant</span>
                                                    <span class="number">+44 7476 438874</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="300">
                                            <a href="https://wa.me/+923001512024">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Bukhari
                                                    <span class="number">+92 300 1512024</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="320">
                                            <a href="https://wa.me/+1(332)233-9586">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Awan, <span class="small">UK Consultant</span>
                                                    <span class="number">+1 (332) 233-9586</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="300">
                                            <a href="https://wa.me/+923352215867">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Rizvi
                                                    <span class="number">+92 335 2215867</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-aos="fade-left" data-aos-delay="320">
                                            <a href="https://wa.me/+33756756186">
                                                <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                <span>
                                                    Mrs Yasmeen, <span class="small">Fr & Eur Consultant</span>
                                                    <span class="number">+33 7 56 75 61 86</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="personalized_matchmaking">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <h1 class="main-title text-center m-0" data-aos="fade-up">Personalized Matchmaking</h1>
                    <p class="lead text-center" data-aos="fade-up" data-aos-delay="200">At Muslim Matrimonial, we recognize that every love story is one of a kind. Our personalized matchmaking services are designed to elevate your quest for the perfect life partner. By connecting you with a dedicated matchmaker, carefully selected to complement your preferences, we ensure that your journey to love is as exceptional as you are.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-10 col-xxl-8 mx-auto">
                    <ul class="list_cards_v2">
                        <li data-aos="fade-right" data-aos-delay="300">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Verified Profiles</h4>
                                    <p class="card-text">At Muslim Matrimonial, authenticity is paramount. We meticulously verify every profile on our platform, offering you a secure and reliable path to finding your ideal match. With verified profiles, you can embark on your journey to love with confidence, knowing that you're connecting with genuine individuals who share your commitment to a meaningful relationship.</p>
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="400">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Confidential and Professional</h4>
                                    <p class="card-text">At Muslim Matrimonial, we understand the sensitivity of your journey. That's why we handle your matchmaking journey with the utmost discretion and professionalism. Rest assured, your quest for love remains confidential and is managed by experienced professionals who are dedicated to your success.</p>
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="300">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Expert Guidance</h4>
                                    <p class="card-text">You benefit from the expertise of a skilled matchmaker who guides you through the entire process, increasing the chances of finding a compatible, meaningful relationship.<br>
                                        Their expertise significantly boosts your prospects of discovering a genuine, meaningful relationship built on compatibility and shared values.</p>
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="400">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Save Time and Effort</h4>
                                    <p class="card-text">By having a professional matchmaker handle the legwork, you save valuable time and energy that can be invested in building a connection with your potential life partner.</p>
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="300">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Unique Compatibility</h4>
                                    <p class="card-text">Personalized matchmaking delves deep into your personality, preferences, and life goals to provide you with profiles that align perfectly with your unique qualities. Personalized matchmaking goes beyond basic filters to consider nuanced compatibility factors, increasing the likelihood of a genuine connection.</p>
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="400">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Lifestyle Alignment</h4>
                                    <p class="card-text">Lifestyle Alignment: Our matchmaking process takes into account your daily routines, interests, and long-term life goals, ensuring that your potential matches not only share your values but also seamlessly fit into your way of life. With this emphasis on lifestyle compatibility, your journey is set on a path toward a harmonious and enduring partnership.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_7.webp" alt="" loading="lazy">
    </section>
    <section class="about_video">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 col-lg-8 col-xxl-6 mx-auto">
                    <div class="img_gold_border img_gold_border_video" data-aos="fade-right">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/video_poster.webp" alt="" loading="lazy" class="video_thumbnail" width="960" height="540">
                        <video playsinline>
                            <source data-src="<?php echo $themeUrl ?>/assets/video/mp4/about_video.mp4">
                            <source data-src="<?php echo $themeUrl ?>/assets/video/webm/about_video.webm">
                        </video>
                        <button class="play_pause">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/play.webp" alt="">
                        </button>
                    </div>
                </div>
                <div class="col-md-10 col-lg-8 col-xxl-6 mx-auto">
                    <h1 class="main-title mb-0" data-aos="fade-up" data-aos-delay="200">Hire Consultant</h1>
                    <ul class="list_phone">
                        <li data-aos="fade-up" data-aos-delay="300">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/phone_light.webp" alt="" loading="lazy">
                            <span>
                                <span class="title">Contact</span>
                                Our Consultant on whatsApp which are mention on our website.
                            </span>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="320">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/user.webp" alt="" loading="lazy">
                            <span>
                                <span class="title">Send your Profile</span>
                                Send your profile via whatsApp with requirements and picture.
                            </span>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="340">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/document.webp" alt="" loading="lazy">
                            <span>
                                <span class="title">Get Your Self Registered</span>
                                Activated your services within a 7hours, see many educated proposal easily and communicate to other family.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 pt-5 pt-lg-0">
                    <h1 class="main-title mb-4" data-aos="fade-up">Muslim Matrimonial</h1>
                    <h2 class="secondary-title mb-4" data-aos="fade-up" data-aos-delay="200">Head Office Location</h2>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="220"><span class="text-maroon text-uppercase">Visit Our Head Office: </span>At Muslim Matrimonial, we extend a warm invitation to experience the essence of our matrimonial services in person. Our head office is not just an address; it's a place where you can meet our dedicated consultants and immerse yourself in a world of thousands of educated, noble, and well-matched family proposals, meticulously tailored to your requirements.</p>
                    <p class="lead mb-2" data-aos="fade-up" data-aos-delay="240"><span class="text-maroon text-uppercase">OFFICE TIMINGS: </span>
                    <ul class="ps-4 pt-0 mb-4" data-aos="fade-up" data-aos-delay="260">
                        <li>Monday to Thursday: 11 AM to 9 PM</li>
                        <li>Saturday and Sunday: 11 AM to 9 PM</li>
                    </ul>
                    </p>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="280"><span class="text-maroon text-uppercase">Office Address: </span>Plot #60, Usmania Society, Near Usmania Girls College, Nazimabad, Karachi, Sindh, Pakistan, 74600.</p>
                    <p class="lead mb-0" data-aos="fade-up" data-aos-delay="300">By visiting our office, you'll have the opportunity to personally engage with our consultants, explore profiles, and witness the live essence of our matchmaking process. The environment is designed to offer you comfort and privacy as you discuss your preferences and expectations with our experts. Contact our consultant today to book your appointment and take the first step toward realizing your dreams of a harmonious partnership.</p>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_9.webp" alt="" loading="lazy">
    </section>
    <section class="cta">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Find your Perfect Match the Halal Way</h1>
            <button type="button" class="btn btn-primary btn-lg mx-auto d-flex" data-aos="zoom-out" data-aos-delay="300">Find Now</button>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
    </section>

<?php
elseif (is_page('proposals')) : ?>
    <section class="page_banner">
        <div class="container">
            <div class="caption">
                <h1 class="main-title text-center text-capitalize">
                    <?php if (isset($_GET['cat'])) :
                        echo str_replace("-", " ", $_GET['cat']);
                    else : the_title();
                    endif;
                    ?>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $siteUrl ?>">Home</a></li>
                        <li class="breadcrumb-item active text-white text-capitalize" aria-current="page">
                            <?php if (isset($_GET['cat'])) :
                                echo str_replace("-", " ", $_GET['cat']);;
                            else : the_title();
                            endif;
                            ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/page_banners/page_banner_2.webp" alt="">
        <div class="obj_ribbon_s3">
            <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_top">
            <div>
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
            <div>
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="proposals loading">
        <div class="container">
            <?php if (isset($_GET['cat'])) :
                if ($_GET['cat'] === "featured-pakistani-proposals") : ?>
                    <ul class="nav nav-pills" id="pills-tab-featured-pakistani" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-karachi-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-karachi-featured" type="button" role="tab" aria-controls="pills-karachi-featured" aria-selected="true">Karachi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-lahore-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-lahore-featured" type="button" role="tab" aria-controls="pills-lahore-featured" aria-selected="false">Lahore</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-islamabad-tab-featured" data-bs-toggle="pill" data-bs-target="#pills-islamabad-featured" type="button" role="tab" aria-controls="pills-islamabad-featured" aria-selected="false">Islamabad</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-pane fade show active" id="pills-karachi-featured" role="tabpanel" aria-labelledby="pills-karachi-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'city',
                                            'value'   => 'karachi',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex karachi">View More</button>
                        </div>
                        <div class="tab-pane fade" id="pills-lahore-featured" role="tabpanel" aria-labelledby="pills-lahore-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'city',
                                            'value'   => 'lahore',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex lahore">View More</button>
                        </div>
                        <div class="tab-pane fade" id="pills-islamabad-featured" role="tabpanel" aria-labelledby="pills-islamabad-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'city',
                                            'value'   => 'islamabad',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex islamabad">View More</button>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "sindh-proposals") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-pane fade show active" id="pills-karachi-featured" role="tabpanel" aria-labelledby="pills-karachi-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'city',
                                            'value'   => 'karachi',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex karachi">View More</button>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "punjab-proposals") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-pane fade show active" id="pills-lahore-featured" role="tabpanel" aria-labelledby="pills-lahore-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'city',
                                            'value'   => 'lahore',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex lahore">View More</button>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "abroad-proposals") : ?>
                    <ul class="nav nav-pills" id="pills-tab-abroad" role="tablist" data-aos="fade-up" data-aos-delay="200">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-usa-tab" data-bs-toggle="pill" data-bs-target="#pills-usa" type="button" role="tab" aria-controls="pills-usa" aria-selected="true">USA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-uk-tab" data-bs-toggle="pill" data-bs-target="#pills-uk" type="button" role="tab" aria-controls="pills-uk" aria-selected="false">UK</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canada-tab" data-bs-toggle="pill" data-bs-target="#pills-canada" type="button" role="tab" aria-controls="pills-canada" aria-selected="false">Canada</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-australia-tab" data-bs-toggle="pill" data-bs-target="#pills-australia" type="button" role="tab" aria-controls="pills-australia" aria-selected="false">Australia</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 10,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'usa',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                                <button type="button" class="btn btn-secondary mx-auto d-flex usa">View More</button>
                                <input type="text">
                            </div>
                            <div class="tab-pane fade show active" id="pills-uk" role="tabpanel" aria-labelledby="pills-uk-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 10,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'uk',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                                <button type="button" class="btn btn-secondary mx-auto d-flex uk">View More</button>
                            </div>
                            <div class="tab-pane fade" id="pills-canada" role="tabpanel" aria-labelledby="pills-canada-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 10,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'canada',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                                <button type="button" class="btn btn-secondary mx-auto d-flex canada">View More</button>
                            </div>
                            <div class="tab-pane fade" id="pills-australia" role="tabpanel" aria-labelledby="pills-australia-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 10,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'australia',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                                <button type="button" class="btn btn-secondary mx-auto d-flex australia">View More</button>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "usa") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'usa',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "uk") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'uk',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "canada") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'canada',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "australia") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'australia',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "dubai") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'dubai',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "saudia") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'saudia',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "qatar") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'qatar',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "oman") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 2000,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'oman',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "gulf-countries-proposals") : ?>
                    <ul class="nav nav-pills" id="pills-tab-gulf" role="tablist" data-aos="fade-up" data-aos-delay="200">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-saudia2-tab" data-bs-toggle="pill" data-bs-target="#pills-saudia2" type="button" role="tab" aria-controls="pills-saudia2" aria-selected="true">Saudia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-dubai2-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai2" type="button" role="tab" aria-controls="pills-dubai2" aria-selected="false">Dubai</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-qatar2-tab" data-bs-toggle="pill" data-bs-target="#pills-qatar2" type="button" role="tab" aria-controls="pills-qatar2" aria-selected="false">Qatar</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-oman2-tab" data-bs-toggle="pill" data-bs-target="#pills-oman2" type="button" role="tab" aria-controls="pills-oman2" aria-selected="false">Oman</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="gulf_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade" id="pills-saudia2" role="tabpanel" aria-labelledby="pills-saudia2-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'country',
                                            'value'   => 'saudia',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex saudia">View More</button>
                        </div>
                        <div class="tab-pane fade show active" id="pills-dubai2" role="tabpanel" aria-labelledby="pills-dubai2-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'country',
                                            'value'   => 'dubai',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex dubai">View More</button>
                        </div>
                        <div class="tab-pane fade" id="pills-qatar2" role="tabpanel" aria-labelledby="pills-qatar2-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'country',
                                            'value'   => 'qatar',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex qatar">View More</button>
                        </div>
                        <div class="tab-pane fade" id="pills-oman2" role="tabpanel" aria-labelledby="pills-oman2-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'country',
                                            'value'   => 'oman',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex oman">View More</button>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "european-proposals") : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-content" id="abroad_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                            <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
                                <div class="cards">
                                    <?php
                                    $args = array(
                                        'role'    => 'subscriber',
                                        'order'   => 'ASC',
                                        'number' => 10,
                                        'meta_query' => array(
                                            'relation' => 'AND', // Use 'AND' for an AND condition.
                                            array(
                                                'key'     => 'country',
                                                'value'   => 'uk',
                                                'compare' => '=',
                                            ),
                                        ),
                                    );
                                    $user_query = new WP_User_Query($args);
                                    if ($user_query->get_total() > 0) {
                                        foreach ($user_query->get_results() as $user) {
                                            $user_id = $user->ID;
                                            $country = get_user_meta($user_id, 'country', true);
                                            $city = get_user_meta($user_id, 'city', true);
                                            $age = get_user_meta($user_id, 'age', true);
                                            $cast = get_user_meta($user_id, 'cast_in', true);
                                            $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                            echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                        }
                                    } else {
                                        echo 'No users found.';
                                    }
                                    ?>
                                </div>
                                <button type="button" class="btn btn-secondary mx-auto d-flex uk">View More</button>
                            </div>
                        </div>
                    </div>
                <?php
                elseif ($_GET['cat'] === "shia-proposals") : ?>
                    <ul class="nav nav-pills" id="pills-tab-shia" role="tablist" data-aos="fade-up" data-aos-delay="200">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-syed-shia" type="button" role="tab" aria-controls="pills-syed-shia" aria-selected="true">Syed Shia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-non-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-non-syed-shia" type="button" role="tab" aria-controls="pills-non-syed-shia" aria-selected="false">Non Syed Shia</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="shia_proposal_countries" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade show active" id="pills-syed-shia" role="tabpanel" aria-labelledby="pills-syed-shia-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'cast_in',
                                            'value'   => 'syed shia',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex syed-shia">View More</button>
                        </div>
                        <div class="tab-pane fade" id="pills-non-syed-shia" role="tabpanel" aria-labelledby="pills-non-syed-shia-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'sect_in',
                                            'value'   => 'Shia non syed',
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user_id, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex non-syed-shia">View More</button>
                        </div>
                    </div>
                <?php
                endif; ?>
                <?php
            else :
                if (isset($_GET['gender']) || isset($_GET['education'])) : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-pane fade show active" id="pills-karachi-featured" role="tabpanel" aria-labelledby="pills-karachi-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 500,
                                    'meta_query' => array(
                                        'relation' => 'AND', // Use 'AND' for an AND condition.
                                        array(
                                            'key'     => 'user_gende',
                                            'value'   => strtolower($_GET['gender']),
                                            'compare' => '=',
                                        ),
                                        array(
                                            'key'     => 'educationi_in',
                                            'value'   => strtolower($_GET['education']),
                                            'compare' => '=',
                                        ),
                                    ),
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                else : ?>
                    <div class="tab-content" id="featured-pakistani_proposal_countries">
                        <div class="tab-pane fade show active" id="pills-karachi-featured" role="tabpanel" aria-labelledby="pills-karachi-tab">
                            <div class="cards">
                                <?php
                                $args = array(
                                    'role'    => 'subscriber',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC',
                                    'number' => 10,
                                );
                                $user_query = new WP_User_Query($args);
                                if ($user_query->get_total() > 0) {
                                    foreach ($user_query->get_results() as $user) {
                                        $user_id = $user->ID;
                                        $country = get_user_meta($user_id, 'country', true);
                                        $city = get_user_meta($user_id, 'city', true);
                                        $age = get_user_meta($user_id, 'age', true);
                                        $cast = get_user_meta($user_id, 'cast_in', true);
                                        $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                                        //$gender = get_user_meta($user_id, 'gender', true)[0];
                                        $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');

                                        echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                } else {
                                    echo 'No users found.';
                                }
                                ?>
                            </div>
                            <button type="button" class="btn btn-secondary mx-auto d-flex all">View More</button>
                        </div>
                    </div> <!--All Proposals Upload-->
                <?php
                endif;
                ?>
            <?php
            endif;
            ?>
        </div>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_loading_proposal">
            <div class="loading_wrapper">
                <img src="<?php echo $themeUrl ?>/assets/img/webp/heart.webp" alt="">
                <div class="loading">
                    <span class="second_active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="container">
            <h1 class="main-title text-center text-white">Find your Perfect Match the Halal Way</h1>
            <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find Now</button>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
    </section>
<?php
elseif (is_page('about-us')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <?php the_title('<h1 class="main-title text-center">', '</h1>'); ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo the_title() ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>

                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'banner_cards') : ?>
                <section class="banner_cards">
                    <?php if (have_rows('cards')) : ?>
                        <div class="cards_wrapper">
                            <div class="row">
                                <div class="col-lg-10 col-xxl-8 mx-auto">
                                    <div class="row m-0">
                                        <?php while (have_rows('cards')) : the_row(); ?>
                                            <div class="col-lg-4">
                                                <div class="card-wrapper" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="card">
                                                        <img src="<?php the_sub_field('icon') ?>" class="card-img-top" alt="...">
                                                        <div class="card-body pb-0">
                                                            <h5 class="card-title mb-3"><?php the_sub_field('title') ?></h5>
                                                            <p class="card-text"><?php the_sub_field('text') ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'about_half_sec') : ?>
                <section class="about">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('image_big')) : ?>
                                <div class="col-10 col-sm-8 col-md-6 col-lg-6 mx-auto">
                                    <div class="img_gold_border" data-aos="fade-right">
                                        <img src="<?php echo get_sub_field('image_big')['url'] ?>" alt="<?php echo get_sub_field('image_big')['title'] ?>" loading="lazy">
                                        <div class="smaller_image" data-aos="zoom-out" data-aos-dalay="200">
                                            <img src="<?php echo get_sub_field('image_small')['url'] ?>" alt="<?php echo get_sub_field('image_small')['title'] ?>" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-10 col-xxl-6 mx-auto text-center text-xxl-start">
                                <h1 class="main-title" data-aos="fade-up" data-aos-delay="200"><span class="small text-dark"><?php the_sub_field('secondary_title') ?></span><br><?php the_sub_field('main_title') ?></h1>
                                <p class="lead mb-0" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('text') ?></p>
                                <?php if (have_rows('contact_list')) : ?>
                                    <ul class="list_phone">
                                        <?php while (have_rows('contact_list')) : the_row(); ?>
                                            <li data-aos="fade-up" data-aos-delay="200">
                                                <a href="<?php the_sub_field('link') ?>">
                                                    <img src="<?php echo get_sub_field('icon')['url'] ?>" alt="<?php echo get_sub_field('icon')['title'] ?>" loading="lazy">
                                                    <span><?php the_sub_field('title') ?>
                                                        <span class="number"><?php the_sub_field('link_text') ?></span>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'who_we_are') : ?>
                <section class="who-we-are">
                    <div class="container">
                        <div>
                            <div class="circle-wrapper position-relative">
                                <div class="animate-icon" style="">
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/muslimmatrimonial_icon.webp" alt="" class="avolox-icon">
                                </div>
                                <img src="<?php echo $themeUrl ?>/assets/img/webp/who-we-are-circle.webp" alt="" class="bg_circle mx-auto mb-5 mb-lg-0" width="573" height="573">
                                <?php if (have_rows('card_1')) : ?>
                                    <?php while (have_rows('card_1')) : the_row(); ?>
                                        <div class="card card-vision mb-2 mb-md-0 flex-row top-0 end-100">
                                            <div class="card-body" data-aos="fade-right">
                                                <div class="mt-lg-4">
                                                    <h1 class="card-title"><?php the_sub_field('title') ?></h1>
                                                    <p class="card-text"><?php the_sub_field('text') ?></p>
                                                </div>
                                            </div>
                                            <div class="icon-wrapper">
                                                <img class="" src="<?php echo get_sub_field('icon')['url'] ?>" alt="<?php echo get_sub_field('icon')['title'] ?>">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if (have_rows('card_2')) : ?>
                                    <?php while (have_rows('card_2')) : the_row(); ?>
                                        <div class="card card-mission mb-2 mb-md-0 flex-row top-0 start-100">
                                            <div class="icon-wrapper">
                                                <img class="" src="<?php echo get_sub_field('icon')['url'] ?>" alt="<?php echo get_sub_field('icon')['title'] ?>">
                                            </div>
                                            <div class="card-body" data-aos="fade-left">
                                                <div class="mt-lg-4">
                                                    <h1 class="card-title"><?php the_sub_field('title') ?></h1>
                                                    <p class="card-text"><?php the_sub_field('text') ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if (have_rows('card_3')) : ?>
                                    <?php while (have_rows('card_3')) : the_row(); ?>
                                        <div class="card card-values flex-row flex-md-column align-items-md-center top-100 start-50">
                                            <div class="icon-wrapper">
                                                <img class="" src="<?php echo get_sub_field('icon')['url'] ?>" alt="<?php echo get_sub_field('icon')['title'] ?>">
                                            </div>
                                            <div class="card-body" data-aos="fade-up">
                                                <h1 class="card-title"><?php the_sub_field('title') ?></h1>
                                                <p class="card-text"><?php the_sub_field('text') ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'about_us_half_sec_img_right') : ?>
                <section class="image_with_content reverse">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('image')) : ?>
                                <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto order-xxl-2">
                                    <div class="img_gold_border" data-aos="fade-left">
                                        <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['title'] ?>" loading="lazy">
                                    </div>
                                </div>
                            <?php endif ?>
                            <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start order-xxl-1">
                                <h1 class="main-title" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('main_title') ?></h1>
                                <?php if (have_rows('paragraphs')) : ?>
                                    <?php while (have_rows('paragraphs')) : the_row(); ?>
                                        <p class="lead" data-aos="fade-up" data-aos-delay="200"><span class="fw-bold"><?php the_sub_field('paragraph_title') ?></span><br><?php the_sub_field('paragraph') ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'about_us_half_sec_img_left') : ?>
                <section class="image_with_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('image')) : ?>
                                <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto">
                                    <div class="img_gold_border" data-aos="fade-right">
                                        <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['title'] ?>" loading="lazy">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start">
                                <h1 class="main-title mb-2 mb-md-3 mb-lg-4" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('main_title') ?></h1>
                                <?php if (have_rows('paragraphs')) : ?>
                                    <?php while (have_rows('paragraphs')) : the_row(); ?>
                                        <p class="lead" data-aos="fade-up" data-aos-delay="200"><span class="fw-bold"><?php the_sub_field('paragraph_title') ?></span><br><?php the_sub_field('paragraph') ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'simple_text') : ?>
                <section class="contact_us_alert">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <h1 class="main-title text-center" data-aos="fade-up"><?php the_sub_field('main_title') ?></h1>
                                <?php if (have_rows('paragraphs')) : ?>
                                    <?php while (have_rows('paragraphs')) : the_row() ?>
                                        <p class="lead text-center" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('text') ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'about_video') : ?>
                <section class="about_video">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('main_title')) : ?>
                                <div class="col-md-10 mx-auto">
                                    <h1 class="main-title text-center mb-4 mb-md-5" data-aos="fade-up"><?php the_sub_field('main_title') ?></h1>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('video')) : ?>
                                <div class="col-md-10 col-lg-8 mx-auto">
                                    <div class="img_gold_border img_gold_border_video" data-aos="fade-up" data-aos-delay="200">
                                        <?php if (get_sub_field('video_poster')) : ?>
                                            <img src="<?php the_sub_field('video_poster') ?>" alt="" loading="lazy" class="video_thumbnail" width="960" height="540">
                                        <?php endif; ?>

                                        <video playsinline>
                                            <source data-src="<?php echo get_sub_field('video')['url'] ?>">
                                        </video>

                                        <button class="play_pause">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/play.webp" alt="">
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('elite-matrimoial')) : ?>
    <section class="page_banner">
        <div class="container">
            <div class="caption">
                <h1 class="main-title text-center" data-aos="zoom-out">Elite Matrimonial</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="./elite-matrimonial.html">Elite Matrimonial</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/page_banners/page_banner_1.webp" alt="">
        <div class="obj_ribbon_s3">
            <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_top">
            <div>
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
            <div>
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="simple_text">
        <div class="container">
            <h2 class="secondary-title text-center" data-aos="fade-up">Elite Matchmaking</h2>
            <p class="lead text-center m-0" data-aos="fade-up" data-aos-delay="200">
                Elite Matrimony is here to help highly accomplished individuals from Pakistan and Abroad Pakistani & foreigner expatriates find their perfect life partners. We focus on bringing
                together people who are not only successful financially but also intelligent and accomplished in their careers. Our goal is to provide top-notch matchmaking services
                for those who value excellence in every aspect of life.
            </p>
        </div>
        <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="proposals proposals_dark">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Elite Proposals</h1>
            <ul class="nav nav-pills d-none" id="pills-tab-shia" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-syed-shia" type="button" role="tab" aria-controls="pills-syed-shia" aria-selected="true">Syed Shia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-non-syed-shia-tab" data-bs-toggle="pill" data-bs-target="#pills-non-syed-shia" type="button" role="tab" aria-controls="pills-non-syed-shia" aria-selected="false">Non Syed Shia</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="shia_proposal_countries">
            <div class="tab-pane fade show active" id="pills-syed-shia" role="tabpanel" aria-labelledby="pills-syed-shia-tab" data-aos="fade-up" data-aos-delay="200">
                <div class="slider">
                    <?php
                    $args = array(
                        'role'    => 'subscriber',
                        'orderby' => 'user_nicename',
                        'order'   => 'ASC',
                        'number' => 10000,
                    );
                    $user_query = new WP_User_Query($args);
                    if ($user_query->get_total() > 0) {
                        foreach ($user_query->get_results() as $user) {
                            $user_id = $user->ID;
                            $elite = get_field('elite',  'user_' . $user->ID);
                            $country = get_user_meta($user_id, 'country', true);
                            $city = get_user_meta($user_id, 'city', true);
                            $age = get_user_meta($user_id, 'age', true);
                            $cast = get_user_meta($user_id, 'cast_in', true);
                            $slug = get_user_meta($user->ID, 'um_user_profile_url_slug_user_login', true);
                            //$gender = get_user_meta($user_id, 'gender', true)[0];
                            $avatar_url = um_get_user_avatar_url($user_id = $user->ID, $size = '200');
                            if ($elite) :
                                echo '<a href="' . $siteUrl . '/user/' . strtolower(str_replace(' ', '-', $slug)) . '" class="item text-decoration-none">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="' . $avatar_url . '" class="card-img-top" alt="..." loading="lazy">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">' . $user->display_name . '</h5>
                                                <p class="card-text"><span class="city">' . $city . '</span>, <span class="country">' . $country . '</span></p>
                                                <p class="card-text"><span class="age">' . $age . '</span> yrs, <span class="cart">' . $cast . '</span></p>
                                            </div>
                                        </div>
                                    </a>';
                            endif;
                        }
                    } else {
                        echo 'No users found.';
                    }
                    ?>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_1.webp" alt="" loading="lazy">
    </section>
    <section class="floating_cards">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div>
                        <div class="floating_cards_wrapper">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Royalty Connections</h2>
                                            <p class="card-text">If you're seeking a life partner who aligns with your royal aspirations
                                                and majestic standards, let us introduce you to potential matches
                                                from distinguished and noble backgrounds who share your regal
                                                values.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_1.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Foreigner</h2>
                                            <p class="card-text">Don't let geographical boundaries hinder your quest for love. Many of
                                                our applicants from around the world are looking to connect with partners
                                                from their home countries. Sign up for Elite Matrimony services today and
                                                open the door to international love connections.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_2.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Foreign Qualified Matches</h2>
                                            <p class="card-text">Discover potential life partners from abroad who meet your elite criteria.
                                                Our matchmaking service connects you with well-qualified foreigners
                                                looking for love and commitment.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_3.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Business Man</h2>
                                            <p class="card-text">If you're looking to marry someone who's accomplished and successful in
                                                business man , don't worry. Elite Matrimony can help you find the right
                                                person.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_4.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Advantages of Exclusive Matchmaking Services</h2>
                                            <p class="card-text">Advantages of Exclusive Matchmaking Services entrust your case to
                                                professional matchmakers.</p>
                                            <p class="card-text">Hire two personal matchmakers who will personally oversee your case.<br>
                                                Connect exclusively with elite-class families.<br>
                                                Ensure the safety and security of your data.<br>
                                                Confidentially discover your perfect match.<br>
                                                Meet only with verified profiles.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_5.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Elite Matrimony</h2>
                                            <p class="card-text">Elite Matrimony Pakistan offers an unparalleled experience, tailoring
                                                matchmaking services exclusively for the discerning upper class of
                                                Pakistan, whether they reside within the country's borders or overseas.
                                                Our commitment to privacy, personalized attention, and exclusivity sets
                                                us apart in the world of matrimonial matchmaking. We bring together
                                                individuals of exceptional backgrounds and ensure that their journey to
                                                finding love is nothing short of exceptional.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_6.webp" alt="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-xxl-10 ps-0">
                                            <h2 class="card-title">Experienced Matchmakers</h2>
                                            <p class="card-text">Our experienced matchmakers have proudly served a diverse clientele,
                                                including accomplished CEOs, visionary entrepreneurs, prominent factory
                                                owners, respected industrialists, skilled chartered accountants,
                                                internationally acclaimed physicians, dynamic real estate developers, and
                                                highly successful professionals hailing from various corners of the world.</p>
                                            <p class="card-text">Our dedicated professional matchmakers are committed to finding your
                                                ideal match, sparing you the need for public searches and eliminating
                                                any potential awkward encounters when meeting someone new.</p>
                                            <button type="button" class="btn btn-outline-primary mt-2">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $themeUrl ?>/assets/img/webp/elite_7.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
    </section>
    <section class="cta">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Find your Perfect Match the Halal Way</h1>
            <button type="button" class="btn btn-primary btn-lg mx-auto d-flex" data-aos="zoom-out" data-aos-delay="300">Find Now</button>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
    </section>
<?php
elseif (is_page('personalized')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <h1 class="main-title text-center">Personalized Matchmaking</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Personalized Matchmaking</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>

                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'half_sec_with_image') : ?>
                <section class="image_with_content reverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row align-items-center">
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto order-xxl-2">
                                            <div class="img_gold_border">
                                                <img src="<?php the_sub_field('image'); ?>" loading="lazy" />
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start order-xxl-1">
                                        <?php
                                        if (get_sub_field('main_title')) {
                                            echo '<h1 class="main-title">' . get_sub_field('main_title') . '</h1>';
                                        }
                                        if (get_sub_field('text')) {
                                            echo '<p class="lead">' . get_sub_field('text') . '</p>';
                                        }
                                        if (have_rows('paragraphs')) : ?>
                                            <?php while (have_rows('paragraphs')) : the_row() ?>
                                                <p class="lead">
                                                    <?php
                                                    if (get_sub_field('paragraph_title')) {
                                                        echo '<span class="fw-bold text-maroon text-decoration-none">' . get_sub_field('paragraph_title') . '</span><br>';
                                                    }
                                                    if (get_sub_field('paragraph')) {
                                                        echo get_sub_field('paragraph');
                                                    }
                                                    ?>
                                                </p>
                                            <?php endwhile; ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'content_list_section') : ?>
                <section class="content_list">
                    <div class="container">
                        <?php if (have_rows('list_item')) : ?>
                            <ol class="list_content">
                                <?php while (have_rows('list_item')) : the_row(); ?>
                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <h2 class="list-title"><?php the_sub_field('title') ?></h2>
                                        <p class="lead"><?php the_sub_field('text') ?></p>
                                    </li>
                                <?php endwhile; ?>
                            </ol>
                        <?php endif; ?>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('event')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <h1 class="main-title text-center">Why Not Event</h1>
                            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo the_title() ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>
                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'simple_text') : ?>
                <section class="simple_text">
                    <div class="container">
                        <h1 class="main-title text-center" data-aos="fade-up"><?php the_sub_field('main_title') ?></h1>
                        <?php if (have_rows('paragraphs')) : ?>
                            <?php while (have_rows('paragraphs')) : the_row(); ?>
                                <p class="lead text-center" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('text') ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'event_half_sec_img_left') : ?>
                <section class="image_with_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row align-items-center">
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto">
                                            <div class="img_gold_border" data-aos="fade-right">
                                                <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['title'] ?>" loading="lazy">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start">
                                        <?php if (get_sub_field('main_title')) : ?>
                                            <h1 class="main-title" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('main_title') ?></h1>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('secondary_title')) : ?>
                                            <p class="lead" data-aos="fade-up" data-aos-delay="200"><span class="fw-bold text-maroon"><?php the_sub_field('secondary_title') ?></span></p>
                                        <?php endif; ?>
                                        <?php if (have_rows('paragraphs')) : ?>
                                            <?php while (have_rows('paragraphs')) : the_row(); ?>
                                                <p class="lead" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('paragraph') ?></p>
                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'event_half_sec_img_right') : ?>
                <section class="image_with_content reverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row align-items-center">
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto order-xxl-2">
                                            <div class="img_gold_border" data-aos="fade-left">
                                                <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['title'] ?>" loading="lazy">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start order-xxl-1">
                                        <?php if (get_sub_field('main_title')) : ?>
                                            <h1 class="main-title" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('main_title') ?></h1>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('secondary_title')) : ?>
                                            <p class="lead" data-aos="fade-up" data-aos-delay="200"><span class="fw-bold text-maroon"><?php the_sub_field('secondary_title') ?></span></p>
                                        <?php endif; ?>
                                        <?php if (have_rows('paragraphs')) : ?>
                                            <?php while (have_rows('paragraphs')) : the_row(); ?>
                                                <p class="lead" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('paragraph') ?></p>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'event_video') : ?>
                <section class="about_video">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-10 mx-auto">
                                <?php if (get_sub_field('main_title')) : ?>
                                    <h1 class="main-title  text-center" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('main_title') ?></h1>
                                <?php endif; ?>
                                <?php if (get_sub_field('text')) : ?>
                                    <p class="lead text-center mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('text') ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('video')) : ?>
                                <div class="col-md-10 col-lg-8 mx-auto">
                                    <div class="img_gold_border img_gold_border_video">
                                        <?php if (get_sub_field('video_poster')) : ?>
                                            <img src="<?php the_sub_field('video_poster') ?>" alt="" loading="lazy" class="video_thumbnail" width="960" height="540">
                                        <?php endif; ?>
                                        <video playsinline>
                                            <source data-src="<?php echo get_sub_field('video')['url'] ?>">
                                        </video>
                                        <button class="play_pause">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/play.webp" alt="">
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('contact-us')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <?php the_title('<h1 class="main-title text-center">', '</h1>'); ?>
                            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo the_title() ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>
                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'half_sec_with_image') : ?>
                <section class="image_with_content reverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row align-items-center">
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto order-xxl-2">
                                            <div class="img_gold_border">
                                                <img src="<?php the_sub_field('image'); ?>" loading="lazy" />
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start order-xxl-1">
                                        <?php
                                        if (get_sub_field('main_title')) {
                                            echo '<h1 class="main-title">' . get_sub_field('main_title') . '</h1>';
                                        }
                                        if (get_sub_field('text')) {
                                            echo '<p class="lead">' . get_sub_field('text') . '</p>';
                                        }
                                        if (have_rows('paragraphs')) : ?>
                                            <?php while (have_rows('paragraphs')) : the_row() ?>
                                                <p class="lead">
                                                    <?php
                                                    if (get_sub_field('paragraph_title')) {
                                                        echo '<span class="fw-bold text-maroon text-decoration-none">' . get_sub_field('paragraph_title') . '</span><br>';
                                                    }
                                                    if (get_sub_field('paragraph')) {
                                                        echo get_sub_field('paragraph');
                                                    }
                                                    ?>
                                                </p>
                                            <?php endwhile; ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'contact_detailed') : ?>
                <section class="contact_detailed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                if (get_sub_field('main_title')) {
                                    echo '<h1 class="main-title text-center">' . get_sub_field('main_title') . '</h1>';
                                }
                                if (get_sub_field('text')) {
                                    echo '<p class="lead text-center">' . get_sub_field('text') . '</p>';
                                }
                                if (get_sub_field('secondary_title')) {
                                    echo '<h2 class="secondary-title text-center">' . get_sub_field('secondary_title') . '</h2>';
                                }
                                ?>
                            </div>
                            <?php if (have_rows('contact_card')) : ?>
                                <div class="col-lg-10 mx-auto">
                                    <div class="content_wrapper">
                                        <?php while (have_rows('contact_card')) : the_row(); ?>
                                            <div class="card">
                                                <?php if (get_sub_field('contact_avatar')) : ?>
                                                    <img class="card-img-top" src="<?php the_sub_field('contact_avatar') ?>" alt="<?php the_sub_field('contact_avatar')['title'] ?>" loading="lazy" />
                                                <?php endif ?>
                                                <div class="card-body">
                                                    <?php
                                                    if (get_sub_field('contact_title')) {
                                                        echo '<h1 class="card-title">' . get_sub_field('contact_title') . '</h1>';
                                                    }
                                                    if (get_sub_field('contact_description')) {
                                                        echo '<p class="card-text">' . get_sub_field('contact_description') . '</p>';
                                                    }
                                                    ?>
                                                    <?php if (have_rows('contact_number')) : ?>
                                                        <?php while (have_rows('contact_number')) : the_row(); ?>
                                                            <div class="phone">
                                                                <a href="<?php the_sub_field('number_link'); ?>" target="_blank">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/webp/phone_maroon.webp" alt="" loading="lazy">
                                                                    <span><?php the_sub_field('number_text'); ?></span>
                                                                </a>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'landline_support') : ?>
                <section class="land_line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto mb-4">
                                <?php if (get_sub_field('main_title')) : ?>
                                    <h1 class="main-title text-center"><?php the_sub_field('main_title') ?></h1>
                                <?php endif; ?>
                                <?php if (get_sub_field('text')) : ?>
                                    <p class="lead text-center"><?php the_sub_field('text') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="col-xxl-10 mx-auto">
                                <div class="row justify-content-between">
                                    <?php if (have_rows('content_left')) : ?>
                                        <div class="col-lg-5">
                                            <?php while (have_rows('content_left')) : the_row(); ?>
                                                <h2 class="secondary-title text-center"><?php the_sub_field('title'); ?></h2>
                                                <p class="lead text-center mb-4 mb-lg-0"><?php the_sub_field('text'); ?></p>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (have_rows('content_right')) : ?>
                                        <div class="col-lg-5">
                                            <?php while (have_rows('content_right')) : the_row(); ?>
                                                <h2 class="secondary-title text-center"><?php the_sub_field('title'); ?></h2>
                                                <p class="lead text-center mb-4 mb-lg-0"><?php the_sub_field('text'); ?></p>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'stay_connected') : ?>
                <section class="image_with_content pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row align-items-center">
                                    <?php if (get_sub_field('image')) : ?>
                                        <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto">
                                            <div class="img_gold_border">
                                                <img src="<?php the_sub_field('image'); ?>" loading="lazy" />
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start">
                                        <?php if (get_sub_field('main_title')) : ?>
                                            <h1 class="main-title mb-2 mb-md-3 mb-lg-4"><?php the_sub_field('main_title'); ?></h1>
                                        <?php endif ?>
                                        <?php if (have_rows('paragraphs')) : ?>
                                            <?php while (have_rows('paragraphs')) : the_row(); ?>
                                                <p class="lead"><?php the_sub_field('paragraph'); ?></p>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'alert') : ?>
                <section class="cta_s1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="content_wrapper">
                                    <?php if (get_sub_field('main_title')) : ?>
                                        <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('text')) : ?>
                                        <p class="lead text-center m-0 text-white"><?php echo the_sub_field('text') ?></p>
                                    <?php endif; ?>
                                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta_1.webp" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('why-choose-us')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <?php the_title('<h1 class="main-title text-center">', '</h1>'); ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo the_title() ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>

                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'simple_text') : ?>
                <section class="simple_text">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h2 class="secondary-title text-center"><?php the_sub_field('main_title') ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('text')) : ?>
                            <p class="lead text-center m-0"><?php the_sub_field('text') ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'why_choose_us_half_sec_img_right') : ?>
                <section class="image_with_content reverse">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('image')) : ?>
                                <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto order-xxl-2">
                                    <div class="img_gold_border">
                                        <img src="<?php the_sub_field('image'); ?>" loading="lazy" />
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if (have_rows('paragraphs')) : ?>
                                <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start order-xxl-1">
                                    <?php while (have_rows('paragraphs')) : the_row() ?>
                                        <p class="lead">
                                            <?php
                                            if (get_sub_field('paragraph_title')) {
                                                echo '<span class="fw-bold">' . get_sub_field('paragraph_title') . '</span><br>';
                                            }
                                            if (get_sub_field('paragraph')) {
                                                echo get_sub_field('paragraph');
                                            }
                                            ?>
                                        </p>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'why_choose_us_half_sec_img_left') : ?>
                <section class="image_with_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if (get_sub_field('image')) : ?>
                                <div class="col-10 col-sm-8 col-md-6 col-lg-5 mx-auto">
                                    <div class="img_gold_border">
                                        <img src="<?php the_sub_field('image'); ?>" loading="lazy" />
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if (have_rows('paragraphs')) : ?>
                                <div class="col-lg-10 col-xxl-7 mx-auto text-center text-xxl-start">
                                    <?php while (have_rows('paragraphs')) : the_row() ?>
                                        <p class="lead">
                                            <?php
                                            if (get_sub_field('paragraph_title')) {
                                                echo '<span class="fw-bold">' . get_sub_field('paragraph_title') . '</span><br>';
                                            }
                                            if (get_sub_field('paragraph')) {
                                                echo get_sub_field('paragraph');
                                            }
                                            ?>
                                        </p>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('payment-methods')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <?php the_title('<h1 class="main-title text-center">', '</h1>'); ?>
                            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo the_title() ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>
                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>


            <?php if (get_row_layout() == 'simple_text') : ?>
                <section class="simple_text">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h2 class="secondary-title text-center" data-aos="fade-up"><?php the_sub_field('main_title') ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('text')) : ?>
                            <p class="lead text-center m-0" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('text') ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'bank_cards') : ?>
                <section class="bank_cards">
                    <div class="container">
                        <?php if (have_rows('cards')) :  ?>
                            <div class="row justify-content-center">
                                <?php while (have_rows('cards')) : the_row(); ?>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="title_wrapper">
                                                    <?php if (get_sub_field('card_title')) : ?>
                                                        <h1 class="card-title"><?php the_sub_field('card_title') ?></h1>
                                                    <?php endif; ?>

                                                    <?php if (get_sub_field('bank_logo')) : ?>
                                                        <img src="<?php the_sub_field('bank_logo') ?>" alt="" class="bank_icon">
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (have_rows('card_details')) : ?>
                                                    <ul>
                                                        <?php while (have_rows('card_details')) : the_row(); ?>
                                                            <li>
                                                                <p class="card-text"><?php the_sub_field('text') ?></p>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/payment_card_bg.webp" alt="" class="payment_card_bg" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/sections_background/obj_bg_8.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'international_methods') : ?>
                <section class="international_methods">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h2 class="secondary-title text-center"><?php the_sub_field('main_title') ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('text')) : ?>
                            <p class="lead text-center"><?php the_sub_field('text') ?></p>
                        <?php endif; ?>
                        <?php if (have_rows('companies')) : ?>
                            <div class="row mt-5">
                                <div class="col-8 col-sm-12 col-md-10 col-xxl-8 mx-auto">
                                    <ul class="methods">
                                        <?php while (have_rows('companies')) : the_row(); ?>
                                            <li>
                                                <a href="<?php the_sub_field('link') ?>">
                                                    <img src="<?php the_sub_field('company_logo') ?>" alt="" loading="lazy">
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/sections_background/obj_bg_2.webp" alt="" loading="lazy">
                </section>

            <?php endif; ?>

            <?php if (get_row_layout() == 'deposit') : ?>
                <section class="cta_s1 bg_maroon">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="content_wrapper">
                                    <?php if (get_sub_field('main_title')) : ?>
                                        <h1 class="main-title text-center text-white"><?php the_sub_field('main_title') ?></h1>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="col-md-8 mx-auto">
                                            <?php if (get_sub_field('text')) : ?>
                                                <p class="lead text-center m-0 text-white"><?php the_sub_field('text') ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/sections_background/obj_bg_cta_1.webp" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                    <div class="obj_ribbon obj_ribbon_bottom obj_ribbon_border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'alert') : ?>
                <section class="cta_s1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="content_wrapper">
                                    <?php if (get_sub_field('main_title')) : ?>
                                        <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('text')) : ?>
                                        <p class="lead text-center m-0 text-white"><?php echo the_sub_field('text') ?></p>
                                    <?php endif; ?>
                                    <img class="bg" src="<?php echo get_template_directory_uri() ?>/assets/img/webp/sections_background/obj_bg_cta_1.webp" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="obj_ribbon obj_ribbon_top obj_ribbon_border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
                </section>
            <?php endif; ?>

            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('testimonials')) : ?>
    <section class="page_banner">
        <div class="container">
            <div class="caption">
                <h1 class="main-title text-center" data-aos="zoom-out">Testimonials</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="./testimonials.html">Testimonials</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/page_banners/page_banner_2.webp" alt="">
        <div class="obj_ribbon_s3">
            <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_top">
            <div>
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
        <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
            <div>
                <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="sliders_wrapper">
                    <div class="slider_single_wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="slider_single_image" data-aos="fade-right">
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_1.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_2.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_3.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_4.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_5.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_6.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_7.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_8.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_9.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_10.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_11.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img_gold_border">
                                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_12.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="slider_single_content" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Here's a revised testimonial from Mr. and Mrs. Noman in Australia</h1>
                                            <p class="lead">"Thanks to this remarkable Muslim matrimonial site, our quest to find a life partner was made significantly easier. It served as a valuable resource for those seeking a truly halal and deeply fulfilling relationship. We wholeheartedly recommend this platform to anyone in search of a life partner who shares their Islamic values. It was instrumental in uniting us and helping us find the love of our lives."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Here's a concise and improved testimonial from Mr. and Mrs. Baqar Siddique From Faisalabad</h1>
                                            <p class="lead">"Thanks to Muslim Matrimonial, my search for a compatible partner was a breeze. The team's patience and support were instrumental in helping me find my life partner. It was an amazing experience, and I highly recommend their services!"</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">here's a shorter and enhanced testimonial from Mr. and Mrs. Salman Sheikh From Islamabad</h1>
                                            <p class="lead">"We had been searching for a compatible partner for a while and were delighted to discover Muslim Matrimonial. The team's patience and support were invaluable, and we found our life partner through their website. An amazing experience! Highly recommended!"</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Here's a revised testimonial from Mr. and Mrs. Kashif From Karachi</h1>
                                            <p class="lead">"I found my perfect match through this Muslim matrimonial platform. It helped me connect with a like-minded partner who shares my values and beliefs."
                                                "The Muslim matrimonial website provided a safe and convenient way for me to meet my soulmate. I'm grateful for the service it offers."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Here's a concise and improved testimonial Mr & Mrs. Syed Fakhar Jafri from Gujrat</h1>
                                            <p class="lead">"Muslim Matrimonial is the best matchmaking website out there. They truly care about finding you a compatible partner." "I appreciate the privacy policies of Muslim Matrimonial. They take the safety of their users very seriously." "Thanks to Muslim Matrimonial, I found the perfect match for my sister. Highly recommend their services!"</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">here's a shorter and enhanced testimonial Mr & Mrs. Hamza from Punjab</h1>
                                            <p class="lead">"Muslim Matrimonial is a trustworthy platform for anyone looking to find their life partner. The team is professional and efficient, I never thought I could find my ideal life partner for my sister through an online platform, but Muslim Matrimonial proved me wrong. The team was supportive, and we found a soulmate for Sister through their website."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Mr. and Mrs. Irfan: from US</h1>
                                            <p class="lead">"We're so grateful to Muslim Matrimonial for helping us find each other. The team's dedication and understanding made the process smooth and enjoyable. We highly recommend their services to all those in search of a lifelong partner."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Sister Amina from Lahore</h1>
                                            <p class="lead">"Muslim Matrimonial made my search for a spouse easy and secure. Their emphasis on user privacy was reassuring, and I found my ideal match through their platform. I'd encourage anyone serious about finding a compatible partner to give them a try."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Mrs. Shahid Client Parents From Burewala</h1>
                                            <p class="lead">"I turned to Muslim Matrimonial to help my Son find a
                                                suitable partner. I was impressed by their dedication to user safety
                                                and privacy. Thanks to their service, we found a wonderful match for
                                                her. Highly recommended!"</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Mrs & Mrs. Yasir Awan from Rawalpindi</h1>
                                            <p class="lead">"The team at Muslim Matrimonial truly understands the importance of faith and compatibility in matchmaking. Their support was exceptional, and I found my soulmate in no time. Thank you for your outstanding services."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Client Brother from Sargodha</h1>
                                            <p class="lead">"Finding a partner who shares your beliefs and values can be a daunting task, but Muslim Matrimonial made it a smooth and enjoyable journey. Their privacy policies are reassuring, and their team is dedicated to helping you find the perfect match."</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item_content">
                                            <h1 class="main-title">Client Mother Reviews From Faisalabad</h1>
                                            <p class="lead">"I had a great experience with Muslim Matrimonial. They understand the importance of faith and values in a relationship, and it reflected in the quality of matches they provided. Highly recommended for serious individuals seeking true compatibility."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="obj_quote" src="<?php echo $themeUrl ?>/assets/img/webp/quote.webp" alt="" loading="lazy" data-aos="zoom-in" data-aos-delay="100">
                    </div>
                    <div class="slider_testimonials_bullets" data-aos="fade-up" data-aos-delay="500">
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_1.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_2.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_3.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_4.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_5.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_6.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_7.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_8.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_9.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_10.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_11.webp" alt="" loading="lazy">
                        </div>
                        <div class="item">
                            <img src="<?php echo $themeUrl ?>/assets/img/webp/testmonial_12.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_6.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
    </section>
    <section class="cta">
        <div class="container">
            <h1 class="main-title text-center text-white" data-aos="fade-up">Find your Perfect Match the Halal Way</h1>
            <button type="button" class="btn btn-primary btn-lg mx-auto d-flex" data-aos="zoom-out" data-aos-delay="300">Find Now</button>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
    </section>
<?php
elseif (is_page('faq')) : ?>
    <?php if (have_rows('page_builder')) : ?>
        <?php while (have_rows('page_builder')) : the_row(); ?>
            <?php if (get_row_layout() == 'banner') : ?>
                <section class="page_banner">
                    <div class="container">
                        <div class="caption">
                            <?php the_title('<h1 class="main-title text-center">', '</h1>'); ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Frequently Asked Questions</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php if (get_sub_field('background_image')) : ?>
                        <img class="bg" src="<?php the_sub_field('background_image'); ?>" loading="lazy" />
                    <?php endif ?>

                    <div class="obj_ribbon_s3">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                        <div>
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                        <div>
                            <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                            <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'faq_sec') : ?>
                <section class="faq">
                    <div class="container">
                        <div class="content_wrapper">
                            <div class="row">
                                <?php if (get_sub_field('image')) : ?>
                                    <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xxl-6 mx-auto">
                                        <div class="img_gold_border">
                                            <img src="<?php the_sub_field('image') ?>" loading="lazy" />
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-10 col-lg-8 col-xxl-6 mx-auto">
                                    <?php if (get_sub_field('main_title')) : ?>
                                        <h1 class="main-title"><?php the_sub_field('main_title') ?></h1>
                                    <?php endif; ?>
                                    <?php $i = 1; ?>
                                    <?php if (have_rows('accordions')) : ?>
                                        <div class="accordion" id="faq">
                                            <?php while (have_rows('accordions')) : the_row(); ?>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading_<?php echo $i; ?>">
                                                        <button class="accordion-button <?php if ($i != 1) echo "collapsed" ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq_<?php echo $i; ?>" aria-expanded="false" aria-controls="faq_<?php echo $i; ?>">
                                                            <?php the_sub_field('accordion_title') ?>
                                                        </button>
                                                    </h2>
                                                    <div id="faq_<?php echo $i; ?>" class="accordion-collapse collapse <?php if ($i === 1) echo "show" ?>" aria-labelledby="heading_<?php echo $i; ?>" data-bs-parent="#faq">
                                                        <div class="accordion-body"><?php the_sub_field('accordion_text'); ?></div>
                                                    </div>
                                                </div>
                                                <?php $i++ ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_6.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
            <?php if (get_row_layout() == 'call_to_action') : ?>
                <section class="cta">
                    <div class="container">
                        <?php if (get_sub_field('main_title')) : ?>
                            <h1 class="main-title text-center text-white"><?php echo the_sub_field('main_title') ?></h1>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg mx-auto d-flex">Find More</button>
                    </div>
                    <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_cta.webp" alt="" loading="lazy">
                    <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
                    <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy"></div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
elseif (is_page('blog')) :
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile;
elseif (is_page('register') || is_page('login') || is_page('password-reset')) : ?>
    <section class="register login password_reset">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="content_wrapper">
                    <a href="<?php echo $siteUrl ?>" class="logo d-none">
                        <img src="<?php echo $themeUrl ?>/assets/img/webp/logo.webp" alt="">
                    </a>
                    <h1 class="main-title"><span class="small text-dark">Register To</span><br>Muslim Matrimonial</h1>
                    <p class="lead">Best wedding matrimony It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.</p>
                    <?php
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 pe-0">
                <div class="img_side_stick">
                    <img class="bg_login_register" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_login_register.webp" alt="" loading="lazy">
                </div>
            </div>
        </div>
        <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/sections_background/obj_bg_10.webp" alt="" loading="lazy">
        <div class="obj_ribbon obj_ribbon_top"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
        <div class="obj_ribbon obj_ribbon_bottom"><img class="ribbon_img" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt="" loading="lazy"></div>
    </section>
    <?php
elseif (is_page('user') || is_page('account')) :
    while (have_posts()) : the_post(); ?>
        <section class="page_banner">
            <div class="container">
                <div class="caption">
                    <h1 class="main-title text-center" data-aos="zoom-out">My Account</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo $siteUrl ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span class="text-white">My Account</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <img class="bg" src="<?php echo $themeUrl ?>/assets/img/webp/page_banners/page_banner_2.webp" alt="">
            <div class="obj_ribbon_s3">
                <img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_big.webp" alt="" loading="lazy">
            </div>
            <div class="obj_ribbon_s2 obj_ribbon_s2_top">
                <div>
                    <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                </div>
            </div>
            <div class="obj_ribbon_s2 obj_ribbon_s2_bottom">
                <div>
                    <img class="outer" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                    <img class="inner" src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_yellow.webp" alt="" loading="lazy">
                </div>
            </div>
        </section>
        <section class="user_details">
            <div class="container">
                <?php get_template_part('template-parts/content', 'page'); ?>

            </div>
            <div class="obj_ribbon obj_ribbon_top"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
            <div class="obj_ribbon obj_ribbon_bottom"><img src="<?php echo $themeUrl ?>/assets/img/webp/obj_ribbon_maroon.webp" alt=""></div>
        </section>
<?php
    endwhile;
else :
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile;
endif; ?>
<?php
//get_sidebar();
get_footer();
