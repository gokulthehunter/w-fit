jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        var vW = $(window).width();
        var vH = $(window).height();

        function sectionBgImg() {
            $('.section-bgimg').each(function() {
                var sectionBgImg = $(this).attr('data-sectionBgImg');
                $(this).css('background-image','url('+sectionBgImg+')');
            });
        }

        $('.select-mattress-popup--know-measure-size__button').on('click', function (e) {
            e.preventDefault();
            $('.know-measure-size-popup').fadeIn(500);
            $('.body-overlay').fadeIn(500);
            $('body').addClass('know-measure-size-popup-open-scroll-lock');
        });

        $('.know-measure-size-popup--close-button, .body-overlay').on('click', function () {
            $(this).closest('.know-measure-size-popup').fadeOut(500);
            $('.body-overlay').fadeOut(500);
            $('body').removeClass('know-measure-size-popup-open-scroll-lock');
        });



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

        function featuresBlockAccordianBlock() {
            if(vW < 992) {
                if($('.features-block.accordian-block').length) {
                    var _this = $('.features-block.accordian-block');
                    _this.find('.features-block--each--content').slideUp();
            
                    _this.find('.features-block--each').on('click',function() {
                        var __this = $(this);
                        if(__this.hasClass('active')){
                            __this.removeClass('active');
                            __this.find('.features-block--each--content').slideUp(200);
                        } else {
                            _this.find('.features-block--each--content').slideUp(200);
                            $('.features-block--each').removeClass('active');
                            __this.addClass('active');
                            __this.find('.features-block--each--content').slideDown(200);
                        }
                        
                    });
                }
            }
        }


        function commonCarouselInit() {
            var sliders = [];
            $('.swiper-container').each(function(index, element){
                $(this).addClass('s'+index);
                $(this).find(".swiper-button-prev").addClass("btn-prev-" + index);
                $(this).find(".swiper-button-next").addClass("btn-next-" + index);
                var centeredSlidesVal = $(this).attr('data-centeredSlides');
                if(centeredSlidesVal === 'true') {
                    centeredSlidesVal = true;
                } else {
                    centeredSlidesVal = false;
                }
                
                var slider = new Swiper('.s'+index, { 
                    slidesPerView: $(this).attr('data-slidesPerView'),
                    spaceBetween: parseInt($(this).attr('data-spaceBetween'), 10),
                    loop: $(this).attr('data-loop'),
                    centeredSlides: centeredSlidesVal,
                    // If we need pagination
                    pagination: {
                      el: '.swiper-pagination',
                      clickable: true
                    },
                    //If we need navigation
                    navigation: {
                        nextEl: ".btn-next-" + index,
                        prevEl: ".btn-prev-" + index
                    },
                    autoplay: {
                        delay: $(this).attr('data-delay'),
                        disableOnInteraction:false,
                    },
                    breakpoints: {
                        // when window width is <= 320px
                        320: {
                            slidesPerView: $(this).attr('data-slidesPerView320'),
                            centeredSlides: centeredSlidesVal,
                        },
                        // when window width is <= 480px
                        480: {
                            slidesPerView: $(this).attr('data-slidesPerView480'),
                            centeredSlides: centeredSlidesVal,
                        },
                        // when window width is <= 640px
                        640: {
                            slidesPerView: $(this).attr('data-slidesPerView640'),
                            centeredSlides: $(this).attr('data-centeredSlides'),
                        },
                        // when window width is <= 991px
                        991: {
                            slidesPerView: $(this).attr('data-slidesPerView991'),
                            centeredSlides: $(this).attr('data-centeredSlides'),
                        }
                    }
                 });
                 if($(this).attr('data-autoplay')==='false') {
                    slider.autoplay.stop();
                 }
                sliders.push(slider);

            });
        }

        // Product Image Carousel Initialization
        function productImageCarousel() {
            if ($('.product-image-carousel').length) {
                var productImageCarouselSwiper = new Swiper('.product-image-carousel', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
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

            if(vW > 991) {
                var widthDifference = (vW - $('.dummy div').width()) / 2;
                $('.product-features-carousel1-wrap').css('padding-left', widthDifference);
            }

            if ($('.product-features-carousel1').length) {
                var productFeaturesCarousel1Swiper = new Swiper('.product-features-carousel1', {
                    slidesPerView: 'auto',
                    loop: true,
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
                $('.know-mattress-size-popup-block').addClass('active').fadeIn(500);
                $('.body-overlay').fadeIn(500);
                $('body').addClass('know-mattress-size-popup-block-open-scroll-lock');
            });

            $('.know-mattress-size-popup-block--close-button').on('click', function (e) {
                e.preventDefault();
                $('.know-mattress-size-popup-block').removeClass('active').fadeOut(500);
                $('.body-overlay').fadeOut(500);
                $('body').removeClass('know-mattress-size-popup-block-open-scroll-lock');
            });

            $('.body-overlay').on('click', function () {
                if ($('.know-mattress-size-popup-block').hasClass('active')){
                    $('.know-mattress-size-popup-block').removeClass('active').fadeOut(500);
                    $('.body-overlay').fadeOut(500);
                }
            });

            $('.select-mattress-popup--category--option').on('click', function (e) { 
                e.preventDefault();
                $(this).closest('.select-mattress-popup--category--option--wrap').find('.select-mattress-popup--category--option').removeClass('active');
                $(this).addClass('active');
            });

            $('.select-mattress-popup--dimensions--option').on('click', function (e) {
                e.preventDefault();
                $(this).closest('.select-mattress-popup--dimensions--option--wrap').find('.select-mattress-popup--dimensions--option').removeClass('active');
                $(this).addClass('active');
            });
        }

        $('.select-mattress--button').on('click', function (e) {
            e.preventDefault();
            $(this).find('a').text('Add To Cart');
            $('.select-mattress-popup').fadeIn(500);
            $('.select-mattress-popup--know-measure-size').css('bottom', $('.select-mattress').outerHeight());
            $('body').addClass('select-mattress-popup-open-scroll-lock');
        });

        $('.select-mattress-popup--close-button').on('click', function (e) {
            e.preventDefault();
            $('.select-mattress--button').find('a').text('Select Mattress');
            $('.select-mattress-popup').fadeOut(500);
            $('.select-mattress-popup--know-measure-size').css('bottom', '-100px');
            $('body').removeClass('select-mattress-popup-open-scroll-lock');
        });

        function selectMattressDesktop() {
            $(window).click(function(event) {
                if($('body').hasClass('select-active')) {
                    $('body').removeClass('select-active');
                    $('.select-mattress--block--select--option').fadeOut(100);
                }
            });

            $('.select-mattress--block--select--option').fadeOut(0);
            $('.select-mattress--block--select--wrap--selected-content').on('click', function () {
                setTimeout(() => {
                    $('body').addClass('select-active');
                    $('.select-mattress--block--select--option').fadeIn(100);
                }, 10);
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

            // $(document).on("click","div", function(){
            //     console.log("Clicked.");
            //   });

            
        }

        function singleProductSpecificationBlock () {
            if($('.single-product-specification-tab').length) {
                $('.single-product-specification-tab--desc--each.active').slideDown();
                $('.single-product-specification-tab--clicker--wrap span').on('click',function() {
                    if($(this).hasClass('active')) {

                    } else {
                        $('.single-product-specification-tab--clicker--wrap span').removeClass('active');
                        $(this).addClass('active');
                        var tabVal = $(this).attr('data-clicker');
                        $('.single-product-specification-tab--desc--each').slideUp();
                        $('.single-product-specification-tab--desc').find('.'+tabVal).slideDown();
                    }
                });
            }
        }

        function designBlock() {
            if(vW > 991) {
                if($('.design-block').length) {
                    var i = 0;
                    var j = 0;
    
                    $('.design-block--img-inner').height($('.design-block--inner').innerHeight());
    
                    $('.design-block--inner--each').each(function() {
                        $(this).attr('data-block','block'+i);
                        i++;
                    });
                    $('.design-block--img-inner--each').each(function() {
                        $(this).addClass('block'+j);
                        j++;
                    });
    
                    $('.design-block--inner--each').on('click',function() {
                        if($(this).hasClass('active')) {
    
                        } else {
                            $('.design-block--inner--each').removeClass('active');
                            $(this).addClass('active');
                            var classVal = $(this).data('block');
                            $('.design-block--img-inner .design-block--img-inner--each').removeClass('img-active');
                            $('.design-block--img-inner').find('.'+classVal).addClass('img-active');
                        }
                        
                    })
                } 
            }
        }


        // DOCUMENT READY STARTS
        $(document).ready(function () {

            sectionBgImg();

            selectMattressDesktop();

            sleepScoreCalculatorPopupClose();

            sleepScoreCalculatorPopupAppear();

            featuresBlockAccordianBlock();

            commonCarouselInit();

            productImageCarousel();

            productFeaturesCarousel1();

            productFeaturesCarousel2();

            selectMattressPopup();

            singleProductSpecificationBlock();

            designBlock();

            


        }); // DOCUMENT READY ENDS

    })(jQuery);
});