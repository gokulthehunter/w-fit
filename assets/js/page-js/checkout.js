jQuery(document).ready(function ($) {

    (function ($) {
        "use strict";

        function orderSummaryShowHide() { 
            $('.order-summary-show-hide-trigger').on('click', function () {
                $(this).toggleClass('opened');
                if($(this).hasClass('opened')){
                    $(this).find('.checkout--order-summary__title').text('Hide Order Summary');
                    $(this).closest('.checkout--order-summary').find('.order-summary-show-hide-block').fadeIn(300);
                }else{
                    $(this).find('.checkout--order-summary__title').text('Show Order Summary');
                    $(this).closest('.checkout--order-summary').find('.order-summary-show-hide-block').fadeOut(300);
                }
                
            })
        }

        $('.checkout--shipping-details input').focus(function () {
            $(this).parents('span').addClass('focused');
        });

        $('.checkout--shipping-details input').blur(function () {
            var inputValue = $(this).val();
            if (inputValue == "") {
                $(this).removeClass('filled');
                $(this).parents('span').removeClass('focused');
            } else {
                $(this).addClass('filled');
            }
        })

        // DOCUMENT READY STARTS
        $(document).ready(function () {
            
            orderSummaryShowHide();

        }); // DOCUMENT READY ENDS

    })(jQuery);        
});