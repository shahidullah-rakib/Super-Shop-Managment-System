function myFunction() {

  
    var name = document.getElementById("sName").value;


    if (name == null || name == "") {
        alert("Name can't be blank");
        return false;
    }

    

    var bPrice = document.getElementById("sBuyingPrice").value;

    if (bPrice == null || bPrice == "") {
        alert("Buying price can't be blank");
        return false;
    }

    var sPrice = document.getElementById("sPrice").value;

    if (sPrice == null || sPrice == "") {
        alert("Selling price can't be blank");
        return false;
    }
     var cName = document.getElementById("cName").value;

    if (cName == null || cName == "") {
        alert("Company name can't be blank");
        return false;
    }
     var edate = document.getElementById("edate").value;

    if (edate == null || edate == "") {
        alert("Entry date can't be blank");
        return false;
    }
     var expdate = document.getElementById("expdate").value;

    if (expdate == null || expdate == "") {
        alert("Expire date can't be blank");
        return false;
    }
    var discount = document.getElementById("discount").value;

    if (discount == null || discount == "") {
        alert("Discount field can't be blank");
        return false;
    }
}