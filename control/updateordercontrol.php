<?php
include '../model/mydb.php';


$orderid=$_GET['id'];

$mydb= new mydb();
$conobj = $mydb->createConObject();
$data= $mydb->showOrderById($conobj,"orders",$orderid);

if($data->num_rows > 0){
    foreach($data as $row){
     $orderid=$row["id"];
     $email=$row["email"];
     $product=$row["product"];
     $quantity=$row["quantity"];
     
    }
}

    else{
        echo "no data found";
    }
if(isset($_POST["update"])){
    $mydb= new mydb();
$conobj = $mydb->createConObject();
$data= $mydb->updateOrder($conobj,"orders",$orderid,$_POST["quantity"]);

if($data===TRUE) {
echo "updated";
}
else{
    echo "not updated";
}

}



?>