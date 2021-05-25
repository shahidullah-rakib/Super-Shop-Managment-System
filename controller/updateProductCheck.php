<?php //include('../model/constants.php'); ?>
<?php include('../model/productFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        
		$admin = [

			'name'=> $name,
			'company'=> $company,
			'catagory'=> $catagory,
			'entryDate'=> $entryDate,
			'expDate'=> $expDate,
			'buyPrice'=> $buyPrice,
			'salePrice'=> $salePrice,
			'discount'=> $discount,
		];


		updateallproduct($conn, $db_select);

	}

?>