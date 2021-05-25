<?php include('../model/constants.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
		$current_password = $_POST['current_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		
        //check weather the user with current password
        $sql = " SELECT * FROM admin WHERE id=$id AND password='$current_password' ";
		
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);

		//check whether the data 

		if($res==true)
		{
            //check weather data avaible or not
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                if($new_password==$confirm_password)
                {
                    //update Password
                    $sql2 = "UPDATE admin SET
                        password='$new_password' 
                        WHERE id=$id
                    ";

                    $res2 = mysqli_query($conn, $sql2);

                    //check weather query exeuted or not
                    if($res2==true)
                    {
                        //user password can be changed
                        $_SESSION['valid'] = "<div class='success'> Password Changed</div> ";
    			        header('location: ../admin/Seeting.php');
                    }
                    else
                    {
                         //echo "data inserted";
                        $_SESSION['not-valid'] = "<div class='error'>Failed to change password. Try Again....</div> ";

			            header('location: ../admin/Seeting.php');
                    }

                    
                }
                else
                {
                     //echo "data inserted";
                    $_SESSION['not-valid'] = "<div class='error'>New password and Current password missmatch. Try again....</div> ";

			        header('location: ../admin/manage-admin.php');
                }
                
            }
            else
            {
                //echo "data inserted";
                $_SESSION['not-valid'] = "<div class='error'>Wrong Current Password. Try Again....</div> ";

			    header('location: ../admin/manage-admin.php');
            }
			
			
		}
		else
		{
			
		}


	}

?>