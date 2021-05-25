<?php //include('../model/constants.php'); ?>
<?php include('../model/orderFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        
		$order = [
			'name'=> $name,
			'company'=> $company,
			'catagory'=> $catagory,
			'entryDate'=> $entryDate,
			'expDate'=> $expDate,
			'buyPrice'=> $buyPrice,
			'salePrice'=> $salePrice,
			'discount'=> $discount,
			'vat'=> $vat,
			
		];


		updateVat($conn, $db_select);

	}

?>