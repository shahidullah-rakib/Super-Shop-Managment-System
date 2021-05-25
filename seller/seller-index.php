<?php include('menu.php'); ?>

<!--Menu Contact Section starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>

        
        <?php
             if(isset($_SESSION['login']))
             {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
             }
        ?>
        

        <div class="col-4 text-center">
            <h1><a href="product-catagory.php">Product</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Selles</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Order</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Help Line</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Salary</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Vat & Offers</a></h1> <br/>
            Information
        </div>

        <div class="col-4 text-center">
            <h1><a href="">Notification</a></h1> <br/>
            Information
        </div>
        <div class="clearfix"></div>

    </div>
</div>

<!--Menu Contact Section ends -->

<?php include('footer.php'); ?>