<?php
echo $_POST["product"];
echo "<br>";

if(empty($_REQUEST["quantity"]))
{
    echo "Quantity must not be empty";
}
else{
    echo "your Quantity is ".$_REQUEST["quantity"]."<br>";
}

if(isset($_REQUEST["shipping"])) 
{
    echo "<br>Shipping selected".$_REQUEST["shipping"] ;
}
else{
    echo "<br>Please selecct Shipping";
}
if(isset($_REQUEST["expressShippingOption"])){
    echo "<br>".$_REQUEST["expressShippingOption"];
}
if(isset($_REQUEST["giftWrapping"]))
{
    echo "<br>".$_REQUEST["giftWrapping"];
}
echo $_REQUEST["email"];

?>



