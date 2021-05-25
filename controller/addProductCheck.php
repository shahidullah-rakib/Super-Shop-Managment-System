<?php include('../model/constants.php'); ?>
<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['company']) || empty($_POST['catagory']) || empty($_POST['entryDate']) || empty($_POST['expDate']) || empty($_POST['buyPrice']) || empty($_POST['salePrice']) || empty($_POST['discount']))
		{
            $_SESSION['error'] = "Plaese fill out all the field <br>";
			header('location: ../seller/add-chocolates.php');
        }
        else{
            //validation check 1
            
            $temp_exp=explode('-', $_POST['expDate']);

            if ($temp_exp[0]>2024) {
                $_SESSION['adob'] = "Please select year before 2024 <br>";
				header('location: ../seller/add-chocolates.php');
            }
            else{
                $name = $_POST['name'];
	 			$company = $_POST['company'];
				$catagory=($_POST['catagory']);
	 			$entryDate = $_POST['entryDate'];
	 			$expDate = $_POST['expDate'];
	 			$buyPrice = $_POST['buyPrice'];
	 			$salePrice = $_POST['salePrice'];
	 			$discount = $_POST['discount'];
                
                //validation check 2
                $error=false;

                if(strlen($name)<3){
                   // echo "name must contain at least 3 charecters<br>";
					$_SESSION['pname'] = "name must contain at least 3 charecters"; 
					header('location: ../seller/add-chocolates.php');
                    $error=true;
                }
                if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || strpos($name, '%') || strpos($name, '&')){
                    //echo "name cannot contain any special charecter<br>";
					$_SESSION['pname'] = "name cannot contain any special charecter"; 
					header('location: ../seller/add-chocolates.php');
                    $error=true;
                }
                
                elseif($error==false){
                    //Sql quary to save the data into database
	
					$sql = "INSERT INTO allproduct SET
					id = '',
					name = '$name',
					company = '$company',
					catagory = '$catagory',
					entryDate = '$entryDate',
					expDate = '$expDate',
					buyPrice = '$buyPrice',
					salePrice = '$salePrice',
					discount = '$discount'
					";

					//Executing quary and saving data into data base
					$res = mysqli_query($conn, $sql) or die(mysqli_error());
					
					//check whether the data 
	
					if($res==TRUE)
					{
						//echo "data inserted";
						$_SESSION['add'] = "Product Added Successfully <br>";
	
						header('location: ../admin/manage-product.php');
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