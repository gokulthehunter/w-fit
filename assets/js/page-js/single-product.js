jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        function sleepScoreCalculatorPopupClose() {
            $('.sleep-score-calculator-popup--close-button').on('click', function (e) {
                e.preventDefault();
                $(this).closest('.sleep-score-calculator-popup').fadeOut(500);
                $('.body-overlay').fadeOut(500);

                $("body").removeClass('sleep-score-popup-open-scroll-lock');
            });

            $('.body-overlay').on('click', function () {
                $('.sleep-score-calculator-popup').fadeOut(500);
                $(this).fadeOut(500);

                $("body").removeClass('sleep-score-popup-open-scroll-lock');
            });
        }

        function sleepScoreCalculatorPopupAppear() {
            setTimeout(function () {
                $('.sleep-score-calculator-popup').fadeIn(500);
                $('.body-overlay').fadeIn(500);

                $("body").addClass('sleep-score-popup-open-scroll-lock');
            }, 5000);
        }

        // Product Image Carousel Initialization
        function productImageCarousel() {
            if ($('.product-image-carousel').length) {
                var productImageCarouselSwiper = new Swiper('.product-image-carousel', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    // autoplay: {
                    //     delay: 5000,
                    // },
                    renderBullet: function (className) {
                        return '<span class="' + className + '"></span>';
                    },
                    
                });
            }
        }

        // Product Image Carousel Pagination
        setTimeout(function () { 
            $('.product-image-carousel').each(function(){
                var slideCount = $(this).find('.swiper-slide').length;
                
                for (var i = 0; i < slideCount; i++) {
                    var bgImg = $(this).find('.swiper-slide').eq(i).attr('data-bg');
                    $(this).find('.swiper-slide').eq(i).css('background-image', 'url(' + bgImg + ')');
                    // $(this).find('.swiper-pagination .swiper-pagination-bullet').eq(i).append('<img class="img-fluid" src="'+bgImg+'" alt="wakefit">');
                    $(this).closest('.product-image-carousel-wrap').find('.swiper-pagination .swiper-pagination-bullet').eq(i).css('background-image', 'url(' + bgImg + ')');
                }
            });
        }, 1500);

        function productFeaturesCarousel1() {
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

        //To-top Position Adjustment On Scroll
        $('.footer').waypoint(function (direction) {
            if (direction === 'down')
                $(".select-mattress").animate({
                    opacity: '0',
                    visibility: 'hidden'
                });
            else
                $(".select-mattress").animate({
                    opacity: '1',
                    visibility: 'visible'
                });
        }, {
            offset: $(window).height()
        });

        // Select Mattress Popup Functionalities
        function selectMattressPopup() {  
            $('.select-mattress-popup--category--size-guide__popup-link').on('click', function (e) {  
                e.preventDefault();
                $('.know-mattress-size-popup-block').fadeIn(500);
                $('.body-overlay').fadeIn(500);
            });

            $('.know-mattress-size-popup-block--close-button').on('click', function (e) {
                e.preventDefault();
                $('.know-mattress-size-popup-block').fadeOut(500);
                $('.body-overlay').fadeOut(500);
            });

            $('.body-overlay').on('click', function () {
                $('.know-mattress-size-popup-block').fadeOut(500);
                $('.body-overlay').fadeOut(500);
            });

            $('.select-mattress-popup--category--option').on('click', function (e) { 
                e.preventDefault();
                $(this).closest('.select-mattress-popup--category--option--wrap').find('.select-mattress-popup--category--option').removeClass('active');
                $(this).addClass('active');
            });
        }

        $('.select-mattress--button').on('click', function (e) {
            e.preventDefault();
            $(this).find('a').text('Add To Cart');
            $('.select-mattress-popup').fadeIn(500);
            $('.select-mattress-popup--know-measure-size').css('bottom', 0);
        });

        $('.select-mattress-popup--close-button').on('click', function (e) {
            e.preventDefault();
            $('.select-mattress--button').find('a').text('Select Mattress');
            $('.select-mattress-popup').fadeOut(500);
            $('.select-mattress-popup--know-measure-size').css('bottom', '-100px');
        });

        function selectMattressDesktop() {

            $('.select-mattress--block--select--option').fadeOut(0);
            $('.select-mattress--block--select--wrap--selected-content').on('click', function () {
                $('.select-mattress--block--select--option').fadeIn(100);
            })

            $('.select-mattress--block--select--option ul li').on('click', function () {
                if ($(this).hasClass('active')) {
                    $('.select-mattress--block--select--option').fadeOut(100);
                } else {
                    $('.select-mattress--block--select--option ul li').removeClass('active');
                    $(this).addClass('active');
                    var textVal = $(this).find('.select-mattress--block--select--option--select-text').attr('data-text');
                    $('.select-mattress--block--select--wrap--selected-content .select-mattress--block--select--option--select-text').text(textVal);
                    $('.select-mattress--block--select--option').fadeOut(100);
                }
            });
        }


        // DOCUMENT READY STARTS
        $(document).ready(function () {

            selectMattressDesktop();

            sleepScoreCalculatorPopupClose();

            sleepScoreCalculatorPopupAppear();

            productImageCarousel();

            productFeaturesCarousel1();

            productFeaturesCarousel2();

            selectMattressPopup();


        }); // DOCUMENT READY ENDS

    })(jQuery);
});