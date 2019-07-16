jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        function knowMattressSizePopupTabActive() {  
            $('.know-mattress-size-popup-block--size-selector-tab .tab-content .tab-pane .bed-size').on('click', function () {
                $(this).closest('.tab-pane').find('.bed-size').removeClass('active');
                $(this).addClass('active');
            })
        }

        function numberChange() {
            $('.number-change .minus').on('click', function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });

            $('.number-change .plus').on('click', function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        }

        function cartOpenClose(){
            $('.header--cart').on('click', function () {
                $('.cart').css('right', 0);
                $('body').addClass('cart-open-scroll-lock');
            });

            $('.cart--close-button').on('click', function () {
                $(this).closest('.cart').css('right', '-110%');
                $('body').removeClass('cart-open-scroll-lock');
            });
        }

        $('.cart--added-product__remove').on('click', function (e) { 
            e.preventDefault(); 
            $(this).closest('.cart--added-product').fadeOut(300);
        });

        $('.cart--promo-code-block__link').on('click', function (e) {
            e.preventDefault();
            $(this).fadeOut(25);
            $('.cart--promo-code-block__added-code').fadeOut(25);
            $(this).closest('.cart--promo-code-block').find('.cart--promo-code-block__form').fadeIn(500);
        });

        $('.cart--promo-code-block__form button').on('click', function () {
            $(this).closest('.cart--promo-code-block__form').fadeOut(200);
            $('.cart--promo-code-block__added-code').delay(200).fadeIn(300);
            $('.cart--promo-code-block__link').delay(200).fadeIn(300);
        });

        $('.cart--promo-code-block__added-code--close-button').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.cart--promo-code-block__added-code').fadeOut(25);
        });

        //DOCUMENT READY STARTS
        $(document).ready(function () {

            var vW = $(window).width();
            var vH = $(window).height();

            knowMattressSizePopupTabActive();
            numberChange();


            //Cart Open and Close
            cartOpenClose();
            // Padding for full width blocks
            var widthDifference = (vW - $('.dummy div').width()) / 2;
            $('.container-fluid-container-pad-right').css('padding-right', widthDifference);
            $('.container-fluid-container-pad-left').css('padding-left', widthDifference);


            $('.header--menu-icon').on('click', function (e) {
                e.preventDefault();
                $('.slide-menu').css({
                    'left': '0%'
                });
                $('main, .header--inner, .footer .container').css({
                    '-webkit-transform': 'translateX(100px)',
                    'transform': 'translateX(100px)'
                });
                $("body").addClass('menu-open-scroll-lock');
            });

            $('.slide-menu--close').on('click', function (e) {
                e.preventDefault();
                $(this).closest('.slide-menu').css({
                    'left': '-100%'
                });
                $('main, .header--inner, .footer .container').css({
                    '-webkit-transform': 'translateX(0px)',
                    'transform': 'translateX(0px)'
                });

                $("body").removeClass('menu-open-scroll-lock')
            });

            if(vW < 992){
                var slideMenuFooterH = $('.slide-menu--footer').outerHeight();
                $('.slide-menu--element-wrap').css('height', vH - slideMenuFooterH - 70);

                $('.menu--item.has-children').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('.menu').css('left', '-125%');
                    var parentItem = $(this).find('a').html();
                    var submenuContent = $(this).find('ul').html();

                    $('.sub-menu-dump-block').css({
                        'visibility': 'visible',
                        'opacity': '1'
                    });
                    $('.sub-menu-dump-block--inner').css({
                        '-webkit-transform': 'scale(1)',
                        'transform': 'scale(1)'
                    });
                    $('.sub-menu-dump-block--inner__go-back a').html(parentItem);
                    $('.sub-menu-dump-block--inner__content ul').html(submenuContent);
                });
            }else{

            }

            $('.sub-menu-dump-block--inner__go-back a').on('click', function (e) {
                e.preventDefault();
                $('.sub-menu-dump-block').css({
                    'visibility': 'hidden',
                    'opacity': '0'
                });
                $(this).closest('.sub-menu-dump-block--inner').css({
                    '-webkit-transform': 'scale(0.8)',
                    'transform': 'scale(0.8)'
                });
                $('.menu').css('left', '0%');
            });

            $('.sub-menu-dump-block').height($('.menu').height());


            $('.header--get-help').on('click', function (e) {
                e.preventDefault();

                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {
                    $('.get-help-block').css({
                        'visibility': 'visible',
                        'opacity': '1'
                    });
                    $('.master-wrap--overlay').fadeIn(200);
                } else {
                    $('.get-help-block').css({
                        'visibility': 'hidden',
                        'opacity': '0'
                    });
                    $('.master-wrap--overlay').fadeOut(200);
                }
            });

            $('.master-wrap--overlay').on('click', function (e) {
                e.preventDefault();

                $('.get-help-block').css({
                    'visibility': 'hidden',
                    'opacity': '0'
                });
                $('.master-wrap--overlay').fadeOut(200);

                $('.header--get-help').removeClass('active');
            });

            //-----------------------------------------------------------------

            // CUSTOM SELECT BOX INITIALIZATION

            //-----------------------------------------------------------------
            if ($('.custom-select-box').length) {
                $('.custom-select-box').dropdown({
                    "dropdownClass": "my-dropdown",
                    "optionClass": "my-option"
                });
            }

        }); // DOCUMENT READY ENDS

    })(jQuery);
});