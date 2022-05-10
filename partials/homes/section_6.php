<section class="section_6">
    <div class="container_common">
        <div class="content_common">
            <h2 class="_title" data-aos="zoom-in-down">
                Cup NFT
            </h2>
            <p class="sub-title" data-aos="zoom-in-up" data-aos-delay="200">There are more drinking cup types; each type is designed to suit different drinks depending on user preferences</p>
            <div class="main-cup">
                <img data-aos="zoom-in" src="<?php echo THEME_ASSETS . '/homes/main-cup-nft.png'; ?>">
            </div>
            <div class="lists-other_cup">
                <div class="_slide" id="slide_lists_cup">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-aos="fade-left" data-aos-delay="0">
                                <div class="item-cup">
                                    <div class="img-cup"><img src="<?php echo THEME_ASSETS . '/homes/cup-tea.png'; ?>" alt></div>
                                    <div class="info">
                                        <h3>Teacup</h3>
                                        <p>1-6 Km/h</p>
                                        <p>4 DRN/1 Energy spent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-left" data-aos-delay="150">
                                <div class="item-cup">
                                    <div class="img-cup"><img src="<?php echo THEME_ASSETS . '/homes/cocktail.png'; ?>" alt></div>
                                    <div class="info">
                                        <h3>cocktail glass</h3>
                                        <p>4-10 Km/h</p>
                                        <p>5 DRN/1 Energy spent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-left" data-aos-delay="300">
                                <div class="item-cup">
                                    <div class="img-cup"><img src="<?php echo THEME_ASSETS . '/homes/beer.png'; ?>" alt></div>
                                    <div class="info">
                                        <h3>beer mug</h3>
                                        <p>8 - 20 Km/h</p>
                                        <p>6 DRN/1 Energy spent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-left" data-aos-delay="450">
                                <div class="item-cup">
                                    <div class="img-cup"><img src="<?php echo THEME_ASSETS . '/homes/cocktail-2.png'; ?>" alt></div>
                                    <div class="info">
                                        <h3>Cocktail Glass</h3>
                                        <p>8 - 20 Km/h</p>
                                        <p>6 DRN/1 Energy spent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-left" data-aos-delay="600">
                                <div class="item-cup">
                                    <div class="img-cup"><img src="<?php echo THEME_ASSETS . '/homes/collins-glass.png'; ?>" alt></div>
                                    <div class="info">
                                        <h3>Collins glass</h3>
                                        <p>1 - 20 Km/h</p>
                                        <p>4 DRN/1 Energy spent</p>
                                    </div>
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
        var section6 = new Swiper("#slide_lists_cup .swiper-container", {
            slidesPerView: 5,
            spaceBetween: 46,
            speed: 800,
            autoplay: {
                delay: 4000,
            },
            // effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 46
                }
            }
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