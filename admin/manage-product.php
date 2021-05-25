<?php include('menu.php'); ?>
<script src="../js/searchProduct.js"></script>
    
    
    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Product</h1>  
            <form  class="text-center">
                <input type="search" name="name" id="name" class="search" placeholder="Search By Name" onkeyup="ajax()">
                
                

            </form>
            

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

            <!-- Button to add Product -->
            <a href="add-product.php" class="btn-primary">Add Product</a> 
            
            
            <br/><br/><br/>
            <div class="result" id='result'>
            
            <?php 
		        echo "<table class='tbl-full'>
		        <tr>
                    <th>ID no.</th>
                    <th>Product Name </th>
                    <th>Company </th>
                    <th>Catagory </th>
                    <th>Entry Date </th>
                    <th>Exp. Date </th>
                    <th>Buying Price</th>
                    <th>Saling Price </th>
                    <th>Discount </th>
                    <th>Actions</th>
		        </tr>";
                $sn=1;
	
		        $row = displayallproduct($conn);
            ?>
            
            <?php
		        foreach($row as $var){
                
			    echo "
                
				<tr>
                <td>{$var['id']}</td>
                <td>{$var['name']} </td>
                <td>{$var['company']}</td>
                <td>{$var['catagory']}</td>
                <td>{$var['entryDate']}</td>
                <td>{$var['expDate']}</td>
                <td>{$var['buyPrice']}</td>
                <td>{$var['salePrice']}</td>
                <td>{$var['discount']}</td>
                <td>
                    <a href='product-update.php?id={$var['id']}' class='btn-secondary'>Update</a>
                    <a href='product-delete.php?id={$var['id']}' name='delete' class='btn-denger'>Delete</a>
                    
                </td>
                </tr>
                
						
				";
				
			
		}

			echo "</table>";
?>
</div>

            

                
    <!--Menu Contact Section ends -->



    <?php include('footer.php'); ?>