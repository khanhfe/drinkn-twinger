</body>
<footer class="footer typography">

    <div class="container_common">
        <p class="_join-title">Join our community</p>
        <p class="_sub-join">Share on social an earn more token</p>
        <div class="content_common">
            <div class="content">
                <div class="soial">
                    <a href="https://twitter.com/DrinkN_M2E" target="_blank">
                        <img src="<?php echo THEME_ASSETS . '/homes/icon-twitter.png'; ?>">
                    </a>
                    <a href="https://t.me/#" target="_blank">
                        <img src="<?php echo THEME_ASSETS . '/homes/icon-tele.png'; ?>">
                    </a>
                    <a href="https://discord.com/channels/972329081548996708/972329081548996711" target="_blank">
                        <img src="<?php echo THEME_ASSETS . '/homes/ic-discord.png'; ?>">
                    </a>
                </div>
                <p>Copyright © 2022, DrinkN. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function() {
        $('.js-swiper-ss2').each(function(index) {

            console.log(index);
            var swiper = `swiper${index}`;
            swiper = new Swiper($(this), {
                slidesPerView: 2,
                spaceBetween: 35,
                autoplay: {
                    delay: 0,
                },
                loop: true,
                speed: 5000,
                initialSlide: 2,

            });
        });
    });
</script>