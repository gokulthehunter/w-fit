<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Listing</title>
    <?php include('../includes/header-imports.php') ?>
</head>
<body>
    <div class="body-overlay"></div>

    <!-- Dummy Div to calculate the padding. Donot Delete. Used in scripts -->
    <div class="dummy"><div class="container"><div></div></div></div>
    <!-- website header[start] -->
    <?php include('../components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('../components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <main>
        <div class="listing-home">
            <div class="container">
                <div class="row">
                    <div class="offset-2 col-8">
                        <h1 class="listing-home--heading">Mattresses that puts you to sleep</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Description 1 Section -->
        <?php include('../components/product-description.php') ?>
        <!-- Product Description 2 Section -->
        <?php include('../components/product-description.php') ?>
        <!-- Product Details Section -->
        <?php include('../components/product-details.php') ?>
        <!-- Product Features Carousel One Section -->
        <section class="pad-top-20">
            <?php include('../components/product-features-carousel-block1.php') ?>
        </section>
        <!-- Product Features Carousel Two Section -->
        <?php include('../components/product-features-carousel-block2.php') ?>
        <!-- Why Wakefit Block -->
        <?php include('../components/why-wakefit-block.php') ?>
        <!-- Offer Popup Block -->
        <?php include('../components/offer-popup.php') ?>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <!-- page scripts -->
    
    <script src="<?php echo $assetsurl ?>js/page-js/listing.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.1/js/all.js?ver=5.9.0"></script>
</body>
</html>