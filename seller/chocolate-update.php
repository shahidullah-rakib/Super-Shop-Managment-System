<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Product</h1>

        <?php 
            //get the id of selected Admin
            $id = $_GET['id'];

            //sql to get the id
            $sql = "SELECT * FROM chocolates_product WHERE id=$id";

            //execuate the cuery
            $res = mysqli_query($conn, $sql);

            //check weather the quary exucation
            if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                //check admin data
                if($count==1)
                {
                    $rows = mysqli_fetch_assoc($res);

                    $name = $rows['name'];
		            $buyingPrice = $rows['buyingPrice'];
	                $sellingPrice = $rows['sellingPrice'];
	                $company = $rows['company'];
	                $entryDate = $rows['entryDate'];
	                $expDate = $rows['expDate'];
	                $discount = $rows['discount'];
                }
                else
                {
                    //redirect to manage page
                    header('location: ../seller/chocolates.php');
                }
            }
        
        ?>

        <form action="../product_controler/updateChocolateCheck.php" method="post">
            <table class="tbl-30">
            <tr>
                    <td>Product Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo  $name; ?>"></td>
                </tr>

                <tr>
                    <td>Buying Price: </td>
                    <td> <input type="text" name="buyingPrice" value="<?php echo  $buyingPrice; ?>"></td>
                </tr>

                
                <tr>
                    <td>Selling Price: </td>
                    <td> <input type="text" name="sellingPrice" value="<?php echo  $sellingPrice; ?>"></td>
                </tr>

                <tr>
                    <td>Company Name: </td>
                    <td> <input type="text" name="company" value="<?php echo  $company; ?>"></td>
                </tr>

                <tr>
                    <td>Entry Date: </td>
                    <td> <input type="date" name="entryDate" value="<?php echo  $entryDate; ?>"></td>
                </tr>

                <tr>
                    <td>Exp. Date: </td>
                    <td> <input type="date" name="expDate" value="<?php echo  $expDate; ?>"></td>
                </tr>

                <tr>
                    <td>Discount: </td>
                    <td> <input type="text" name="discount" value="<?php echo  $discount; ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>