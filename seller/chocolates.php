<?php include('menu.php'); ?>

 <!--Menu Contact Section starts -->
 <div class="main-content">
        <div class="wrapper">
            <h1>Manage Products</h1> 

            <br/>
            
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            } 

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['valid']))
            {
                echo $_SESSION['valid'];
                unset($_SESSION['valid']);
            }

            if(isset($_SESSION['not-valid']))
            {
                echo $_SESSION['not-valid'];
                unset($_SESSION['not-valid']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            
            ?>


            <br/><br/><br/>

            <!-- Button to add admin -->
            <a href="add-chocolates.php" class="btn-primary">Add New Product</a> <br/><br/><br/>

            <table  class="tbl-full">
                <tr>
                    <th>ID no.</th>
                    <th>Product Name </th>
                    <th>Buying Price </th>
                    <th>Selling Price </th>
                    <th>Company </th>
                    <th>Entry Date </th>
                    <th>Exp. Date</th>
                    <th>Discount</th>
                    <th>Actions</th>
                </tr>

                <?php
                    //Quary to get all admin
                    $sql = "SELECT * FROM chocolates_product";
                    //Execute the quary
                    $res = mysqli_query($conn, $sql);
                    
                    //check the query 
                    if($res==TRUE)
                    {
                        //count Rows to check the data base
                        $count = mysqli_num_rows($res);

                        //create a variable
                        $sn=1; 

                        //Check the nymber of rows
                        if($count>0)
                        {
                            //we have data in databae
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using whileloop to get tahe data
                                //And while loop will run as wel as we have data

                                //get individual data
                                $id = $rows['id'];
                                $name = $rows['name'];
		                        $buyingPrice = $rows['buyingPrice'];
	                        	$sellingPrice = $rows['sellingPrice'];
	                        	$company = $rows['company'];
	                        	$entryDate = $rows['entryDate'];
	                        	$expDate = $rows['expDate'];
	                        	$discount = $rows['discount'];

                                //display the values in table
                                ?>

                                    <tr>
                                        <td><?php echo  $sn++; ?></td>
                                        <td><?php echo  $name; ?> </td>
                                        <td><?php echo  $buyingPrice; ?></td>
                                        <td><?php echo  $sellingPrice; ?></td>
                                        <td><?php echo  $company; ?></td>
                                        <td><?php echo  $entryDate; ?></td>
                                        <td><?php echo  $expDate; ?></td>
                                        <td><?php echo  $discount; ?></td>
                                        <td>
                                            <a href="chocolate-update.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                            <a href="chocolate-delete.php?id=<?php echo $id; ?>" class="btn-denger">Delete</a> 
                                            
                                        </td>
                
                                    </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //We do not have any datavase

                        }

                    }
                
                ?>
            </table>

            

        </div>
    </div>

    <!--Menu Contact Section ends -->

<?php include('footer.php'); ?>