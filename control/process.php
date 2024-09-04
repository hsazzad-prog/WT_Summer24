<?php
include '../model/mydb.php';

$quantitymsg = "";
$hasError="";
$filename="";    
if(isset($_POST["Submit"]))
{
echo $_POST["product"];
echo "<br>";

if(empty($_REQUEST["quantity"]))
{
    $quantitymsg= "Quantity must not be empty";
    $hasError=1;
}
else{
    $quantitymsg= "your Quantity is ".$_REQUEST["quantity"]."<br>";
}

if(isset($_REQUEST["shipping"])) 
{
    echo "<br>Shipping selected".$_REQUEST["shipping"] ;
}
else{
    echo "<br>Please selecct Shipping";
    $hasError=1;
}
if(isset($_REQUEST["expressShippingOption"])){
    echo "<br>".$_REQUEST["expressShippingOption"];
}

if(isset($_REQUEST["giftWrapping"]))
{
    echo "<br>".$_REQUEST["giftWrapping"];
}
if(isset($_REQUEST["terms"]))
{
    //this is fine
}
else
{
    echo "must select terms";
    $hasError=1;
}

if(empty($_REQUEST["email"]))
{
    echo "please enter email";
    $hasError=1;
}
if(empty($_REQUEST["password"]))
{
    echo "please enter password";
    $hasError=1;
}
if(empty($_FILES["myfile"]["name"]))
{
    echo "please uplad a file";
    $hasError=1;
}
else{
    $filename="../uploads/".time().$_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $filename);

    echo "<br> file name is ".$_FILES["myfile"]["name"];
}
if($hasError==1)
{
    echo  "**please fill up the required data **";
}
else{
    $mydb= new mydb();
    $conobj= $mydb->createConObject();
    $insert=$mydb->insertOrder($conobj, "orders",$_REQUEST["email"], $_REQUEST["password"],
    $filename,$_REQUEST["product"], $_REQUEST["quantity"]);
if( $insert)
{
    echo "order created";
}
else{
echo "order not created".$insert;
}
$mydb->closeCon($conobj);


}



}
?>



