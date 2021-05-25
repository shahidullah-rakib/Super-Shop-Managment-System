function myFunction() {

    //Name
    var name = document.getElementById("name").value;


    if (name == null || name == "") {
        alert("name can't be blank");
        return false ;
    }
    //type
    var type = document.getElementById("type").value;


    if (type == null || type == "") {
        alert("type can't be blank");
        return false ;

    }
 //email
    var email = document.getElementById("email").value;


    if (email == null || email == "") {
        alert("email can't be blank");
        return false ;

    }
    //salary
    var salary = document.getElementById("salary").value;


    if (salary == null || salary == "") {
        alert("salary can't be blank");
        return false ;

    }
    //bonus

    var bonus = document.getElementById("bonus").value;


    if (bonus == null || bonus == "") {
        alert("bonus can't be blank");
        return false ;

    }
    
    


}
