<?php //include('../model/constants.php'); ?>
<?php include('../model/orderFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        /* $id = $_POST['id'];
		$afullname = $_POST['name'];
		$apassword = $_POST['password'];
		$adob = $_POST['dob'];
		$agender = $_POST['gender'];
		$aphonenumber = $_POST['phonenumber'];
		$aemail = $_POST['email'];
		$aaddress = $_POST['address']; */
		

		//Sql quary to save the data into database

		/* $sql = "UPDATE admin SET
			name = '$afullname',
			password = '$apassword',
			dob = '$adob',
			gender = '$agender',
			email = '$aemail',
			phone = '$aphonenumber',
			address = '$aaddress'
            WHERE id='$id'
		";
		
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);

		//check whether the data 

		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Admin Updated Successfully</div> ";

			header('location: ../admin/manage-admin.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Admin Updated Failed. Please Try Again....</div> ";

			header('location: ../admin/manage-admin.php');
		} */
		$admin = [

			'product'=> $product,
			'price'=> $price,
			'qty'=> $qty,
			'total'=> $total,
			'order_date'=> $order_date,
			'status'=> $status,
			'customer_name'=> $customer_name,
			'customer_contact'=> $customer_contact,
			'customer_email'=> $customer_email,
			'customer_address'=> $customer_address,
		];


		updateOrder($conn, $db_select);

	}

?>