<?php

//echo "hello";

include('../model/constants.php');

$result = mysqli_query($conn, "SELECT * FROM  help_message");

//storing an array
$data = array();
while ($row = mysqli_fetch_object($result))
{
    //array_push($data, $row);
    $data[] = $row;
}

//request response in json formet
echo json_encode($data);
//exit();

?>