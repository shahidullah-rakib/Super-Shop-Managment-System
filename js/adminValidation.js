     function validateForm() {
        
        //Name
        let name = document.getElementById("aName").value;
        if (name == null || name == "") {
            document.getElementById('sp_name').innerHTML = "**Please fill the Name";
            return false;
            
        }
        if (name.length<=3) {
            document.getElementById('sp_name').innerHTML = "**User Name must be more then 3 leter";
            return false;
            
        }

        if(!isNaN(name)){
            document.getElementById('sp_name').innerHTML = "**User Name only allowed characters.";
            return false;
        }

        //password
        let password = document.getElementById("aPassword").value;
        if (password == null || password == "") {
            document.getElementById('sp_password').innerHTML = "**Please fill the Password";
            return false;
            
        }
        if (password.length<6) {
            document.getElementById('sp_password').innerHTML = "**Password More then 6 leter";
            return false;
            
        }

        //dob
        let dob = document.getElementById("aDob").value;
        if (dob == null || dob == "") {
            document.getElementById('sp_dob').innerHTML = "**Please fill the Date of Birth";
            return false;
            
        }

        //gender
          let gender = document.getElementById("aGender").value;
        if (gender == null || gender == "") {
            document.getElementById('sp_gender').innerHTML = "**Please fill the Gender";
            return false;
            
        }  

        //Mobile No
        let mobile = document.getElementById("aPhonenumber").value;
        if (mobile == null || mobile == "") {
            document.getElementById('sp_phonenumber').innerHTML = "**Please fill the Phone number";
            return false;
            
        }

        if (isNaN(mobile)) {
            document.getElementById('sp_phonenumber').innerHTML = "**Phone Number only allowed numbers";
            return false;
            
        }

        if (mobile.length>11) {
            document.getElementById('sp_phonenumber').innerHTML = "**Phone Number Not more or less then 11 number";
            return false;
            
        }
        
    
        // Email
        let email = document.getElementById("aEmail").value;
        if (email == null || email == "") {
            document.getElementById('sp_email').innerHTML = "**Please fill the Email";
            return false;
            
        }

        if (email.indexOf('@') <= 0) {
            document.getElementById('sp_email').innerHTML = "**Invlaid Email";
            return false;
            
        }
    

        //Address
        let address = document.getElementById("aAddress").value;
        if (address == null) {
            document.getElementById('sp_address').innerHTML = "**Please fill the address";
           return false;
    
       }  
    
        
    } 