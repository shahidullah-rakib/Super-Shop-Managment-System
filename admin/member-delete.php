<?php

    //include constent.php file
    include('../model/constants.php');

    //get the id of customer to be delete
    $id = $_GET['id'];

    //create sql query to delete
    $sql = "DELETE FROM customer WHERE id=$id";

    //Execute the quary
    $res = mysqli_query($conn, $sql);

    //check the query

    if($res = true)
    {
        //quary execuate
        //echo "customer Delete";
        $_SESSION['delete'] = "<div class='success'>Member Deleted Successfully</div>";
        header('location: ../admin/manage-member.php');
    }
    else
    {
        //not execuate
        //echo "member not delete";
        $_SESSION['delete'] = "<div class='error'> Member not Deleted. Try again.....</div>";
        header('location: ../admin/manage-member.php');

    }

    //Redirect to manage member page with message (success/erroe)

?>