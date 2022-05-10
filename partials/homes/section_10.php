<section class="section_10 ">
    <div class="container_common">
        <div class="content_common">
            <div class="container-flex">
                <div class="_content-left">
                    <h2 class="_title" data-aos="zoom-in-down">
                        Partners
                    </h2>
                </div>
                <div class="_content-right">
                    <div class="_slide" id="slide_partner">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img data-aos="zoom-in-up" src="<?php echo THEME_ASSETS . '/homes/partner.png'; ?>" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var section10 = new Swiper("#slide_partner .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 0,

            speed: 800,
            autoplay: {
                delay: 4000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            // pagination: {
            //     el: '#h_section1  .swiper-pagination',
            //     type: 'bullets',
            //     clickable: 'true',
            // },
            // navigation: {
            //     nextEl: "#h_section1 .swiper-button-next",
            //     prevEl: "#h_section1 .swiper-button-prev",
            // },
        });
    });
</script>