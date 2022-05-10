<?php

define('THEME_ASSETS',   '../assets/images');
define('HOME_URL',   'https://catchcrypto.io');

define('FAVICON',  '/images/favicon.png');
define('LOGO_LOGIN_ADMIN', '/images/logo-admin.png');
define('SCREEN_SHOT', '/screenshot.png');
define('NOT_IMAGE',  '/images/image-placeholder.png');
define('FACEBOOK_APP_ID', '');

$_siteInfo = array(
    'app_id' => FACEBOOK_APP_ID, // App Name: WEB
    'type' => 'website', // Need to be changed with each type of pages
    'title' => "Catch Crypto - Mining by your way", // Site Title
    'url' =>  HOME_URL, // Permalink
    'image' => SCREEN_SHOT, // Screenshot, Thumbnail
    'description' => "Catch Crypto is an NFT game giving players the opportunity to play and earn rewards at the same time with the classic gold mining game concept ", // Tagline, Excerpt
    'author' => 'Nguyendp - Twinger', // Change manually
);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <meta name="googlebot" content="noindex, nofollow"> -->



    <meta name="author" content="<?php echo str_replace('"', '', $_siteInfo['author']); ?>" />
    <meta name="description" content="<?php echo str_replace('"', '', $_siteInfo['description']); ?>" />
    <meta property="fb:app_id" content="<?php echo $_siteInfo['app_id']; ?>" />
    <meta property="og:type" content='<?php echo $_siteInfo['type']; ?>' />
    <meta property="og:title" content="<?php echo str_replace('"', '', $_siteInfo['title']); ?>" />
    <meta property="og:url" content="<?php echo $_siteInfo['url']; ?>" />
    <meta property="og:image" content="<?php echo $_siteInfo['image']; ?>" />
    <meta property="og:description" content="<?php echo str_replace('"', '', $_siteInfo['description']); ?>" />
    <meta name="thumbnail" content="<?php echo $_siteInfo['image']; ?>" />
    <title>Catch Crypto - Mining by your way</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/favicon.png">


    <link rel="stylesheet" href="../assets/stylesheets/sass/dist/partials.css">
    <link rel="stylesheet" href="../assets/stylesheets/sass/dist/main.css">

    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/bower_components/aos/dist/aos.css">
    <link rel="stylesheet" href="../assets/bower_components/Swiper/dist/css/swiper.min.css">


    <script src="../assets/scripts/main.js" type="text/javascript"></script>
    <script src="../assets/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="../assets/bower_components/aos/dist/aos.js" type="text/javascript"></script>
    <script src="../assets/bower_components/Swiper/dist/js/swiper.min.js" type="text/javascript"></script>





    <script src="assets/scripts/main.js" type="text/javascript"></script>




</head>

<body>

    <header>
        <div class="header" id="header-main-ui">

            <img class="decor_header" src="<?php echo THEME_ASSETS . '/home/decor_header.png'; ?>">
            <ul class="_main-menu __left">

                <li class="current_page_item"> <a href="#" target="" data-section="section_1">IGO</a></li>
                <li><a href="#" target="" data-section="section_2">Game story</a></li>

                <li><a href="#" target="" data-section="section_3">Vision & Mission</a></li>

                <li><a href="#" target="" data-section="section_4">Game features</a></li>
                <li><a href="#" target="" data-section="section_5">Game play</a></li>

            </ul>
            <a href="<?php echo HOME_URL; ?>" class="_logo"><img src="<?php echo THEME_ASSETS . '/home/logo.svg'; ?>"></a>
            <ul class="_main-menu __right">
                <li><a href="#" target="" data-section="section_6">Mechanism</a></li>
                <li><a href="#" target="" data-section="section_7">Tokenomics</a></li>
                <li><a href="#" target="" data-section="section_8">Roadmap</a></li>
                <li><a href="#" target="" data-section="section_9">Our Team</a></li>
                <li><a href="#" target="" data-section="footer">Partners</a></li>
            </ul>
        </div>
        <div class="header-menu-mobile">
            <a href="<?php echo HOME_URL; ?>" class="_logo"><img src="<?php echo THEME_ASSETS . '/home/logo.svg'; ?>"></a>
        </div>
        <div class="humberger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <div class="text">Menu</div>
        </div>
        <div class="_bg-outside">

        </div>
        <!-- <div class="scrollTop">
            <span>
                <img src="<?php echo THEME_ASSETS . '/home/nextw.png'; ?>">
            </span>
        </div> -->
    </header>






    <?php //include_once './partials/browser-redirect.php';
    ?>

    <script>
        jQuery(document).ready(function($) {

            var screen_width = jQuery(window).width();
            if (screen_width >= 1280) {
                var iScrollPos = 0;
                const headerMainUi = $('#header-main-ui');
                $(window).scroll(function() {
                    var iCurScrollPos = $(this).scrollTop();
                    if (iCurScrollPos < iScrollPos) {
                        headerMainUi.removeClass('header-hide');
                    } else {
                        if (iCurScrollPos == 0) {
                            headerMainUi.removeClass('scroll-top');
                            headerMainUi.removeClass('header-hide');
                        } else {
                            headerMainUi.addClass('header-hide');
                            headerMainUi.addClass('scroll-top');
                        }
                    };
                    if ($(this).scrollTop() <= 0) {
                        headerMainUi.removeClass('scroll-top');
                        headerMainUi.removeClass('header-hide');
                    }
                    iScrollPos = iCurScrollPos;
                });


            }


            $(".humberger").click(function(e) {
                $(document.body).toggleClass("scoll");
                $(".header").toggleClass("hide");
                $("._bg-outside").toggleClass("hide");

                $(this).toggleClass("show");


            });
            var screen_width = $(window).width();
            $('.header ._main-menu li a').each(function(event) {
                $(this).click(function() {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(this).parent().addClass("current_page_item");
                    var scroll = $(this).attr('data-section');
                    $('html, body').animate({
                        scrollTop: $("." + scroll).offset().top
                    }, 800)
                });
            });


            $(window).scroll(function() {
                var aTop = $(".footer").offset().top;
                // console.log($(".footer").offset().top);
                // console.log("window scoll", $(this).scrollTop())
                if ($(this).scrollTop() >= ($(`.footer `).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="footer"]`).parent().addClass("current_page_item");


                } else if ($(this).scrollTop() >= ($(`.section_9`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_9"]`).parent().addClass("current_page_item");


                } else if ($(this).scrollTop() >= ($(`.section_8`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_8"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= ($(`.section_7`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_7"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= ($(`.section_6`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_6"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= $(`.section_5`).offset().top) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_5"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= ($(`.section_4`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_4"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= ($(`.section_3`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_3"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= ($(`.section_2`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_2"]`).parent().addClass("current_page_item");



                } else if ($(this).scrollTop() >= $(`.section_1`).offset().top) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_1"]`).parent().addClass("current_page_item");



                } else {

                    // console.log("iii breack>>>", i)
                }

            });



        });
    </script>