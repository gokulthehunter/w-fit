jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        function productFeaturesCarousel1 () {
            if ($('.product-features-carousel1').length) {
                var productFeaturesCarousel1Swiper = new Swiper('.product-features-carousel1', {
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