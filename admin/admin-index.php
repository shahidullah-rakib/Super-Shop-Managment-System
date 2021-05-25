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
                <h1>  <a href="empolyee-category.php">Employee</a> </h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="manage-product.php">Product</a></h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="sales-Info.php">Salees</a></h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="orderInfo.php">Order</a></h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="helpLine.php">Help Line</a></h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="salary-Info.php">Salary</a></h1> <br/>
                Information
            </div>

            <div class="col-4 text-center">
                <h1><a href="vatAndOffer.php">Vat & Offers</a></h1> <br/>
                Information
            </div>

           
            <div class="clearfix"></div>

        </div>
    </div>

    <!--Menu Contact Section ends -->

    <?php include('footer.php'); ?>