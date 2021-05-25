<?php include('../model/constants.php'); ?>
<?php 
    //process the value from Form and save it
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        
		$email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];

          //sql to check the email and pass
		    $sql = "SELECT * FROM admin WHERE email= '$email' AND password='$password' "; 

             //execute the quary
            $res = mysqli_query($conn, $sql);

            //count the row to check the user
            $count = mysqli_num_rows($res);

		    //check whether the data 

		    if($count==1)
		    {
				//$name = mysqli_fetch_assoc($res);

				//$_SESSION['name'] = $name['name'];
				include('../personalInfo/adminPresoanlInfo.php');

		    	//echo "data inserted";
		    	$_SESSION['login'] = "<div class='success'>Login Successfully</div> ";  

				//using cookie
				if(isset($_POST['remember'])){
					
					setcookie('email', $email, time()+60*60*7);
					setcookie('password', $password, time()+60*60*7);
				}

				//to check login or not
                $_SESSION['user'] = $email;
				$_SESSION['user'] = $password; 
		    	header('location: ../admin/admin-index.php');

		    }
		    else
		    {
		    	$_SESSION['logError'] = "<div class='error'>Email or Password wrong. Please Try Again....</div> ";

		    	header('location: ../view/loginAdmin.php');
		    }

	}

?>