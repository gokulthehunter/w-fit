<?php include("../includes/settings.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

    <div class="login">
            <div class="container">
                
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="checkout--logo">
                                <a href="#" >
                                    <img src="<?php echo $imagesurl ?>header/wakefit-logo.png" alt="logo">
                                </a>
                        </div>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-12 col-lg-4 offset-lg-4">

                      <!-- Login with password -->    

                            <h2 class="text-center login--heading">Create An Account</h2>
                                <form action="">
                                   <div class="create-account-form--half-fields"> 
                                    <span class="checkout--shipping-details__form-field create-account-form--half-field">
                                            <label for="">First Name</label>
                                            <input type="text">
                                        </span>
                                        <span class="checkout--shipping-details__form-field create-account-form--half-field">
                                            <label for="">Last Name</label>
                                            <input type="text">
                                        </span>
                                    </div>
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Email</label>
                                        <input type="text">
                                    </span>
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Password</label>
                                        <input type="password">
                                    </span>
                                    <div class="button-block">
                                        <button type="submit" class="main-button w-100 login--signin-button">SIGN UP</button>
                                    </div>
                                </form>
                                <!-- Sign in with OTP --> 
                                <div class="login--signin-otp text-center">
                                  Already have an account <a href="#">Sign In</a>
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



