<?php include('menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>INFORMATION</h1>
            <br/><br/>

            <table class="tbl-80">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $_SESSION['name']?></td>
                        <td rowspan=8 align="center">
                            <img src="../upload/A.jpg" height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Type </td>
                        <td>: <?php echo $_SESSION['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $_SESSION['gender']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $_SESSION['phone']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $_SESSION['address']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>:<?php echo $_SESSION['dob']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                </table>
            

        </div>
    </div>

<?php include('footer.php'); ?>