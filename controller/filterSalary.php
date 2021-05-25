<?php
    require_once('../model/constants.php');
    

    $search = $_POST['search'];

    $sql="SELECT * FROM emp_salary WHERE type like '%$search%'";

    $result = $conn->query($sql);

    $count = $result->num_rows;
    //echo $count;
?>
<table class='tbl-full'>
<tr>
    <th>ID no.</th>
    <th>Name </th>
    <th>Type </th>
    <th>Email</th>
    <th>Salary Month </th>
    <th>Salary </th>
    <th>Bonus </th>
    
    <th>Actions</th>
</tr>

<?php
    if($count>0)
    {
        while($data=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" .$data['id']. "</td>";
            echo "<td>" .$data['name']. "</td>";
            echo "<td>" .$data['type']. "</td>";
            echo "<td>" .$data['email']. "</td>";
            echo "<td>" .$data['salary_month']. "</td>";
            echo "<td>" .$data['salary']. "</td>";
            echo "<td>" .$data['bonus']. "</td>";
            
            echo "<td> 
                    <a href='admin-update-password.php?id={$data['id']}' class='btn-primary'>Change Password</a> </br>
                    <a href='admin-update.php?id={$data['id']}' class='btn-secondary'>Update</a>
                    <a href='#' name='delete' class='btn-denger'>Delete</a>
            
                </td>";
            echo "</tr>";
        }
    }
    //var_dump($result);
    //echo "$search";


?>
</table>