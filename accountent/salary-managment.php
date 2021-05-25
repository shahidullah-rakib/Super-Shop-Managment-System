<?php include('menu.php'); ?>

    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Salary</h1> 

            <br/>
            
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            } 

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['valid']))
            {
                echo $_SESSION['valid'];
                unset($_SESSION['valid']);
            }

            if(isset($_SESSION['not-valid']))
            {
                echo $_SESSION['not-valid'];
                unset($_SESSION['not-valid']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            
            ?>


            <br/><br/><br/>

            <!-- Button to add salary -->
            <a href="add-salary.php" class="btn-primary">Add Salary</a> <br/><br/><br/>

            <table  class="tbl-full">
                <tr>
                    <th>ID no.</th>
                    <th>Name </th>
                    <th>Type </th>
                    <th>Email</th>
                    <th>Salary Month</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Actions</th>
                </tr>

                <?php
                    //Quary to get all emp_salary
                    $sql = "SELECT * FROM emp_salary";
                    //Execute the quary
                    $res = mysqli_query($conn, $sql);
                    
                    //check the query 
                    if($res==TRUE)
                    {
                        //count Rows to check the data base
                        $count = mysqli_num_rows($res);

                        //create a variable
                        $sn=1; 

                        //Check the nymber of rows
                        if($count>0)
                        {
                            //we have data in databae
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using whileloop to get tahe data
                                //And while loop will run as wel as we have data

                                //get individual data
                                $id = $rows['id'];
                                $name = $rows['name'];
		                        $type = $rows['type'];
	                        	$email  = $rows['email'];
	                        	$salary_month = $rows['salary_month'];
	                        	$salary = $rows['salary'];
	                        	$bonus = $rows['bonus'];

                                //display the values in table
                                ?>

                                    <tr>
                                        <td><?php echo  $sn++; ?></td>
                                        <td><?php echo  $name; ?> </td>
                                        <td><?php echo  $type; ?></td>
                                        <td><?php echo  $email; ?></td>
                                        <td><?php echo  $salary_month; ?></td>
                                        <td><?php echo  $salary; ?></td>
                                        <td><?php echo  $bonus; ?></td>
                                        <td>
                                            <a href="salary-update.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                            <a href="salary-delete.php?id=<?php echo $id; ?>" class="btn-denger">Delete</a> 
                                            
                                        </td>
                
                                    </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //We do not have any datavase

                        }

                    }
                
                ?>
            </table>

            

        </div>
    </div>

    <!--Menu Contact Section ends -->

    <?php include('footer.php'); ?>