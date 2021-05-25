<?php
    require_once('../model/constants.php');

    function displayEmpSalary($conn){
        $sql = "SELECT * FROM emp_salary";
        

        //execuate the cuery
        $res = mysqli_query($conn, $sql);
        $emp_salary = [];
        while($row = mysqli_fetch_assoc($res)){
            array_push($emp_salary, $row);
        }
        return $emp_salary;
    }

    function displayemp_salarybyID($id, $conn){
        $sql = "SELECT * FROM emp_salary WHERE id=$id";

        //execuate the cuery
        $res = mysqli_query($conn, $sql);

        if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                //check emp_salary data
                if($count==1)
                {
                    //get the details
                    //echo "emp_salary Available";
                    $row = mysqli_fetch_assoc($res);
                    return $row;
                }
            }
    }

    function updateEmp_salary( $conn, $db_select){

        $id = $_POST['id'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$email = $_POST['email'];
		$month = $_POST['month'];
		$salary = $_POST['salary'];
		$bonus = $_POST['bonus'];

        $sql = "UPDATE emp_salary SET
		name = '$name',
		type = '$type',
		email = '$email',
		salary_month = '$month',
		salary = '$salary',
		bonus = '$bonus'
        WHERE id='$id'
		";
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);
		//check whether the data
		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Salary Updated Successfully</div> ";
			header('location: ../admin/salary-Info.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Salary Updated Failed. Please Try Again....</div> ";
			header('location: ../admin/salary-Info.php');
		}
    }

    function deleteEmp_salary($id, $conn){

        $id = $_GET['id'];
        //create sql query to delete
        $sql = "DELETE FROM emp_salary WHERE id=$id";
        //Execute the quary
        $res = mysqli_query($conn, $sql);
        //check the query
        if($res = true)
        {
            $_SESSION['delete'] = "<div class='success'>Salary Deleted Successfully</div>";
            header('location: ../admin/salary-Info.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'> Salary not Deleted. Try again.....</div>";
            header('location: ../admin/salary-Info.php');
    
        }
    }
    

?>