<?php
    require_once('../model/constants.php');

    function displayOrderInfobyID($id, $conn){
        $sql = "SELECT * FROM tbl_order WHERE id=$id";

        //execuate the cuery
        $res = mysqli_query($conn, $sql);

        if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                //check admin data
                if($count==1)
                {
                    //get the details
                    //echo "tbl_order Available";
                    $row = mysqli_fetch_assoc($res);
                    return $row;
                }
            }
    }
    
    function updateOrder( $conn, $db_select){

        $id = $_POST['id'];
        $product = $_POST['product'];
		$price = $_POST['price'];
	    $qty = $_POST['qty'];
	    $total = $_POST['total'];
	    $order_date = $_POST['order_date'];
	    $status = $_POST['status'];
	    $customer_name = $_POST['customer_name'];
	    $customer_contact = $_POST['customer_contact'];
	    $customer_email = $_POST['customer_email'];
	    $customer_address = $_POST['customer_address'];

        $sql = "UPDATE tbl_order SET
		qty = '$qty',
		total = '$total',
		order_date = '$order_date',
		status = '$status',
		customer_name = '$customer_name',
		customer_contact = '$customer_contact',
		customer_email = '$customer_email',
		customer_address = '$customer_address'
        WHERE id='$id'
		";
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);
		//check whether the data
		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Admin Updated Successfully</div> ";
			header('location: ../admin/orderInfo.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Admin Updated Failed. Please Try Again....</div> ";
			header('location: ../admin/orderInfo.php');
		}
    }

    function updateVat( $conn, $db_select){

        $id = $_POST['id'];
        $vat = $_POST['vat'];
		

        $sql = "UPDATE allproduct SET
		vat = '$vat',
        WHERE id='$id'
		";
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);
		//check whether the data
		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Vat Added</div> ";
			header('location: ../admin/vatAndOffer.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Failed. Please Try Again....</div> ";
			header('location: ../admin/vatAndOffer.php');
		}
    }

?>