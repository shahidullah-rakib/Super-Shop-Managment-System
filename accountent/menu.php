<?php include('../model/constants.php'); ?>
<?php include('../authorization/checkLogin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="../css/seller.css">
</head>
<body>
    <!--Menu Section starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="personal-accountent.php"><?php echo $_SESSION['name']?></a></li>
                <li><a href="../view/index.php">Home</a></li>
                <li><a href="accountent-index.php">Dashboard</a></li>
                <li><a href="#">Seeting</a></li>
                <li><a href="../authorization/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!--Menu Section ends -->
    