<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>About Page</title>
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
        <!-- cremb[start] -->
        <?php include('../components/page-header-and-cremb.php') ?>
        <!-- cremb[end] -->
        <h1>This is about page</h1>
    </main>
    <!-- website footer[start] -->
    <?php include('../components/shared/footer.php') ?>
    <!-- website footer[end] -->
    <!-- scripts[start] -->
    <?php include('../includes/bottom-scripts.php') ?> 
    <!-- scripts[end] -->
    <!-- page dependancy scripts -->
    <!-- page scripts -->
    <script>
        jQuery(document).ready(function($){
        }(jQuery))
    </script>
</body>
</html>