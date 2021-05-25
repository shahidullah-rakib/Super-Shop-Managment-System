<?php
    //require('../model/constants.php');

    function displayMember($conn){
        $sql = "SELECT * FROM customer";
        

        //execuate the cuery
        $res = mysqli_query($conn, $sql);
        $customer = [];
        while($row = mysqli_fetch_assoc($res)){
            array_push($customer, $row);
        }
        return $customer;
    }
    
    
    function displayMemberbyID($id, $conn){
        $sql = "SELECT * FROM customer WHERE id=$id";

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
    
    function updateMember( $conn, $db_select){

        $id = $_POST['id'];
		$afullname = $_POST['name'];
		$apassword = $_POST['password'];
		$adob = $_POST['dob'];
		$agender = $_POST['gender'];
		$aphonenumber = $_POST['phonenumber'];
		$aemail = $_POST['email'];
		$aaddress = $_POST['address'];

        $sql = "UPDATE customer SET
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
		}
    }

    function deleteMember($id, $conn){

        $id = $_GET['id'];
        //create sql query to delete
        $sql = "DELETE FROM customer WHERE id=$id";
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