<?php require('../model/constants.php'); ?>
<?php include_once('../model/adminFunction.php');?>
<?php include_once('../model/sellerFunction.php');?>
<?php include_once('../model/accountentFunction.php');?>
<?php include_once('../model/memberFunction.php');?>
<?php include_once('../model/productFunction.php');?>
<?php include_once('../model/salesFunction.php');?>
<?php include_once('../model/salaryInfoFunction.php');?>
<?php include_once('../model/orderFunction.php');?>
<?php include('../authorization/checkLogin.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    

    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <!--Menu Section starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="personal-admin.php"><?php echo $_SESSION['name']?></a></li>
                <li><a href="../view/index.php">Home</a></li>
                <li><a href="admin-index.php">Dashboard</a></li>
                <li><a href="Seeting.php">Seeting</a></li>
                <li><a href="../authorization/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!--Menu Section ends -->
    