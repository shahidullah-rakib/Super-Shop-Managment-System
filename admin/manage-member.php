<?php include('menu.php'); ?>
<script src="../js/searchMember.js"></script>
    
    
    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Member</h1>  
            <form  class="text-center">
                <input type="search" name="name" id="name" class="search" placeholder="Search By Name" onkeyup="ajax()">
                
                

            </form>
            

            <br/>
            
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            } 

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['valid']))
            {
                echo $_SESSION['valid'];
                unset($_SESSION['valid']);
            }

            if(isset($_SESSION['not-valid']))
            {
                echo $_SESSION['not-valid'];
                unset($_SESSION['not-valid']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            
            ?>


            <br/><br/><br/>

            <!-- Button to add member -->
            <a href="add-member.php" class="btn-primary">Add Member</a> 
            
            
            <br/><br/><br/>
            <div class="result" id='result'>
            
            <?php 
		        echo "<table class='tbl-full'>
		        <tr>
                    <th>ID no.</th>
                    <th>Name </th>
                    <th>Profile Picture </th>
                    <th>Password </th>
                    <th>Date of Birth </th>
                    <th>Gender </th>
                    <th>Email </th>
                    <th>Phone </th>
                    <th>Address </th>
                    <th>Actions</th>
		        </tr>";
                $sn=1;
	
		        $row = displayMember($conn);
            ?>
            
            <?php
		        foreach($row as $var){
                
			    echo "
                
				<tr>
                <td>{$var['id']}</td>
                <td>{$var['name']} </td>
                <td> <img src='{$var['profilePicture']}' height='100' width='100'>   </td>
                <td>{$var['password']}</td>
                <td>{$var['dob']}</td>
                <td>{$var['gender']}</td>
                <td>{$var['email']}</td>
                <td>{$var['phone']}</td>
                <td>{$var['address']}</td>
                <td>
                    <a href='member-update-password.php?id={$var['id']}' class='btn-primary'>Change Password</a> </br>
                    <a href='member-update.php?id={$var['id']}' class='btn-secondary'>Update</a>
                    <a href='member-delete.php?id={$var['id']}' name='delete' class='btn-denger'>Delete</a>
                    
                </td>
                </tr>
                
						
				";
				
			
		}

			echo "</table>";
?>
</div>

            

                
    <!--Menu Contact Section ends -->



    <?php include('footer.php'); ?>