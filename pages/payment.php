<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <?php include('../includes/header-imports.php') ?>
</head>
<body>
    <!-- website header[start] -->
    <?php //include('../components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('../components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <main>

    <div class="checkout">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="checkout--logo">
                            <a href="#" >
                                <img src="<?php echo $imagesurl ?>header/wakefit-logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="checkout--order-summary">
                            <div class="order-summary-show-hide-trigger">
                                <div class="row no-gutters">
                                    <div class="col-8">
                                        <h4 class="checkout--order-summary__title">Show Order Summary</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-right">
                                            <span class="checkout--order-summary__amount"><i>&#8377;</i> 9000</span>
                                            <span class="checkout--order-summary__direction-icon">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-summary-show-hide-block">
                                <div class="order-summary-content">
                                    <div class="order-summary-content--item">
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                <h4 class="order-summary-content--item__name">
                                                    Orthopedic Memory<br>Foam Mattress
                                                    <span class="order-summary-content--item__count">2</span>
                                                </h4>
                                                <p class="order-summary-content--item__details">King Size,  72”(L) x 60”(W) x 6”(H)</p>
                                            </div>
                                            <div class="col-3">
                                                <div class="order-summary-content--item__amount text-right">
                                                    <i>&#8377;</i> <span>9000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-summary-content--item">
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                <h4 class="order-summary-content--item__name">
                                                    Wakefit Sleeping Pillow
                                                    <span class="order-summary-content--item__count">2</span>
                                                </h4>
                                            </div>
                                            <div class="col-3">
                                                <div class="order-summary-content--item__amount text-right">
                                                    <i>&#8377;</i> <span>699</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary-price-details">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="order-summary-price-details--sub-total">Subtotal</div>
                                            <div class="order-summary-price-details--shipping">Shipping</div>
                                        </div>
                                        <div class="col-5 text-right">
                                            <div class="order-summary-price-details--sub-total-amount"><i>&#8377;</i> 9699</div>
                                            <div class="order-summary-price-details--shipping-amount">0</div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-7">
                                            <div class="order-summary-price-details--total">Total</div>
                                        </div>
                                        <div class="col-5 text-right">
                                            <div class="order-summary-price-details--total-amount"><i>&#8377;</i> 9699</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="order-summary-shop-more-button">Shop More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipment Summary -->
                        <div class="checkout--order-summary shipment-summary--tab-adjuster">
                            <div class="order-summary-show-hide-trigger">
                                <div class="row no-gutters">
                                    <div class="col-8">
                                        <h4 class="checkout--order-summary__title">Show Shipment Summary</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-right">
                                            <span class="checkout--order-summary__direction-icon">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-summary-show-hide-block">
                                <div class="order-summary-content">
                                    <div class="order-summary-content--item payment-shadows--standard">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <h4 class="order-summary-content--item__name shipment-summary--title">
                                                    John Doe                                                    
                                                </h4>
                                                <p class="order-summary-content--item__details shipment-summary--content">
                                                    B6146, Prestige Sunrise Park,<br/>
                                                    Neotown road,<br/>
                                                    Street name, City<br/>
                                                    State - 560000
                                                </p>
                                                <a href="#" class="order-summary-shop-more-button">Change Address</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Select Payment -->
                <form action="">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                     <h2 class="shipment-summary--title select-payament--title-margin">Select Payment</h2>
                     
                        <ul class="select-payament">
                            <li>
                                <div class="v-center">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="radio" id="wallet-option" name="selector" checked>
                                            <label for="wallet-option">Wallets</label>
                                            <div class="check"><div class="inside"></div></div>
                                        </div>
                                    </div>
                                </div>   
                            </li>
                            <li>
                                <div class="v-center">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="radio" id="cards-option" name="selector">
                                            <label for="cards-option" class="line-height-hook">Debit/Credit Cards</label>
                                            <span>Visa, Master Card, Amex and more</span>
                                            <div class="check"><div class="inside"></div></div>
                                        </div>
                                    </div>
                                </div>                                 
                            </li>
                            <li>
                                <div class="v-center">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="radio" id="cod-option" name="selector">
                                            <label for="cod-option">COD</label>
                                            <div class="check"><div class="inside"></div></div>
                                        </div>
                                    </div>
                                </div>    
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row no-gutters ">
                    <div class="col-12 col-lg-6">
                      <h2 class="shipment-summary--title select-payament--title-margin">Billing Details</h2>
                        <div class="form-group">
                                <input type="checkbox" id="sameAsShipping" checked>
                                <label for="sameAsShipping">Same As Shipping Address</label>
                        </div>
                      <button type="submit" class="checkout--checkout-button payment-margins--bottom-25">Continue Payement</button>
                    </div>
                </div>



            </form>






            </div>








    </div>

    </main>
    <!-- website footer[start] -->
    <?php //include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <script src="<?php echo $assetsurl ?>js/page-js/checkout.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.1/js/all.js?ver=5.9.0"></script>
</body>
</html>    