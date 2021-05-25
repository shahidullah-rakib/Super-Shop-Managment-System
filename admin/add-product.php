<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Add Product</h1> <br/>
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

        <form action="../controller/addProductCheck.php" method="post" enctype="multipart/form-data">
            <table class="tbl-full">
                <tr>
                    <td>Product Name: </td>
                    <td> <input type="text" name="name" placeholder="Product Name" id="Name"></td>
                </tr>

                <tr>
                    <td>Company: </td>
                    <td> <input type="text" name="company" placeholder="Company Name" id="pass"></td>
                </tr>

                <tr>
                    <td>Catagory: </td>
                    <td> 
                        <input type="radio" name="catagory" value="Chocolate" id="male" class="input-responsive" >Chocolate <br>
                        <input type="radio" name="catagory" value="Kitchen Essentials" id="female" class="input-responsive" >Kitchen Essentials <br>
                        <input type="radio" name="catagory" value="Baby Products" id="other" class="input-responsive" >Baby Products <br>
                        <input type="radio" name="catagory" value="Fish & Meats" id="other" class="input-responsive" >Fish & Meats <br>
                        <input type="radio" name="catagory" value="Cosmetics" id="other" class="input-responsive" >Cosmetics <br>
                        <input type="radio" name="catagory" value="Mils and Dairy" id="other" class="input-responsive" >Mils and Dairy <br>
                        <input type="radio" name="catagory" value="others" id="other" class="input-responsive" >Others
                    </td>
                </tr>

                <tr>
                    <td>Entry Date: </td>
                    <td> <input type="date" name="entryDate" id="date"></td>
                </tr>

                <tr>
                    <td>Exp. Date: </td>
                    <td> <input type="date" name="expDate" id="date"></td>
                </tr>

                <tr>
                    <td>Buying Price: </td>
                    <td> <input type="text" name="buyPrice" placeholder="Buying Price" id=""></td>
                </tr>

                <tr>
                    <td>Saling Price: </td>
                    <td> <input type="text" name="salePrice" placeholder="Saling Price" id=""></td>
                </tr>

                <tr>
                    <td>Discount: </td>
                    <td> <input type="text" name="discount" value="NULL" id=""></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value=" Add Product" class="btn-secondary">
                        <input type="reset" name="reset" value="Reset" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>

