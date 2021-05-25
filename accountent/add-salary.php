<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Add Salary</h1> <br/>
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
            if(isset($_SESSION['aemail']))
            {
                echo $_SESSION['aemail'];
                unset($_SESSION['aemail']);
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

        <form action="../controller/addSalaryCheck.php" method="post" enctype="multipart/form-data" onsubmit="return myFunction()">
            <table class="tbl-full">
                <tr>
                    <td>Full Name: </td>
                    <td> <input type="text" name="name" placeholder="Full Name" id="name"></td>
                </tr>

                <tr>
                    <td>Type: </td>
                    <td> 
                        <input type="radio" name="type" id="type" value="Admin">Admin
                        <input type="radio" name="type" id="type" value="Seller">Seller
                        <input type="radio" name="type" id= "type" value="Accountent">Accountent
                    
                    </td>
                </tr>

                
                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" id="email" placeholder="Email"></td>
                </tr>

                <tr>
                    <td>Salary Month: </td>
                    <td> 
                        <input type="radio" name="month" value="January"  class="input-responsive" >January
                        <input type="radio" name="month" value="February" id="" class="input-responsive" >February
                        <input type="radio" name="month" value="March" id="" class="input-responsive" >March <br>
                        <input type="radio" name="month" value="April" id="" class="input-responsive" >April
                        <input type="radio" name="month" value="May" id="" class="input-responsive" >May
                        <input type="radio" name="month" value="June" id="" class="input-responsive" >June <br>
                        <input type="radio" name="month" value="July" id="" class="input-responsive" >July
                        <input type="radio" name="month" value="August" id="" class="input-responsive" >August
                        <input type="radio" name="month" value="September" id="" class="input-responsive" >September <br>
                        <input type="radio" name="month" value="October" id="" class="input-responsive" >October
                        <input type="radio" name="month" value="November" id="" class="input-responsive" >November
                        <input type="radio" name="month" value="December" id="" class="input-responsive" >December <br>
                    </td>
                </tr>

                <tr>
                    <td>Salary: </td>
                    <td> <input type="text" name="salary" id="salary" placeholder="Salary" ></td>
                </tr>

                <tr>
                    <td>Bonus: </td>
                    <td> <input type="text" name="bonus" id="bonus" value="NULL"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value=" Add Salary" class="btn-secondary">
                        <input type="reset" name="reset" value="Reset" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        <script src="../js/addSalaryValidation.js"></script>

    </div>
</div>

<?php include('footer.php'); ?>

