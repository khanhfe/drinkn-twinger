<section class="section_5 ">


    <div class="container_common">
        <div class="content_common">
            <div class="_the-content is-flex">

                <h2 class="_title" data-aos="zoom-in-down">

                    Game Modes
                </h2>
                <div class="_left " id="js-ss5 ">

                    <div class="swiper-container" id="js-swiper-ss5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-slide="1">


                                <h3 class="_title-slide" data-aos="zoom-in-down">
                                    Normal Mode

                                </h3>
                                <div class="_content">
                                    <p>In Normal Mode, users are given NFT Drinking Cups and can earn tokens by moving. To obtain DRN, users must have Stamina that only recharges after users get an NFT Drinking Cup. To start, users need to select a Drinking Cup in the app and press the Start button.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="2">


                                <h3 class="_title-slide" data-aos="zoom-in-down">
                                    Normal Mode

                                </h3>
                                <div class="_content">
                                    <p>In Normal Mode, users are given NFT Drinking Cups and can earn tokens by moving. To obtain DRN, users must have Stamina that only recharges after users get an NFT Drinking Cup. To start, users need to select a Drinking Cup in the app and press the Start button.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="3">


                                <h3 class="_title-slide" data-aos="zoom-in-down">
                                    Normal Mode

                                </h3>
                                <div class="_content">
                                    <p>In Normal Mode, users are given NFT Drinking Cups and can earn tokens by moving. To obtain DRN, users must have Stamina that only recharges after users get an NFT Drinking Cup. To start, users need to select a Drinking Cup in the app and press the Start button.</p>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="4">


                                <h3 class="_title-slide" data-aos="zoom-in-down">
                                    Normal Mode

                                </h3>
                                <div class="_content">
                                    <p>In Normal Mode, users are given NFT Drinking Cups and can earn tokens by moving. To obtain DRN, users must have Stamina that only recharges after users get an NFT Drinking Cup. To start, users need to select a Drinking Cup in the app and press the Start button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="_remote-slide">

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev" id="js-prev-ss5">
                                <img class="" src="<?php echo THEME_ASSETS . '/homes/next.png'; ?>">

                            </div>
                            <div class="swiper-pagination" id="js-pagination-ss5"></div>
                            <div class="swiper-button-next" id="js-next-ss5">
                                <img class="" src="<?php echo THEME_ASSETS . '/homes/prev.png'; ?>">


                            </div>
                        </div>

                    </div>


                </div>
                <div class="_right is-flex">

                    <div class="swiper-container" id="js2-swiper-ss5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-slide="1">


                                <div class="_decor">
                                    <img class="" src="<?php echo THEME_ASSETS . '/homes/image-ss4.png'; ?>">
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="2">


                                <div class="_decor">
                                    <img class="" src="<?php echo THEME_ASSETS . '/homes/image-ss4.png'; ?>">
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="3">

                                <div class="_decor">
                                    <img class="" src="<?php echo THEME_ASSETS . '/homes/image-ss4.png'; ?>">
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide="4">

                                <div class="_decor">
                                    <img class="" src="<?php echo THEME_ASSETS . '/homes/image-ss4.png'; ?>">
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>

</section>
<script>
    jQuery(document).ready(function() {
        var swiper_ss5a = new Swiper("#js-swiper-ss5", {

            slidesPerView: 1,
            spaceBetween: 35,
            autoplay: {
                delay: 5000,

            },
            pagination: {
                el: "#js-pagination-ss5 ",
                type: "fraction",
            },
            navigation: {
                nextEl: "#js-prev-ss5",
                prevEl: "#js-next-ss5",
            },
            initialSlide: 1,

        });
        var swiper_ss5b = new Swiper("#js2-swiper-ss5", {
            slidesPerView: 1,
            spaceBetween: 35,
            autoplay: {
                delay: 5000,
            },
            effect: "fade",
            initialSlide: 1,

        });

        swiper_ss5a.on('slideChange', function() {
            swiper_ss5a.update();
            let slide_active = $("#js-swiper-ss5").find(".swiper-slide-active").attr("data-slide")
            console.log("slide_active", slide_active);
            swiper_ss5b.update();
            swiper_ss5b.slideTo(slide_active - 1);
        });

    });
</script>