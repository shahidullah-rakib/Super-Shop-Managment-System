<?php include('../model/seetingFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        
		$admin = [

			'name'=> $name,
			'dob'=> $dob,
			'gender'=> $gender,
			'email'=> $email,
			'phone'=> $phone,
			'address'=> $address
		];


		updateAdmin($conn, $db_select);

	}

?>