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

function searchOrder(){

var order = document.getElementById("search").value;
console.log(order);
var xttp= new XMLHttpRequest();

xttp.onreadystatechange = function () {
if(this.readyState==4 && this.status==200)
    document.getElementById("show").innerHTML = this.responseText;
};


xttp.open("GET","../control/ajaxrequest.php?search="+order,true);
xttp.send();
}
