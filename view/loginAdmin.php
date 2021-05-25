<?php include('../model/constants.php'); ?>

<?php include('header.php');?>

    <!-- product sEARCH Section Starts Here -->
    <section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Login</h2>

            <div class="text-center">
                <?php
                     if(isset($_SESSION['logError']))
                     {
                         echo $_SESSION['logError'];
                         unset($_SESSION['logError']);
                     }
                     if(isset($_SESSION['no-login-message']))
                     {
                         echo $_SESSION['no-login-message'];
                         unset($_SESSION['no-login-message']);
                     }
                ?>
            </div>

           <form action="../controller/loginCheckAdmin.php" method="POST" class="order">
                
                
                <fieldset>
                    <legend>INFORMATION</legend>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Mail Address" class="input-responsive" id="email" required>

                    <div class="order-label">Password</div>
                    <input type="password" name="password" placeholder="password" class="input-responsive" id="password" required>

                    <input type="checkbox" name="remember" class="">Remember me

                    <br/> <br/><br/>

                    <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- product sEARCH Section Ends Here -->

    <?php include('footer.php');?>

    <?php
        if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){

            $email = $_COOKIE['email'];
            $password = $_COOKIE['password'];
    
            echo "<script>
                document.getElementById('email').value = '$email';
                document.getElementById('password').value = '$password';
            </script>";
        }
    
    
    ?>