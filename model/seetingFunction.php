<?php
     require_once('../model/constants.php');

	 function displayAdmin($conn){
        $sql = "SELECT * FROM admin";
        

        //execuate the cuery
        $res = mysqli_query($conn, $sql);
        $admin = [];
        while($row = mysqli_fetch_assoc($res)){
            array_push($admin, $row);
        }
        return $admin;
    }

    function updateAdmin( $conn, $db_select){

        $id = $_POST['id'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];

        $sql = "UPDATE admin SET
		name = '$name',
		dob = '$dob',
		gender = '$gender',
		email = '$email',
		phone = '$phone',
		address = '$address'
        WHERE id='$id'
		";
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);
		//check whether the data
		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Updated Successfully</div> ";
			header('location: ../admin/Seeting.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Updated Failed. Please Try Again....</div> ";
			header('location: ../admin/Seeting.php');
		}
    }

?>