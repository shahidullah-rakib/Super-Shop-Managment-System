<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Member</h1>

        <?php 
            //get the id of selected Admin
            $id = $_GET['id'];

            //sql to get the id
            $sql = "SELECT * FROM customer WHERE id=$id";

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
                    //get the details
                    //echo "Admin Available";
                    $row = mysqli_fetch_assoc($res);

                    $afullname = $row['name'];
                    $apassword = $row['password'];
                   	$adob = $row['dob'];
	              	$agender = $row['gender'];
	            	$aphonenumber = $row['phone'];
                  	$aemail = $row['email'];
	            	$aaddress = $row['address'];
                }
                else
                {
                    //redirect to manage admin page
                    header('location: ../admin/manage-member.php');
                }
            }
        
        ?>

        <form action="../controller/updateMemberCheck.php" enctype="multipart/form-data" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo  $afullname; ?>"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td> <input type="text" name="password" id="" value="<?php echo  $apassword; ?>"></td>
                </tr>

                
                <tr>
                    <td>Date Of Birth: </td>
                    <td> <input type="date" name="dob" id="" value="<?php echo  $adob; ?>"></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td> 
                        <input type="text" name="gender" value="<?php echo  $agender; ?>" class="input-responsive" required>
                    </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td> <input type="tel" name="phonenumber" id="" value="<?php echo  $aphonenumber; ?>"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" id="" value="<?php echo  $aemail; ?>"></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td> <input type="text" name="address" id="" value="<?php echo  $aaddress; ?>"></td>
                </tr>

                <tr>
                    <td>Profile Picture: </td>
                    <td> <input type="file" name="profilePicture" value="<?php echo $status['profilePicture'] ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Member" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>