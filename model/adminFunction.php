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
    
    
    function displayAdminbyID($id, $conn){
        $sql = "SELECT * FROM admin WHERE id=$id";

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
                    //echo "Admin Available";
                    $row = mysqli_fetch_assoc($res);
                    return $row;
                }
            }
    }
    
    function updateAdmin( $conn, $db_select){

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

        $sql = "UPDATE admin SET
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
			$_SESSION['update'] = "<div class='success'>Order Updated Successfully</div> ";
			header('location: ../admin/manage-admin.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Order Updated Failed. Please Try Again....</div> ";
			header('location: ../admin/manage-admin.php');
		}
    }

    function deleteAdmin($id, $conn){

        $id = $_GET['id'];
        //create sql query to delete
        $sql = "DELETE FROM admin WHERE id=$id";
        //Execute the quary
        $res = mysqli_query($conn, $sql);
        //check the query
        if($res = true)
        {
            $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
            header('location: ../admin/manage-admin.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'> Admin not Deleted. Try again.....</div>";
            header('location: ../admin/manage-admin.php');
    
        }
    }
        


    


?>