<div class="cart">
    <h3 class="cart--title">Your Cart</h3>
    <a class="cart--close-button" href="#">
        <i class="cart--close-button__icon fas fa-times"></i>
    </a>
    
    <div class="cart--added-product">
        <h2 class="cart--added-product__name">Orthopedic Memory Foam Mattress</h2>
        <h3 class="cart--added-product__details">King Size,  72”(L) x 60”(W) x 6”(H), 6 inches</h3>
        <div class="number-change">
            <span class="minus">-</span>
            <input type="text" value="1"/>
            <span class="plus">+</span>
        </div>
        <span class="cart--added-product__remove">
            <img src="<?php echo $imagesurl; ?>trash-icon.png" alt="icon">
        </span>
        <span class="cart--added-product__price"><i>&#8377</i> 9000</span>
    </div>
    <div class="cart--promo-code-block">
        <a class="cart--promo-code-block__link" href="#">+Add promo code</a>
        <form action="#" class="cart--promo-code-block__form">
            <label>Add Promocode</label>
            <input type="text" placeholder="Enter Promocode">
            <button type="submit">Apply</button>
        </form>
        <div class="cart--promo-code-block__added-code">summer10
            <a class="cart--promo-code-block__added-code--close-button" href="#">
                <i class="cart--promo-code-block__added-code--close-button__icon fas fa-times"></i>
            </a>
        </div>
    </div>
    <div class="cart--order-summary">
        <div>
        <h3 class="cart--order-summary__title">Order Summary</h3> 
        <span class="cart--order-summary__down-arrow">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </span>
        </div>
        <div>
            <h3 class="cart--order-summary__total-amount-title">Total</h3>
            <span class="cart--order-summary__total-amount">9000</span>
        </div>
        <button class="cart--checkout-button" type="submit">Checkout</button>
    </div>

    <div class="cart--promo-code-ribbon">
        Add <span>MONSOON10</span> to get FLAT 10% off on all products.
    </div>
    <div class="cart--offer-slider--wrapper">
        <div class="cart--offer-slider swiper-container" data-slidesPerView="auto" data-spaceBetween=10 data-loop="true" data-centeredSlides="false" data-autoplay="false" data-delay="3000" data-slidesPerView320="auto" data-slidesPerView480="auto" data-slidesPerView640="auto" data-slidesPerView991="auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide cart--offer-slider__each offer-slide">
                    <div class="row">
                        <div class="col-7">
                            <div>
                                <h4 class="offer-slide--title">Combo Offer</h4>
                                <h3 class="offer-slide--name">Wakefit Sleeping Pillow</h3>
                                <span class="offer-slide--discounted-value"><i class="icon">&#8377;</i> 699.00</span>
                                <span class="offer-slide--original-price"><i class="icon">&#8377;</i> 999</span>
                                <span class="offer-slide--save-percentage">Save 20%</span>
                            </div>
                        </div>
                        <div class="col-5">
                            <button class="offer-slide--add-now-button" type="submit">Add Now</button>
                        </div>
                    </div>  
                </div>
                <div class="swiper-slide cart--offer-slider__each offer-slide">
                    <div class="row">
                        <div class="col-7">
                            <div>
                                <h4 class="offer-slide--title">Combo Offer</h4>
                                <h3 class="offer-slide--name">Wakefit Sleeping Pillow</h3>
                                <span class="offer-slide--discounted-value"><i class="icon">&#8377;</i> 699.00</span>
                                <span class="offer-slide--original-price"><i class="icon">&#8377;</i> 999</span>
                                <span class="offer-slide--save-percentage">Save 20%</span>
                            </div>
                        </div>
                        <div class="col-5">
                            <button class="offer-slide--add-now-button" type="submit">Add Now</button>
                        </div>
                    </div>  
                </div>
                <div class="swiper-slide cart--offer-slider__each offer-slide">
                    <div class="row">
                        <div class="col-7">
                            <div>
                                <h4 class="offer-slide--title">Combo Offer</h4>
                                <h3 class="offer-slide--name">Wakefit Sleeping Pillow</h3>
                                <span class="offer-slide--discounted-value"><i class="icon">&#8377;</i> 699.00</span>
                                <span class="offer-slide--original-price"><i class="icon">&#8377;</i> 999</span>
                                <span class="offer-slide--save-percentage">Save 20%</span>
                            </div>
                        </div>
                        <div class="col-5">
                            <button class="offer-slide--add-now-button" type="submit">Add Now</button>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>