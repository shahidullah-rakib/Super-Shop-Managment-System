<?php include('menu.php'); ?>

    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Shop Empolyee</h1>

            
            <?php
                 if(isset($_SESSION['login']))
                 {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                 }
            ?>
            

            <div class="col-4 text-center">
                <h1> <a href="manage-admin.php">Admin</a></h1> <br/>
                
            </div>

            <div class="col-4 text-center">
                <h1> <a href="manage-seller.php">Seller</a></h1> <br/>
                
            </div>

            <div class="col-4 text-center">
                <h1> <a href="manage-accountent.php">Accountent</a></h1> <br/>
                
            </div>

            <div class="col-4 text-center">
                <h1> <a href="manage-member.php">Members</a></h1> <br/>
                
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <!--Menu Contact Section ends -->

    <?php include('footer.php'); ?>