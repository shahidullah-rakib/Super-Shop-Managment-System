<?php include('../model/constants.php'); ?>
<?php 
    //process the value from Form and save it

	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
		if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['phonenumber']) || empty($_POST['email']))
		{
            $_SESSION['error'] = "Plaese fill out all the field <br>";
			header('location: ../view/register.php');
        }
		else{
			//validation check 1
            
            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePicture"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $_SESSION['profilePicture'] = "only jpeg, jpg & png files are allowed <br>";
				header('location: ../view/register.php');
            }
            if ($temp_dob[0]>2016) {
                $_SESSION['adob'] = "Please select year before 2016 <br>";
				header('location: ../view/register.php');
            }
			else{
				$afullname = $_POST['name'];
				$apassword = $_POST['password'];
				$arepass=$_POST['repass'];
				$adob = $_POST['dob'];
				$agender = $_POST['gender'];
				$aphonenumber = $_POST['phonenumber'];
				$aemail = $_POST['email'];
				$aaddress = $_POST['address'];

				$file_info = $_FILES['profilePicture'];
				$path = '../upload/'.$file_info['name'];
				
				if(move_uploaded_file($file_info['tmp_name'], $path))
				{
				   //$_SESSION['upload'] = "Picture Upload Successfully <br>";
   
				   header('location: ../view/loginCustomer.php');
				}else{
					echo "error";
				}
			   
			   //validation check 2
			   $error=false;

			   if ($password!=$arepass) {
				$_SESSION['repass'] = "please check your password and confirm password <br>";
				header('location: ../view/register.php');
				}

			   if(strlen($afullname)<3){
				  // echo "name must contain at least 3 charecters<br>";
				   $_SESSION['aname'] = "name must contain at least 3 charecters"; 
				   header('location: ../view/register.php');
				   $error=true;
			   }
			   
			   if(strlen($aphonenumber)<11 || strlen($aphonenumber)>11 ){
				   //echo "phone no. must contain 11 digit <br>";
				   $_SESSION['aname'] = "phone no. must contain 11 digit"; 
				   header('location: ../view/register.php');
				   $error=true;
			   }
			   if(strlen($apassword)<6){
				   //echo "password must contain at least 6 charecters <br>";
				   $_SESSION['aname'] = "password must contain at least 6 charecters"; 
				   header('location: ../view/register.php');
				   $error=true;
			   }
			   if(!strpos($apassword, '0') and !strpos($apassword, '1') and !strpos($apassword, '2') and !strpos($apassword, '3') and !strpos($apassword, '4') and !strpos($apassword, '5') and !strpos($apassword, '6') and !strpos($apassword, '7') and !strpos($apassword, '8') and !strpos($apassword, '9')){
				   //echo "password must contain atleast one number  <br>";
				   $_SESSION['aname'] = "password must contain atleast one number"; 
				   header('location: ../view/register.php');
				   $error=true;
			   }
			   

			   elseif($error==false){

				//Sql quary to save the data into database

				$sql = "INSERT INTO customer SET
				id = '',
				name = '$afullname',
				password = '$apassword',
				dob = '$adob',
				gender = '$agender',
				email = '$aemail',
				phone = '$aphonenumber',
				address = '$aaddress',
				profilePicture = '$path'
				";
	
				//Executing quary and saving data into data base
				$res = mysqli_query($conn, $sql) or die(mysqli_error());

				//check whether the data 

				if($res==TRUE)
				{
					//echo "data inserted";
					$_SESSION['add'] = "Sign Up Successful <br>";
					header('location: ../view/loginCustomer.php');
				}
				else
				{
					echo "failed";
				}
			   }
			}
		}

	}

?>