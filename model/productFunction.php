<?php
    require_once('../model/constants.php');

    function displayallproduct($conn){
        $sql = "SELECT * FROM allproduct";
        

        //execuate the cuery
        $res = mysqli_query($conn, $sql);
        $allproduct = [];
        while($row = mysqli_fetch_assoc($res)){
            array_push($allproduct, $row);
        }
        return $allproduct;
    }
    
    
    function displayallproductbyID($id, $conn){
        $sql = "SELECT * FROM allproduct WHERE id=$id";

        //execuate the cuery
        $res = mysqli_query($conn, $sql);

        if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                //check allproduct data
                if($count==1)
                {
                    //get the details
                    //echo "allproduct Available";
                    $row = mysqli_fetch_assoc($res);
                    return $row;
                }
            }
    }
    
    function updateallproduct( $conn, $db_select){

        $id = $_POST['id'];
		$name = $_POST['name'];
		$company = $_POST['company'];
		$catagory = $_POST['catagory'];
		$entryDate = $_POST['entryDate'];
		$expDate = $_POST['expDate'];
		$buyPrice = $_POST['buyPrice'];
		$salePrice = $_POST['salePrice'];
		$discount = $_POST['discount'];

        $sql = "UPDATE allproduct SET
		name = '$name',
		company = '$company',
		catagory = '$catagory',
		entryDate = '$entryDate',
		expDate = '$expDate',
		buyPrice = '$buyPrice',
		salePrice = '$salePrice',
		discount = '$discount'
        WHERE id='$id'
		";
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);
		//check whether the data
		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Product Updated Successfully</div> ";
			header('location: ../admin/manage-product.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Product Updated Failed. Please Try Again....</div> ";
			header('location: ../admin/manage-product.php');
		}
    }

    function deleteallproduct($id, $conn){

        $id = $_GET['id'];
        //create sql query to delete
        $sql = "DELETE FROM allproduct WHERE id=$id";
        //Execute the quary
        $res = mysqli_query($conn, $sql);
        //check the query
        if($res = true)
        {
            $_SESSION['delete'] = "<div class='success'>Product Deleted Successfully</div>";
            header('location: ../admin/manage-product.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'> Product not Deleted. Try again.....</div>";
            header('location: ../admin/manage-product.php');
    
        }
    }
        

    
    


?>