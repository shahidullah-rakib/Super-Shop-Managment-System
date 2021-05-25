<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Add Admin</h1> <br/>
        <?php
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } 

            if(isset($_SESSION['aname']))
            {
                echo $_SESSION['aname'];
                unset($_SESSION['aname']);
            } 
            if(isset($_SESSION['password']))
            {
                echo $_SESSION['password'];
                unset($_SESSION['password']);
            }
            if(isset($_SESSION['adob']))
            {
                echo $_SESSION['adob'];
                unset($_SESSION['adob']);
            }
            
            if(isset($_SESSION['aphone']))
            {
                echo $_SESSION['aphone'];
                unset($_SESSION['aphone']);
            }
            if(isset($_SESSION['profilePicture']))
            {
                echo $_SESSION['profilePicture'];
                unset($_SESSION['profilePicture']);
            }
        ?>
        <br/>

        <form action="../controller/addAdminCheck.php" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
            <table class="tbl-full">
                <tr>
                    <td>Full Name: </td>
                    <td> 
                        <input type="text" name="name" placeholder="Full Name" id="aName">
                        <b><span id="sp_name" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td> 
                        <input type="password" name="password" placeholder="Password" id="aPassword">
                        <b><span id="sp_password" class="formerror"></span></b>
                    </td>
                </tr>

                
                <tr>
                    <td>Date Of Birth: </td>
                    <td> 
                        <input type="date" name="dob" id="aDob">
                        <b><span id="sp_dob" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td> 
                        <input type="radio" name="gender" value="male" id="aGender" class="input-responsive" >Male
                        <input type="radio" name="gender" value="female" id="aGender" class="input-responsive" >Female
                        <input type="radio" name="gender" value="others" id="aGender" class="input-responsive" >Others
                        <b><span id="sp_gender" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td> 
                        <input type="tel" name="phonenumber" placeholder="Phone Number" id="aPhonenumber">
                        <b><span id="sp_phonenumber" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td> 
                        <input type="email" name="email" placeholder="Email Address" id="aEmail">
                        <b><span id="sp_email" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td> 
                        <textarea name="address" rows="10" placeholder="Street, City, Country" id="aAddress"></textarea>
                        <b><span id="sp_address" class="formerror"></span></b>
                    </td>
                </tr>

                <tr>
                    <td>Profile Picture: </td>
                    <td> <input type="file" name="profilePicture" ></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value=" Add Admin" class="btn-secondary" >
                        <input type="reset" name="reset" value="Reset" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<script src="../js/adminValidation.js"></script>
    
    

<?php include('footer.php'); ?>

