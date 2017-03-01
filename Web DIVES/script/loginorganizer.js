function validateForm() {
    var x = document.forms["loginorganizer"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2 >= x.length){
        alert("Not a valid email address");
        return false;
    } 
}