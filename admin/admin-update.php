<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <?php
            $id = $_GET['id'];

            $status= displayAdminbyID($id, $conn);
        
        ?>
        

        <form action="../controller/updateAdminCheck.php" enctype="multipart/form-data" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo $status['name'] ?>"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td> <input type="text" name="password" id="" value="<?php echo $status['password'] ?>"></td>
                </tr>

                
                <tr>
                    <td>Date Of Birth: </td>
                    <td> <input type="date" name="dob" id="" value="<?php echo $status['dob'] ?>"></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td> 
                        <input type="text" name="gender" value="<?php echo $status['gender'] ?>" class="input-responsive" required>
                    </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td> <input type="tel" name="phonenumber" id="" value="<?php echo $status['phone'] ?>"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" id="" value="<?php echo $status['email'] ?>"></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td> <input type="text" name="address" id="" value="<?php echo $status['address'] ?>"></td>
                </tr>

                <tr>
                    <td>Profile Picture: </td>
                    <td> <input type="file" name="profilePicture" value="<?php echo $status['profilePicture'] ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>