<?php include('../model/constants.php'); ?>
<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['phonenumber']) || empty($_POST['email'])){
            $_SESSION['error'] = "Plaese fill out all the field <br>";
			header('location: ../admin/add-seller.php');
        }
        else{
            //validation check 1
            
            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePicture"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $_SESSION['profilePicture'] = "only jpeg, jpg & png files are allowed <br>";
				header('location: ../admin/add-seller.php');
            }
            if ($temp_dob[0]>2016) {
                $_SESSION['adob'] = "Please select year before 2016 <br>";
				header('location: ../admin/add-seller.php');
            }
            else{
                $afullname = $_POST['name'];
	 			$apassword = $_POST['password'];
				$adob=($_POST['dob']);
	 			$agender = $_POST['gender'];
	 			$aphonenumber = $_POST['phonenumber'];
	 			$aemail = $_POST['email'];
	 			$aaddress = $_POST['address'];
				
				
				 $file_info = $_FILES['profilePicture'];
				 $path = '../upload/'.$file_info['name'];
				 
				 if(move_uploaded_file($file_info['tmp_name'], $path))
				 {
					$_SESSION['upload'] = "Picture Upload Successfully <br>";
	
					header('location: ../admin/manage-seller.php');
				 }else{
					 echo "error";
				 }
                
                //validation check 2
                $error=false;

                if(strlen($afullname)<3){
                   // echo "name must contain at least 3 charecters<br>";
					$_SESSION['aname'] = "name must contain at least 3 charecters"; 
					header('location: ../admin/add-seller.php');
                    $error=true;
                }
                if(strpos($afullname, '!') || strpos($afullname, '@') || strpos($afullname, '#') || strpos($afullname, '%') || strpos($name, '&')){
                    //echo "name cannot contain any special charecter<br>";
					$_SESSION['aname'] = "name cannot contain any special charecter"; 
					header('location: ../admin/add-seller.php');
                    $error=true;
                }
                if(strlen($aphonenumber)<11 || strlen($aphonenumber)>11 ){
                    //echo "phone no. must contain 11 digit <br>";
					$_SESSION['aname'] = "phone no. must contain 11 digit"; 
                    header('location: ../admin/add-seller.php');
                    $error=true;
                }
                if(strlen($apassword)<6){
                    //echo "password must contain at least 6 charecters <br>";
					$_SESSION['aname'] = "password must contain at least 6 charecters"; 
					header('location: ../admin/add-seller.php');
                    $error=true;
                }
                if(!strpos($apassword, '0') and !strpos($apassword, '1') and !strpos($apassword, '2') and !strpos($apassword, '3') and !strpos($apassword, '4') and !strpos($apassword, '5') and !strpos($apassword, '6') and !strpos($apassword, '7') and !strpos($apassword, '8') and !strpos($apassword, '9')){
                    //echo "password must contain atleast one number  <br>";
					$_SESSION['aname'] = "password must contain atleast one number"; 
					header('location: ../admin/add-seller.php');
                    $error=true;
                }
				if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$aemail)) {
	
					$_SESSION['aemail'] = "Email: Invalid email format <br>";
					header('location: ../admin/add-seller.php');
					$error=true;
		
				}
                
                elseif($error==false){
                    //Sql quary to save the data into database
	
					$sql = "INSERT INTO seller SET
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
						$_SESSION['add'] = "Seller Added Successfully <br>";

						//set cookie
						setcookie('name', $afullname, time()+60*60*7);
						setcookie('password', $apassword, time()+60*60*7);
						setcookie('dob', $adob, time()+60*60*7);
						setcookie('gender', $agender, time()+60*60*7);
						setcookie('email', $aemail, time()+60*60*7);
						setcookie('phone', $aphonenumber, time()+60*60*7);
						setcookie('address', $aaddress, time()+60*60*7);
	
						header('location: ../admin/manage-seller.php');
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