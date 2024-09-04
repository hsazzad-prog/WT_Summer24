<?php
include '../model/mydb.php';

if(isset($_POST['search'])){
    $orderid = $_POST['orderid'];

    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $data= $mydb->showOrderById($conobj,"orders",$orderid);
    if($data->num_rows > 0){
    foreach($data as $row){
        echo "<table>";
        echo "<tr> <td>"."order id: </td><td>".$row["id"]."</td></tr>";
        echo "<tr> <td>"."order email: </td><td>".$row["email"]."</td></tr>";
        echo "<tr> <td>"."order filename: </td><td>".
        "<img src='".$row["filename"]."' width='200'>"."</td></tr>";
        echo "<tr> <td>"."order product: </td><td>".$row["product"]."</td></tr>";
        echo "<tr> <td>"."order Quanatity: </td><td>".$row["quantity"]."</td></tr>";
        echo "<tr> <td>"."<a href='updateorder.php?id=".$row["id"]."'>Update </a></td></tr>";
        echo "<tr> <td>"."<a href='../deleteorder.php?=id'".$row["id"].">Delete </a></td></tr>";
        
        echo "</table>";
    }
}

    else{
        echo "no data found";
    }

}

?>


