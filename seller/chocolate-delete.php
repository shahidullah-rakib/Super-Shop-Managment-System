<?php

    //include constent.php file
    include('../model/constants.php');

    //get the id of admin to be delete
    $id = $_GET['id'];

    //create sql query to delete
    $sql = "DELETE FROM chocolates_product WHERE id=$id";

    //Execute the quary
    $res = mysqli_query($conn, $sql);

    //check the query

    if($res = true)
    {
        //quary execuate
        //echo "Admin Delete";
        $_SESSION['delete'] = "<div class='success'>Product Deleted Successfully</div>";
        header('location: ../seller/chocolates.php');
    }
    else
    {
        //not execuate
        //echo "Admin not delete";
        $_SESSION['delete'] = "<div class='error'> Product not Deleted. Try again.....</div>";
        header('location: ../seller/chocolates.php');

    }

    //Redirect to manage admin page with message (success/erroe)

?>