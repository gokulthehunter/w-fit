<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Single Product</title>
    <?php include('../includes/header-imports.php') ?>
</head>
<body>
    <div class="body-overlay"></div>
    <!-- Dummy Div to calculate the padding. Donot Delete. Used in scripts -->
    <div class="dummy"><div class="container"><div></div></div></div>

    <!-- Select Mattress Mobile Fixed Ribbon -->
    <div class="select-mattress d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-4 pr-1">
                        <div class="select-mattress--discounted-price">
                            <h4>&#8377; 9000</h4>
                        </div>
                        <div>
                            <span class="select-mattress--actual-price">&#8377; 7000</span>
                            <span class="select-mattress--discount-percentage">Save 12%</span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="select-mattress--button">
                            <a href="#">Select Mattress</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    <!-- Sleep Score Calculator Popup Block -->
    <?php include('../components/sleep-score-calculator-popup.php') ?>
    
    <!-- Dummy Div to calculate the padding. Donot Delete. Used in scripts -->
    <div class="dummy"><div class="container"><div></div></div></div>
    <!-- website header[start] -->
    <?php include('../components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('../components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <main>
        <div class="product-home-section">
            <div class="container-fluid d-lg-none">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="product-image-carousel-wrap">
                            <div class="swiper-container product-image-carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-lg-none">
                <div class="row">
                    <div class="col-12">
                        <div class="product-name-block">
                            <h2 class="product-name-block--sub-title">Wakefit</h2>
                            <h1 class="product-name-block--title">Orthopedic Memory<br>Foam Mattress</h1>
                        </div>
                        <div class="product-rating">
                            <span class="product-rating--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a href="#">
                                <span class="product-rating--count">6364<i>+</i></span>
                                <span class="product-rating--title">Reviews</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container d-none d-lg-block">
                <div class="row">
                    <div class="col-8">
                        <div class="product-image-carousel-wrap">
                            <div class="swiper-container product-image-carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                    <div class="swiper-slide" data-bg="<?php echo $imagesurl ?>single-product/product-image-carousel/1.jpg">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>  
                    </div>
                    <div class="col-4">
                        <div class="product-name-block">
                            <h2 class="product-name-block--sub-title">Wakefit</h2>
                            <h1 class="product-name-block--title">Orthopedic Memory<br>Foam Mattress</h1>
                        </div>
                        <div class="product-rating">
                            <span class="product-rating--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a href="#">
                                <span class="product-rating--count">6364<i>+</i></span>
                                <span class="product-rating--title">Reviews</span>
                            </a>
                        </div>

                        <div class="select-mattress--discounted-price">
                            <h4>&#8377; 9000 <span class="select-mattress--actual-price">&#8377; 7000</span><span class="select-mattress--discount-percentage">Save 12%(&#8377;2000)</span></h4>
                        </div>
                        <div id="rejin" class="select-mattress--block">
                            <!-- To select box -->
                            <div class="select-mattress--block--select">
                                <div class="select-mattress--block--select--wrap">
                                   <div class="select-mattress--block--select--wrap--selected-content">
                                        <span class="select-mattress--block--select--option--select-icon"></span>
                                        <span class="select-mattress--block--select--option--select-text">Single Size Mattress</span>
                                   </div>
                                </div>
                                <div  class="select-mattress--block--select--option">
                                    <ul>
                                        <li class="active">
                                            <div>
                                                <span class="select-mattress--block--select--option--select-icon"></span>
                                                <span class="select-mattress--block--select--option--select-text" data-text="Single Size Mattress">Single</span>
                                                <span class="select-mattress--block--select--option--select-radio"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="select-mattress--block--select--option--select-icon"></span>
                                                <span class="select-mattress--block--select--option--select-text" data-text="Double Size Mattress">Double</span>
                                                <span class="select-mattress--block--select--option--select-radio"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="select-mattress--block--select--option--select-icon"></span>
                                                <span class="select-mattress--block--select--option--select-text" data-text="King Size Mattress">King</span>
                                                <span class="select-mattress--block--select--option--select-radio"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="select-mattress--block--select--option--select-icon"></span>
                                                <span class="select-mattress--block--select--option--select-text" data-text="Queen Size Mattress">Queen</span>
                                                <span class="select-mattress--block--select--option--select-radio"></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="select-mattress--block--select--option--custom-size text-center">
                                    <a href="#" >Custom size matress</a>
                                    </div>
                                    <div class="select-mattress--block--select--option--measure">
                                        <div class="row">
                                            <div class="col-7">
                                                <p>
                                                Know how to measure </br>your mattress size?
                                                </p>
                                            </div>
                                            <div class="col-5">
                                                <a href="#" class="select-mattress--block--select--option--measure--trigger">Learn How</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-mattress-popup--category--size-guide">
                                <span class="select-mattress-popup--category--size-guide__text">Is this the right size?</span>
                                <a class="select-mattress-popup--category--size-guide__popup-link" href="#">See the size guide</a>
                            </div>
                        </div>
                        <div class="select-mattress--block--dimension">
                            <select class="select-mattress-popup--mattress-height--select--wrap custom-select-box">
                                <option value="_">Length & Breadth</option>
                                <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                                <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                                <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="select-mattress--block--height">
                                    <select class="select-mattress-popup--mattress-height--select--wrap custom-select-box">
                                        <option value="_">Mattress Height</option>
                                        <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                                        <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                                        <option value="72'(L)x32'(W)">72"(L)x32"(W)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="select-mattress-popup--quantity">
                                    <div class="number-change">
                                        <span class="word">Qty</span>
                                        <span class="minus">-</span>
                                        <input type="text" value="1"/>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="select-mattress--block--button">
                            <a href="#">Add To Cart</a>
                        </div>
                        <div class="shipping-duration">
                        <p class="shipping-duration--text">Estimated delivery in <span>2-3</span> business days</p>
                        <a class="shipping-duration--change-pincode" href="#">Change Pincode</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-lg-none">
            <div class="row">
                <div class="col-md-12">
                    <div class="shipping-duration">
                        <p class="shipping-duration--text">Shipment in <span>2-3</span> business days</p>
                        <a class="shipping-duration--change-pincode" href="#">Change Pincode</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section -->
        <?php include('../components/single-product-features-block.php') ?>
        <!-- Product Details Section -->
        <?php include('../components/product-details.php') ?>
        <!-- Product Features Carousel One Section -->
        <section class="pad-top-20">
            <?php include('../components/product-features-carousel-block1.php') ?>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Product Specifications Section -->
                    <?php include('../components/single-product-specifications-block.php') ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Product Specifications Section -->
                    <?php include('../components/product-offer-block.php') ?>
                </div>
            </div>
        </div>

        <!-- Product Features Carousel Two Section -->
        <?php include('../components/design-block.php') ?>
        <!-- Single Product Review Section -->
        <?php include('../components/review-block.php') ?>
        <!-- Quastion And Answers Section -->
        <?php include('../components/question-answers-block.php') ?>
        <!-- Sleep Score Section -->
        <?php include('../components/sleep-score-block.php') ?>
        <!-- Other Products Section -->
        <?php include('../components/other-products-block.php') ?>
        <!-- Why Wakefit Block -->
        <?php include('../components/why-wakefit-block.php') ?>
        
        <!-- Select Mattress Popup Block -->
        <?php include('../components/select-mattress-popup-block.php') ?>
        <!-- Know Mattress Size Popup Block -->
        <?php include('../components/know-mattress-size-popup-block.php') ?>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <!-- page scripts -->

    <script src="<?php echo $assetsurl ?>js/page-js/single-product.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.1/js/all.js?ver=5.9.0"></script>
</body>
</html>