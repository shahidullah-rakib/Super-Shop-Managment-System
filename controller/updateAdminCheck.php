<?php //include('../model/constants.php'); ?>
<?php include('../model/adminFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        
		$admin = [

			'afullname'=> $afullname,
			'apassword'=> $apassword,
			'adob'=> $adob,
			'agender'=> $agender,
			'aemail'=> $aemail,
			'aphonenumber'=> $aphonenumber,
			'aaddress'=> $aaddress,
		];


		updateAdmin($conn, $db_select);

	}

?>