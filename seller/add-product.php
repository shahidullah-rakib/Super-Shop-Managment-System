<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Add New product</h1> <br/>
        <?php
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } 

            if(isset($_SESSION['aname']))
            {
                echo $_SESSION['aname'];
                unset($_SESSION['aname']);
            } 
            if(isset($_SESSION['password']))
            {
                echo $_SESSION['password'];
                unset($_SESSION['password']);
            }
            if(isset($_SESSION['adob']))
            {
                echo $_SESSION['adob'];
                unset($_SESSION['adob']);
            }
            if(isset($_SESSION['aemail']))
            {
                echo $_SESSION['aemail'];
                unset($_SESSION['aemail']);
            }
            if(isset($_SESSION['aphone']))
            {
                echo $_SESSION['aphone'];
                unset($_SESSION['aphone']);
            }
            if(isset($_SESSION['profilePicture']))
            {
                echo $_SESSION['profilePicture'];
                unset($_SESSION['profilePicture']);
            }
        ?>
        <br/>

        <form action="../product_controler/addChocolateCheck.php" method="post" enctype="multipart/form-data" onsubmit="return myFunction()">
            <table class="tbl-full">
                <tr>
                    <td>Product Name: </td>
                    <td> <input type="text" name="name" placeholder="Product Name" id="sName"></td>
                </tr>

                <tr>
                    <td>Buying Price: </td>
                    <td> <input type="text" name="buyingPrice" placeholder="Buying Price" id="sBuyingPrice"></td>
                </tr>

                
                <tr>
                    <td>Selling Price: </td>
                    <td> <input type="text" name="sellingPrice" placeholder="Selling Price" id="sPrice"></td>
                </tr>

                <tr>
                    <td>Company Name: </td>
                    <td> <input type="text" name="company" placeholder="Company Name" id="cName"></td>
                </tr>

                <tr>
                    <td>Entry Date: </td>
                    <td> <input type="date" name="entryDate" id="edate"></td>
                </tr>

                <tr>
                    <td>Exp. Date: </td>
                    <td> <input type="date" name="expDate" id="expdate"></td>
                </tr>

                <tr>
                    <td>Discount: </td>
                    <td> <input type="text" name="discount" value="NULL" id="discount"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value=" Add Product" class="btn-secondary">
                        <input type="reset" name="reset" value="Reset" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
     <script src="../js/addProductValidation.js"></script>
    </div>
</div>

<?php include('footer.php'); ?>