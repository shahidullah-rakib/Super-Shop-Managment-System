<?php //include('../model/constants.php'); ?>
<?php include('../model/salaryInfoFunction.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
		$emp_salary = [

			'name'=> $name,
			'type'=> $type,
			'email'=> $email,
			'month'=> $month,
			'salary'=> $salary,
			'bonus'=> $bonus,
		];


		updateEmp_salary($conn, $db_select);

	}

?>