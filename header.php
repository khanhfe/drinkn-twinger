<?php

define('THEME_ASSETS',   './assets/images');
define('HOME_URL',   'https://drinkn.io/');

define('FAVICON',  '/images/favicon.png');
define('LOGO_LOGIN_ADMIN', '/images/logo-admin.png');
define('SCREEN_SHOT', '/screenshot.png');
define('NOT_IMAGE',  '/images/image-placeholder.png');
define('FACEBOOK_APP_ID', '');

$_siteInfo = array(
    'app_id' => FACEBOOK_APP_ID, // App Name: WEB
    'type' => 'website', // Need to be changed with each type of pages
    'title' => "", // Site Title
    'url' =>  HOME_URL, // Permalink
    'image' => SCREEN_SHOT, // Screenshot, Thumbnail
    'description' => "DRINKN is a Web3 lifestyle app with Social-Fi and Game-Fi elements. DRINKN aims to combine move-to-earn and drink–to-earn to happen in real life in order to lead a healthy lifestyle for people all over the world and most importantly, they can make profit while playing games.", // Tagline, Excerpt
    'author' => 'DrinkN', // Change manually
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
    <title>Drink, Move to earn</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon.svg">
    <link rel="stylesheet" href="./assets/stylesheets/sass/dist/partials.css">
    <link rel="stylesheet" href="./assets/stylesheets/sass/dist/main.css">
    <link rel="stylesheet" href="./assets/bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/bower_components/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/bower_components/Swiper/dist/css/swiper.min.css">
    <script src="./assets/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="./assets/bower_components/aos/dist/aos.js" type="text/javascript"></script>
    <script src="./assets/bower_components/Swiper/dist/js/swiper.min.js" type="text/javascript"></script>
    <!-- <script src="assets/scripts/main.js" type="text/javascript"></script> -->


</head>

<body>

    <header>
        <div class="header" id="header-main-ui">
            <a href="/"><img class="decor_header" src="<?php echo THEME_ASSETS . '/logo-header.svg'; ?>"></a>
            <ul class="_main-menu">
                <li><a href="javascript:void(0)" target data-section="section_3">About DrinkN</a></li>
                <li><a href="javascript:void(0)" target data-section="section_4">Vission & Mission</a></li>
                <li><a href="javascript:void(0)" target data-section="section_5">Games Modes</a></li>
                <li><a href="javascript:void(0)" target data-section="section_6">Cup NFT</a></li>
                <li><a href="javascript:void(0)" target data-section="section_7">Drink to earn mechanism</a></li>
                <li><a href="javascript:void(0)" target data-section="section_8">Tokennomics</a></li>
                <li><a href="javascript:void(0)" target data-section="section_9">Road Map</a></li>
                <li><a href="javascript:void(0)" target data-section="section_10">Partner</a></li>
            </ul>
            <div class="humberger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="_bg-outside"> </div>
        </div>

    </header>






    <?php //include_once './partials/browser-redirect.php';
    ?>

    <script>
        jQuery(document).ready(function($) {
            AOS.init({
                offset: 0,
                delay: 0,
                duration: 1500,
                once: true,
                disable: 'mobile',
            });
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
                    $('.header').removeClass('hide')
                    $(document.body).toggleClass("scoll");
                    $('.humberger').removeClass('show')
                    $("._bg-outside").removeClass("hide");
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
                    $('.header .humberger').addClass('green')

                } else if ($(this).scrollTop() >= ($(`.section_8`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_8"]`).parent().addClass("current_page_item");
                    $('.header .humberger').addClass('green')


                } else if ($(this).scrollTop() >= ($(`.section_7`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_7"]`).parent().addClass("current_page_item");
                    $('.header .humberger').addClass('green')


                } else if ($(this).scrollTop() >= ($(`.section_6`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_6"]`).parent().addClass("current_page_item");
                    $('.header .humberger').addClass('green')


                } else if ($(this).scrollTop() >= $(`.section_5`).offset().top) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_5"]`).parent().addClass("current_page_item");
                    $('.header .humberger').addClass('green')


                } else if ($(this).scrollTop() >= ($(`.section_4`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_4"]`).parent().addClass("current_page_item");
                    $('.header .humberger').removeClass('green')


                } else if ($(this).scrollTop() >= ($(`.section_3`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_3"]`).parent().addClass("current_page_item");
                    $('.header .humberger').addClass('green')


                } else if ($(this).scrollTop() >= ($(`.section_2`).offset().top) - 300) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_2"]`).parent().addClass("current_page_item");
                    $('.header .humberger').removeClass('green')


                } else if ($(this).scrollTop() >= $(`.section_1`).offset().top) {
                    $('.header ._main-menu li').removeClass("current_page_item");
                    $(`[data-section="section_1"]`).parent().addClass("current_page_item");
                    $('.header .humberger').removeClass('green')


                } else {

                    // console.log("iii breack>>>", i)
                }

            });



        });
    </script>
    <script>
        //js aos xu ly hieu ung
    </script>