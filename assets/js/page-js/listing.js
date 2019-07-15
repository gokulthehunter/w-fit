jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";
            var vW = $(window).width();
            var vH = $(window).height();

        function productFeaturesCarousel1 () {

            if(vW > 991) {
                var widthDifference = (vW - $('.dummy div').width()) / 2;
                $('.product-features-carousel1-wrap').css('padding-left', widthDifference);
            }

            if ($('.product-features-carousel1').length) {
                var productFeaturesCarousel1Swiper = new Swiper('.product-features-carousel1', {
                    slidesPerView: 'auto',
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    spaceBetween: 50,
                    breakpoints: {
                        // when window width is <= 991px
                        991: {
                            slidesPerView: 1,
                        }
                    }
                });
            }
        }

        function productFeaturesCarousel2() {
            if ($('.product-features-carousel2').length) {
                var productFeaturesCarousel2Swiper = new Swiper('.product-features-carousel2', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    // autoplay: {
                    //     delay: 5000,
                    // },
                    spaceBetween: 50,
                });
            }
        }

        function offerPopupClose (){
            $('.offer-popup--close-button').on('click', function (){
                $(this).closest('.offer-popup').fadeOut(500);
                $('.body-overlay').fadeOut(500);

                $("body").css("overflow", "scroll");
            });

            $('.body-overlay').on('click', function (){
                $('.offer-popup').fadeOut(500);
                $(this).fadeOut(500);

                $("body").css("overflow", "scroll");
            });
        }

        function offerPopupAppear () {
            setTimeout( function () { 
                $('.offer-popup').fadeIn(500);
                $('.body-overlay').fadeIn(500);

                $("body").css("overflow", "hidden");
            }, 5000);
        }


        // DOCUMENT READY STARTS
        $(document).ready(function () {

            offerPopupClose();

            offerPopupAppear();

            productFeaturesCarousel1();

            productFeaturesCarousel2();

        }); // DOCUMENT READY ENDS

    })(jQuery);
});