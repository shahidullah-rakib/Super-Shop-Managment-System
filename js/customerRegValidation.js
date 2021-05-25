function myFunction() {

    //Name
        var name = document.getElementById("username").value;
   
         if (name == null || name == "") {
         document.getElementById('Username').innerHTML = "**Please fill the Name";
            return false;
      }
   
   
   
       //password
         
           var password = document.getElementById("jsPassword").value;
   
         if (password == null || password == "") {
         document.getElementById('pass').innerHTML = "**Please fill up the Password";
            return false;
      }
               
                if (password.length<5) {
               document.getElementById('pass').innerHTML = "**Password more then 5 letter";
               return false;
               
           }
    
   
   
           //confirm password
         
           var repassword = document.getElementById("repass").value;
   
         if (repassword == null || repassword == "") {
         document.getElementById('password').innerHTML = "**Password and confirm password must be same";
            return false;
      }
      
      
                   if (password == repassword){
                       document.getElementById('password').innerHTML = "**Please fill up the password";
                   return false;
                   }
               
    
               //date of birth
         
           var dob = document.getElementById("jsDob").value;
   
         if (dob == null || dob == "") {
         document.getElementById('cus_dob').innerHTML = "**Please fill up the Date of birth";
            return false;
      }
   
               //phone number
         
           var phone = document.getElementById("jsPhone").value;
   
         if (phone == null || phone == "") {
         document.getElementById('phn').innerHTML = "**Please fill up the Phone number";
            return false;
      }
   
               if (phone.length>11) {
               document.getElementById('pass').innerHTML = "**Phone number not more then or less then 11 words";
               return false;
               
           }
   
               //email
         
           var email = document.getElementById("jsEmail").value;
   
         if (email == null || email == "") {
         document.getElementById('emaiL').innerHTML = "**Please fill up the Email address";
            return false;
      }
   
   
   
   }