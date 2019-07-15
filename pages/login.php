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
                       <section class="login-with-password" style="display:none;">
                            <h2 class="text-center login--heading">Login with Password</h2>
                                <form action="">
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Email</label>
                                        <input type="text">
                                    </span>
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Password</label>
                                        <input type="password">
                                    </span>
                                    <div class="button-block">
                                        <button type="submit" class="main-button w-100 login--signin-button">SIGN IN</button>
                                    </div>
                                </form>
                                <!-- Sign in with OTP --> 
                                <div class="login--signin-otp text-center">
                                    Or <a href="#">Sign In with OTP</a>
                                </div>
                                <!-- Associated Links -->
                                <div class="login--associated-links text-center">
                                    <a href="#">Create Account</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <a href="#">Forgot Password?</a>
                                </div>
                       </section>

                       <!-- Login with OTP -->    
                      <section class="login-with-otp">
                            <h2 class="text-center login--heading">Login with OTP</h2>
                                <form action="">
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Email</label>
                                        <input type="text">
                                    </span>
                                    <span class="checkout--shipping-details__form-field">
                                        <label for="">Verification Code</label>
                                        <input type="password">
                                        <button class="login-with-otp--request-otp">REQUEST OTP</button>
                                    </span>
                                    <div class="button-block">
                                        <button type="submit" class="main-button w-100 login--signin-button">SIGN IN</button>
                                    </div>
                                </form>
                                <!-- Sign in with OTP --> 
                                <div class="login--signin-otp text-center">
                                    Or <a href="#">Sign In with Password</a>
                                </div>
                       </section>
                       <!-- Login with OTP --> 





                    </div>   
                </div>


            </div>
     </div>

     <!-- Login options -->
     <div class="login-social">
        <div class="container">
         
            <div class="row">
                    <div class="col-12 col-lg-4 offset-lg-4 text-center more-options">
                        More Options
                    </div>
            </div>
                <!-- Social buttons -->
            <div class="row">
                    <div class="col-12 col-lg-4 offset-lg-4 text-center">
                        <a class="login-social--button" href="">
                            <span><img src="<?php echo $imagesurl; ?>login/facebook.png" alt="Facebook"/></span>
                            Facebook
                        </a>
                        <a class="login-social--button" href="">
                            <span><img src="<?php echo $imagesurl; ?>login/google.png" alt="Facebook"/></span>
                            Google
                        </a>
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



