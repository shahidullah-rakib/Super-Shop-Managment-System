<?php include('header.php');?>
<?php session_start(); ?>

    <!-- product sEARCH Section Starts Here -->
    <section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form for Sign-up. </h2>
            <h4 class="text-center text-white">
                
            <?php
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } 

            if(isset($_SESSION['aname']))
            {
                echo $_SESSION['aname'];
                unset($_SESSION['aname']);
            } 
            if(isset($_SESSION['password']))
            {
                echo $_SESSION['password'];
                unset($_SESSION['password']);
            }
            if(isset($_SESSION['repass']))
            {
                echo $_SESSION['repass'];
                unset($_SESSION['repass']);
            }
            if(isset($_SESSION['adob']))
            {
                echo $_SESSION['adob'];
                unset($_SESSION['adob']);
            }
            if(isset($_SESSION['aemail']))
            {
                echo $_SESSION['aemail'];
                unset($_SESSION['aemail']);
            }
            if(isset($_SESSION['aphone']))
            {
                echo $_SESSION['aphone'];
                unset($_SESSION['aphone']);
            }
            if(isset($_SESSION['profilePicture']))
            {
                echo $_SESSION['profilePicture'];
                unset($_SESSION['profilePicture']);
            }
            ?>
            </h4>
            

            <form action="../controller/addCustomerCheck.php" class="order" method="post" name="form" onsubmit="return myFunction()"> 

			
                <fieldset>
                    <legend>INFORMATION</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" id="username"  name="name" placeholder="Full Name" class="input-responsive"  >
                     <p id="Username" class="form_error"> </p>
					 
					 
					 
                    <div class="order-label">Password</div>
                    <input type="password" id="jsPassword" name="password" placeholder="Password" class="input-responsive"  >
					<p id="pass" class="form_error"> </p>
					
					
				    


					
					
                    <div class="order-label">Confirm Password</div>
                    <input type="password" id="repass"  name="repass" placeholder="Confirm password" class="input-responsive" >
					<p id="password" class="form_error"> </p>




                    <div class="order-label">Date Of Birth</div>
                    <input type="date" id="jsDob" name="dob" class="input-responsive"  >
					<p id="cus_dob" class="form_error"> </p>
					
					
					
					
                    <div class="order-label">Gender</div>

                    Male<input type="radio" name="gender" value="male" class="input-responsive">
                    female<input type="radio" name="gender" value="female" class="input-responsive">
                    Others<input type="radio" name="gender" value="others" class="input-responsive">
					<p id="gender" class="form_error"> </p>






                    <div class="order-label">Phone Number</div>
                    <input type="tel" id="jsPhone" name="phonenumber" placeholder="Phone Number" class="input-responsive"  >
					<p id="phn" class="form_error"> </p>
					
					
					
					
                    <div class="order-label">Email</div>
                    <input type="email" id="jsEmail" name="email" placeholder="Mail Address" class="input-responsive"  >
					<p id="emaiL" class="form_error"> </p>



                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="Street, City, Country" class="input-responsive" ></textarea>
						<p id="address" class="form_error"> </p>
						
						
						
                    <fieldset>
                        <legend class="order-label">Select Profile Picture</legend>
        
                        <div class="product-menu-desc">
                            <input type="file" name="profilePicture" class="input-responsive" value="1" >
                            
                        </div>
    
                    </fieldset>

                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
                </fieldset>

                

            </form>

        
			<script  src="../js/customerRegValidation.js"></script>
			
			

        </div>
    </section>
    <!-- product sEARCH Section Ends Here -->

    <?php include('footer.php');?>
	
	
	