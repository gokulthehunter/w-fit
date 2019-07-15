jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        $(document).ready(function () {

            var vW = $(window).width();
            var vH = $(window).height();

            // Swiper Slider Init
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

            //-----------------------------------------------------------------

            // BACKGROUND IMAGE SETTINGS

            //-----------------------------------------------------------------

            $('.section-bgimg').each(function() {
                var sectionBgImg = $(this).attr('data-sectionBgImg');
                $(this).css('background-image','url('+sectionBgImg+')');
            });
            
        }); // DOCUMENT READY ENDS

    })(jQuery);
});