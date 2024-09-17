function formValidation(){
if(checkQuantity())
{
    return true;
}
else{
    return false;
}
}

function checkQuantity(){

    var quatity = document.getElementById("quantity").value;
    if(quatity == ""){
        document.getElementById("quantityError").innerHTML = "Must be a number";
        return false;
    }
    else {
        return true;
    }

}