<?php
    //require('../model/constants.php');

    function displayAllSales($conn){
        $sql = "SELECT * FROM sales_unit";
        

        //execuate the cuery
        $res = mysqli_query($conn, $sql);
        $sales_unit = [];
        while($row = mysqli_fetch_assoc($res)){
            array_push($sales_unit, $row);
        }
        return $sales_unit;
    }
    
?>