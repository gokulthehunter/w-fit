<?php include("./includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <?php include('./includes/header-imports.php') ?>
</head>
<body>

    <!-- Dummy Div to calculate the padding. Donot Delete. Used in scripts -->
    <div class="dummy"><div class="container"><div></div></div></div>
    <!-- website header[start] -->
    <?php include('./components/shared/header.php') ?> 
    <!-- website header[end] -->
    <!-- common loader[start] -->
    <?php include('./components/shared/loader.php') ?>
    <!-- common loader[end] -->
    <!-- Mobile Detect[start] -->
    <?php include('./includes/mobile-detect.php'); 
        $detect = new Mobile_Detect;
    ?>
    <!-- Mobile Detect[end] -->
    <main>
        <!-- Home Banner Section -->
        <?php include('./components/home-banner.php') ?>
        <!-- Feature Carousel -->
        <?php include('./components/featured-slider.php') ?>
        <!-- Best Seller -->
        <?php include('./components/best-seller.php') ?>
        <!-- Features Block -->
        <?php include('./components/features-block.php') ?>
        <!-- Features Block -->
        <?php include('./components/review-block.php') ?>
        <!-- Design Block -->
        <?php include('./components/design-block.php') ?>
        <!-- Sleep Score Block -->
        <?php include('./components/sleep-score-block.php') ?>
        <!-- News Block -->
        <?php include('./components/news-block.php') ?>
        <!-- Call To Action Block -->
        <?php include('./components/call-to-action-block.php') ?>
        <!-- Why Wakefit Block -->
        <?php include('./components/why-wakefit-block.php') ?>
    </main>
    <!-- website footer[start] -->
    <?php include('./components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('./includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <!-- page scripts -->
    <script src="<?php echo $assetsurl ?>js/page-js/index.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.1/js/all.js?ver=5.9.0"></script>
</body>
</html>