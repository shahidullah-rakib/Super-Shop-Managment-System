<?php

    //include constent.php file
    include('../model/constants.php');

    //get the id of accountent to be delete
    $id = $_GET['id'];

    //create sql query to delete
    $sql = "DELETE FROM accountent WHERE id=$id";

    //Execute the quary
    $res = mysqli_query($conn, $sql);

    //check the query

    if($res = true)
    {
        //quary execuate
        //echo "accountent Delete";
        $_SESSION['delete'] = "<div class='success'>Accountent Deleted Successfully</div>";
        header('location: ../admin/manage-accountent.php');
    }
    else
    {
        //not execuate
        //echo "accountent not delete";
        $_SESSION['delete'] = "<div class='error'> Accountent not Deleted. Try again.....</div>";
        header('location: ../admin/manage-accountent.php');

    }

    //Redirect to manage accountent page with message (success/erroe)

?>