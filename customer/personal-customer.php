<?php include('header.php'); ?>

<section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Information</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected product</legend>

                    <div class="product-menu-img">
                        <img src="../upload/A.jpg" class="img-responsive img-curve">
                    </div>
    
                    <div class="product-menu-desc">
                    <table class="tbl-80">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $_SESSION['name']?></td>
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

                </fieldset>

            </form>

        </div>
    </section>

<?php include('footer.php'); ?>