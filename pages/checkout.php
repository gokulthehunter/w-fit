<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <?php include('../includes/header-imports.php') ?>
</head>
<body>
    <!-- website header[start] -->
    <?php include('../components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('../components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <main>

        <div class="checkout">
            <div class="container">
                <div class="row no-gutters">

                    <div class="col-12">
                        <div class="checkout--logo">
                            <a href="#" >
                                <img src="<?php echo $imagesurl ?>header/wakefit-logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 order-lg-2">
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
                    </div>

                    <div class="col-12 col-lg-6 order-lg-1">
                        <div class="checkout--contact-details">
                            <h4 class="checkout--contact-details__title">Contact Details</h4>
                            <h5 class="checkout--contact-details__info">Already have an account <a href="#">Sign in</a></h5>
                            <form action="#" class="checkout--contact-details__enter-mobile-email">
                                <input type="text" placeholder="Enter Email / Mobile Number">
                            </form>
                        </div>
                        <div class="checkout--shipping-details">
                            <h3 class="checkout--shipping-details__title">Shipping Details</h3>
                            <form action="#">
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">First Name</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Last Name</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Address Line 1</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Address Line 2</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">City</label>
                                    <select name="" id="" class="custom-select-box">
                                        <option value="Delhi">Delhi</option>
                                        <option value="Agra">Agra</option>
                                    </select>
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">State</label>
                                    <select name="" id="" class="custom-select-box">
                                        <option value="State">State</option>
                                    </select>
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Pincode</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Country</label>
                                    <select name="" id="" class="custom-select-box">
                                        <option value="country">country</option>
                                    </select>
                                </span>

                                <button type="submit" class="checkout--checkout-button">Checkout</button>
                            </form>
                        </div>
                        <div class="checkout--wakefit-guarantee">
                            <h5 class="checkout--wakefit-guarantee__title">Wakefit Mattress Guarantee</h5>
                            <h6 class="checkout--wakefit-guarantee__sub-title">Every mattress comes with</h6>
                            <ul class="checkout--wakefit-guarantee--list">
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">100 Nights Free</h5>
                                    <h6 class="small-text">Risk-free returns</h6>
                                </li>
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">10 Years Warranty</h5>
                                    <h6 class="small-text">Best in India</h6>
                                </li>
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">Free Shipping</h5>
                                    <h6 class="small-text">Free door step delivery</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

             <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="checkout--shipping-address">
                            <h3 class="checkout--shipping-address__title">Select Address</h3>
                            <form action="#" class="checkout--shipping-address__form">
                                <select name="" id="" class="custom-select-box">
                                    <option value="B6146, Prestige Sunrise Park, Neotown road">B6146, Prestige Sunrise Park, Neotown road</option>
                                    <option value="Prestige Sunrise Park, Neotown road">Prestige Sunrise Park, Neotown road</option>
                                </select>
                                <button type="submit">Deliver to this address</button>
                            </form>
                            <span class="checkout--shipping-address__seperator">Or</span>
                            <div class="checkout--shipping-address__add-new-button">Add a new address</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-none">
                <div class="row">
                    <div class="col-12">
                        <div class="checkout--contact-details">
                            <h4 class="checkout--contact-details__title">Contact Details</h4>
                            <h5 class="checkout--contact-details__info">Already have an account <a href="#">Sign in</a></h5>
                            <form action="#" class="checkout--contact-details__enter-mobile-email">
                                <input type="text" placeholder="Enter Email / Mobile Number">
                            </form>
                        </div>
                        <div class="checkout--shipping-details">
                            <h3 class="checkout--shipping-details__title">Shipping Details</h3>
                            <form action="#">
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">First Name</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Last Name</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Address Line 1</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Address Line 2</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">City</label>
                                    <select name="" id="" class="custom-select-box">
                                        <option value="Delhi">Delhi</option>
                                        <option value="Agra">Agra</option>
                                    </select>
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">State</label>
                                    <select name="" id="" class="custom-select-box">
<<<<<<< HEAD
                                        <option value="Kerala">Kerala</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Goa">Goa</option>
=======
                                        <option value="State">State</option>
>>>>>>> dev-rj
                                    </select>
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Pincode</label>
                                    <input type="text">
                                </span>
                                <span class="checkout--shipping-details__form-field">
                                    <label for="">Country</label>
                                    <select name="" id="" class="custom-select-box">
<<<<<<< HEAD
                                        <option value="India">India</option>
                                        <option value="India">India</option>
=======
                                        <option value="country">country</option>
>>>>>>> dev-rj
                                    </select>
                                </span>

                                <button type="submit" class="checkout--checkout-button">Checkout</button>
                            </form>
                        </div>
                        <div class="checkout--wakefit-guarantee">
                            <h5 class="checkout--wakefit-guarantee__title">Wakefit Mattress Guarantee</h5>
                            <h6 class="checkout--wakefit-guarantee__sub-title">Every mattress comes with</h6>
                            <ul class="checkout--wakefit-guarantee--list">
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">100 Nights Free</h5>
                                    <h6 class="small-text">Risk-free returns</h6>
                                </li>
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">10 Years Warranty</h5>
                                    <h6 class="small-text">Best in India</h6>
                                </li>
                                <li class="checkout--wakefit-guarantee--list__item">
                                    <h5 class="big-text">Free Shipping</h5>
                                    <h6 class="small-text">Free door step delivery</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <script src="<?php echo $assetsurl ?>js/page-js/checkout.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.1/js/all.js?ver=5.9.0"></script>
</body>
</html>



