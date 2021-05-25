<?php include('../model/constants.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
		$afullname = $_POST['name'];
		$apassword = $_POST['password'];
		$adob = $_POST['dob'];
		$agender = $_POST['gender'];
		$aphonenumber = $_POST['phonenumber'];
		$aemail = $_POST['email'];
		$aaddress = $_POST['address'];

		$file_info = $_FILES['profilePicture'];
        $path = '../upload/'.$file_info['name'];
        
        if(move_uploaded_file($file_info['tmp_name'], $path))
        {
           $_SESSION['upload'] = "Picture Upload Successfully <br>";

           header('location: ../admin/manage-admin.php');
        }else{
            echo "error";
        }
		

		//Sql quary to save the data into database

		$sql = "UPDATE customer SET
			name = '$afullname',
			password = '$apassword',
			dob = '$adob',
			gender = '$agender',
			email = '$aemail',
			phone = '$aphonenumber',
			address = '$aaddress',
			profilePicture = '$path'
            WHERE id='$id'
		";
		
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);

		//check whether the data 

		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Member Updated Successfully</div> ";

			header('location: ../admin/manage-member.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Member Updated Failed. Please Try Again....</div> ";

			header('location: ../admin/manage-member.php');
		}


	}

?>