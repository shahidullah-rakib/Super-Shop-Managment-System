<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Salary</h1>

        <?php 
            //get the id of selected Admin
            $id = $_GET['id'];

            //sql to get the id
            $sql = "SELECT * FROM emp_salary WHERE id=$id";

            //execuate the cuery
            $res = mysqli_query($conn, $sql);

            //check weather the quary exucation
            if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                //check admin data
                if($count==1)
                {
                    $rows = mysqli_fetch_assoc($res);

                    $id = $rows['id'];
                    $name = $rows['name'];
		            $type = $rows['type'];
	                $email  = $rows['email'];
	            	$salary_month = $rows['salary_month'];
                	$salary = $rows['salary'];
	            	$bonus = $rows['bonus'];
                }
                else
                {
                    //redirect to manage page
                    header('location: ../accountent/salary-managment.php');
                }
            }
        
        ?>

        <form action="../controller/updateSalaryCheck.php" method="post">
            <table class="tbl-30">
            <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo  $name; ?>"></td>
                </tr>

                <tr>
                    <td>Type: </td>
                    <td> <input type="text" name="type" value="<?php echo  $type; ?>"></td>
                </tr>

                
                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" value="<?php echo  $email; ?>"></td>
                </tr>

                <tr>
                    <td>Salary Month: </td>
                    <td> <input type="text" name="month" value="<?php echo  $salary_month; ?>"></td>
                </tr>

                <tr>
                    <td>Salary: </td>
                    <td> <input type="text" name="salary" value="<?php echo  $salary; ?>"></td>
                </tr>

                <tr>
                    <td>Bonus: </td>
                    <td> <input type="text" name="bonus" value="<?php echo  $bonus; ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Salary" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>