<?php
    //start Session
    session_start();

    //create Constants to Store non repeating values
    
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'super-shop-mgs');

    //Execute quary and save data in database
	$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
	$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>